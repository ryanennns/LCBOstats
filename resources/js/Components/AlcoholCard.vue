<script setup>
const emit = defineEmits(['click']);

const props = defineProps({
    alcohol: {
        type: Object,
        required: true,
    }
});

const formatPrice = (price) => {
    return new Intl.NumberFormat('en-CA', {
        style: 'currency',
        currency: 'CAD'
    }).format(price);
};
</script>

<template>
    <div class="card-container" @click="emit('click', alcohol)">
        <div class="image-container">
            <img
                :src="alcohol.image_url"
                :alt="alcohol.title"
                class="alcohol-image"
                @error="$event.target.src = '/images/placeholder.jpg'"
            >
            <div v-if="alcohol.out_of_stock" class="out-of-stock-badge">
                Out of Stock
            </div>
        </div>

        <!-- Content Section -->
        <div class="content-section">
            <h3 class="title">{{ alcohol.title }}</h3>
            <div class="price-volume">
                <span class="price">{{ formatPrice(alcohol.price) }}</span>
                <span class="volume">{{ alcohol.volume }}L</span>
            </div>
            <div class="details">
                <span>{{ alcohol.alcohol_content }}% alc</span>
                <div class="rating">
                    <span class="star">★</span>
                    {{ alcohol.rating ?? 'N/A' }}
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.card-container {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s;
    max-width: 300px;
    min-width: 300px;
    margin: 1rem;
    font-family: 'Roboto', sans-serif;
}

.card-container:hover {
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    cursor: pointer;
}

.card-container:hover .alcohol-image {
    transform: scale(1.1);
}

.image-container {
    position: relative;
    width: 100%;
    height: auto;
    padding-top: 75%;
    max-height: 225px;
}

.alcohol-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.out-of-stock-badge {
    position: absolute;
    top: 0;
    background-color: rgba(255, 0, 0, 0.8);
    color: white;
    padding: 4px 8px;
    font-size: 0.875rem;
}

.content-section {
    padding: 16px;
}

.title {
    font-size: 1.125rem;
    font-weight: bold;
    margin-bottom: 8px;
    line-clamp: 2;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.price-volume {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
}

.price {
    color: #4CAF50;
    font-size: 1.25rem;
    font-weight: bold;
}

.volume {
    font-size: 0.875rem;
    color: #777;
}

.details {
    display: flex;
    justify-content: space-between;
    font-size: 0.875rem;
    color: #777;
}

.rating {
    display: flex;
    align-items: center;
}

.star {
    margin-right: 4px;
}
</style>
