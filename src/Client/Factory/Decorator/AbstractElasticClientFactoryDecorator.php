<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-elastic
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-elastic
 */
declare(strict_types = 1);

namespace Vain\Elastic\Client\Factory\Decorator;

use Elasticsearch\Client;
use Vain\Elastic\Client\Factory\ElasticClientFactoryInterface;

/**
 * Class AbstractElasticClientFactoryDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractElasticClientFactoryDecorator implements ElasticClientFactoryInterface
{
    private $clientFactory;

    /**
     * AbstractElasticClientFactoryDecorator constructor.
     *
     * @param ElasticClientFactoryInterface $clientFactory
     */
    public function __construct(ElasticClientFactoryInterface $clientFactory)
    {
        $this->clientFactory = $clientFactory;
    }

    /**
     * @inheritDoc
     */
    public function createClient(\ArrayAccess $config) : Client
    {
        return $this->clientFactory->createClient($config);
    }
}