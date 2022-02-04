<?php

namespace Plivo\Resources\Application;

use Plivo\BaseClient;
use Plivo\Resources\ResourceList;

/**
 * Class ApplicationList
 * @package Plivo\Resources\Application
 */
class ApplicationList extends ResourceList
{
    public $statusCode;
    /**
     * ApplicationList constructor.
     * @param BaseClient $plivoClient
     * @param $meta
     * @param array $resources
     */
    function __construct(BaseClient $plivoClient, $meta, array $resources, $statusCode)
    {
        $this->statusCode = $statusCode;
        parent::__construct($plivoClient, $meta, $resources);
    }
}