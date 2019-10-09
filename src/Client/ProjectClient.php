<?php

namespace MoySklad\Client;

use MoySklad\ApiClient;
use MoySklad\Client\Endpoint\GetEntitiesListEndpoint;
use MoySklad\Entity\Project;

class ProjectClient extends EntityClientBase
{
    use GetEntitiesListEndpoint;

    /**
     * ProjectClient constructor.
     * @param ApiClient $api
     */
    public function __construct(ApiClient $api)
    {
        parent::__construct($api, '/entity/project/');
    }

    /**
     * @return string
     */
    protected function getMetaEntityClass(): string
    {
        return Project::class;
    }
}
