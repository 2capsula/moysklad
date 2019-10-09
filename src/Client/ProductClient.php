<?php

namespace MoySklad\Client;

use MoySklad\ApiClient;
use MoySklad\Client\Endpoint\GetEntitiesListEndpoint;
use MoySklad\Entity\Image;
use MoySklad\Entity\ListEntity;
use MoySklad\Entity\Product\Product;
use MoySklad\Http\RequestExecutor;
use MoySklad\Util\Exception\ApiClientException;
use MoySklad\Util\Param\Param;

class ProductClient extends EntityClientBase
{
    use GetEntitiesListEndpoint;

    /**
     * ProductClient constructor.
     * @param ApiClient $api
     */
    public function __construct(ApiClient $api)
    {
        parent::__construct($api, '/entity/product/');
    }

    /**
     * @param string $productId
     * @param Param[] $params
     * @return ListEntity
     * @throws ApiClientException
     */
    public function getImagesList(string $productId, array $params = []): ListEntity
    {
        /** @var $listEntity ListEntity */
        $listEntity = RequestExecutor::path($this->getApi(), $this->getPath().$productId.'/images')->params($params)->get(ListEntity::class);

        return $listEntity;
    }

    /**
     * @param string $productId
     * @param Image $image
     * @return Image[]
     * @throws ApiClientException
     * @throws \Exception
     */
    public function createImage(string $productId, Image $image): array
    {
        $className = Image::class;

        /** @var Image[] $images */
        $images = RequestExecutor::path($this->getApi(), $this->getPath().$productId.'/images')->body($image)->post("array<{$className}>");

        return $images;
    }

    /**
     * @param string $productId
     * @param Image[] $images
     * @return Image[]
     * @throws ApiClientException
     * @throws \Exception
     */
    public function massUpdateImages(string $productId, array $images): array
    {
        return RequestExecutor::path($this->getApi(), $this->getPath().$productId.'/images')->bodyArray($images)->post("array<{$this->getMetaEntityClass()}>");
    }

    /**
     * @param string $productId
     * @param string $imageId
     * @throws ApiClientException
     */
    public function deleteImage(string $productId, string $imageId): void
    {
        RequestExecutor::path($this->getApi(), $this->getPath().$productId.'/images/'.$imageId)->delete();
    }

    /**
     * @return string
     */
    protected function getMetaEntityClass(): string
    {
        return Product::class;
    }
}
