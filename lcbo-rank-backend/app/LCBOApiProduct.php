<?php

namespace App;

use App\Models\Alcohol;
use stdClass;

class LCBOApiProduct
{
    private stdClass $raw;

    public function __construct(stdClass $raw)
    {
        $this->raw = $raw;
    }

    public function getRaw(): stdClass
    {
        return $this->raw;
    }

    public function isAPromotion(): bool
    {
        $returnValue = false;
        collect($this->raw->ec_category)->each(function (string $categoryLayer) use (&$returnValue) {
            if (str_contains('Promotion', $categoryLayer))
                $returnValue = true;
        });
        return $returnValue;
    }

    public function isBlackListed(): bool
    {
        return collect(Alcohol::BLACKLISTED_IDS)->contains($this->raw->permanentid);
    }

    public function getVolume(): float
    {
        if (!isset($this->raw->lcbo_total_volume) && isset($this->raw->lcbo_unit_volume)) {
            return $this->truncatedVolumeToInteger($this->raw->lcbo_unit_volume);
        }
        return $this->raw->lcbo_total_volume ?? 0.0;
    }

    public function getTitle(): string
    {
        return trim($this->raw->title);
    }

    public function getBrand(): ?string
    {
        return $this->raw->ec_brand ?? null;
    }

    public function getCategory(): string
    {
        return isset($this->raw->ec_category_filter) ? explode('|', $this->raw->ec_category_filter[0])[1] : '';
    }

    public function getSubcategory(): ?string
    {
        return explode('|', $this->raw->ec_category_filter[0])[2] ?? null;
    }

    public function getPrice(): ?float
    {
        return $this->raw->ec_price ?? null;
    }

    public function getAlcoholContent(): float
    {
        return $this->raw->lcbo_alcohol_percent ?? 0.0;
    }

    public function getPriceIndex(): ?float
    {
        return $this->calculatePriceIndex($this->getPrice(), $this->getAlcoholContent(), $this->getVolume());
    }

    public function getCountry(): ?string
    {
        return $this->raw->country_of_manufacture ?? null;
    }

    public function getUrl(): string
    {
        return $this->raw->sysuri;
    }

    public function getThumbnailUrl(): ?string
    {
        return $this->raw->ec_thumbnails;
    }

    public function getImageUrl(): array|string
    {
        return str_replace('319.319', '1280.1280', $this->raw->ec_thumbnails);
    }

    public function getOutOfStock(): ?bool
    {
        return isset($this->raw->out_of_stock) ? ($this->raw->out_of_stock === 'true') : null;
    }

    public function getDescription(): string
    {
        return isset($this->raw->ec_shortdesc) ? trim($this->raw->ec_shortdesc) : '';
    }

    public function getRating()
    {
        return $this->raw->ec_rating ?? null;
    }

    public function getReviews(): int
    {
        return $this->raw->avg_reviews ?? 0;
    }

    public function getPermanentId()
    {
        return $this->raw->permanentid;
    }

    private function calculatePriceIndex(?float $price, ?float $alcoholContent, ?int $volume): ?float
    {
        if ($price == 0 || $alcoholContent == 0 || $volume == 0) {
            return null;
        }

        return $price / (($alcoholContent / 100) * $volume);
    }

    private function truncatedVolumeToInteger(string $truncatedValue): int
    {
        $volumes = collect(explode('x', $truncatedValue));

        if ($volumes->count() == 1)
            return $truncatedValue;

        $totalVolume = 0;
        $volumes->each(function ($volume) use (&$totalVolume, $volumes) {
            if ($volumes->first() == $volume) {
                $totalVolume = $volume;
            } else {
                $totalVolume *= $volume;
            }
        });

        return $totalVolume;
    }

    public function toArray(): array
    {
        return [
            'permanent_id' => $this->getPermanentId(),
            'title' => $this->getTitle(),
            'brand' => $this->getBrand(),
            'category' => $this->getCategory(),
            'subcategory' => $this->getSubcategory(),
            'price' => $this->getPrice(),
            'volume' => $this->getVolume(),
            'alcohol_content' => $this->getAlcoholContent(),
            'price_index' => $this->getPriceIndex(),
            'country' => $this->getCountry(),
            'url' => $this->getUrl(),
            'thumbnail_url' => $this->getThumbnailUrl(),
            'image_url' => $this->getImageUrl(),
            'out_of_stock' => $this->getOutOfStock(),
            'description' => $this->getDescription(),
            'rating' => $this->getRating(),
            'reviews' => $this->getReviews(),
        ];
    }
}
