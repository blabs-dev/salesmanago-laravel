<?php

namespace Blabs\SmLaravel;

use Blabs\SalesManago\Configurator;
use Blabs\SalesManago\DataTransferObjects\Responses\AddEventResponseData;
use Blabs\SalesManago\DataTransferObjects\Responses\UpsertCustomerResponseData;
use Blabs\SalesManago\ServiceFactory;
use Blabs\SalesManago\Services\ApiService as SmApiService;
use Blabs\SalesManago\Services\ServiceAbstract;

class SmLaravel
{
    public SmApiService $service;

    public function __construct(public string $clientId, public string $apiSecret)
    {
        $configurator = new Configurator($this->clientId, $this->apiSecret);
        $factory = new ServiceFactory($configurator);
        $this->service = $factory->createContactService();
    }
}
