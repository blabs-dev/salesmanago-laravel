<?php

use Blabs\SalesManago\Services\ApiService;
use Blabs\SmLaravel\SmLaravel;

it('can test', function () {
    $service = app(SmLaravel::class);
    expect(get_class($service->service))->toBe(ApiService::class);
});
