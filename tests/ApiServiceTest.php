<?php

use Blabs\SalesManago\Services\ApiService;
use Blabs\SmLaravel\SmLaravel;

it('can instantiate sales manago api service', function () {
    $service = app(SmLaravel::class);
    expect(get_class($service->service))->toBe(ApiService::class);
});
