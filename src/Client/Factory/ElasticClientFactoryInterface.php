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

/**
 * Interface ElasticClientFactoryInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface ElasticClientFactoryInterface
{
    /**
     * @param \ArrayAccess $config
     *
     * @return Client
     */
    public function createClient(\ArrayAccess $config) : Client;
}