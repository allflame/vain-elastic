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

namespace Vain\Elastic\Client\Factory;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;

/**
 * Class ElasticClientFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ElasticClientFactory implements ElasticClientFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createClient(\ArrayAccess $config) : Client
    {
        return ClientBuilder::fromConfig($config['elastic']);
    }
}