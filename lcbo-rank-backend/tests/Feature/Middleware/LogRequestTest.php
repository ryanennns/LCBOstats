<?php

namespace Tests\Feature;

use App\Models\ApiRequest;
use Tests\TestCase;

class LogRequestTest extends TestCase
{
    public function test_it_creates_an_api_request_model_when_api_request_made()
    {
        $this->get('/api/alcohol?chocolate=snickers')->assertSuccessful();

        $queryParameters = ApiRequest::query()
            ->where('route', 'like', '%/api/alcohol%')
            ->firstOrFail()
            ->query_parameters;

        $this->assertStringContainsString('chocolate', $queryParameters);
        $this->assertStringContainsString('snickers', $queryParameters);
    }
}
