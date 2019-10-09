<?php

namespace MoySklad\Client;

use MoySklad\ApiClient;
use MoySklad\Client\Endpoint\GetEntitiesListEndpoint;
use MoySklad\Entity\Group;

class GroupClient extends EntityClientBase
{
    use GetEntitiesListEndpoint;

    /**
     * GroupClient constructor.
     * @param ApiClient $api
     */
    public function __construct(ApiClient $api)
    {
        parent::__construct($api, '/entity/group/');
    }

    /**
     * @return string
     */
    protected function getMetaEntityClass(): string
    {
        return Group::class;
    }
}
