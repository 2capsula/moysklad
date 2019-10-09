<?php

namespace MoySklad\Client;

use MoySklad\ApiClient;
use MoySklad\Client\Endpoint\GetEntitiesListEndpoint;
use MoySklad\Entity\Discount\BonusTransaction;

class BonusTransactionClient extends EntityClientBase
{
    use GetEntitiesListEndpoint;

    /**
     * BonusTransactionClient constructor.
     * @param ApiClient $api
     */
    public function __construct(ApiClient $api)
    {
        parent::__construct($api, '/entity/bonustransaction/');
    }

    /**
     * @return string
     */
    protected function getMetaEntityClass(): string
    {
        return BonusTransaction::class;
    }
}
