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

namespace Vain\Elastic\Client\Factory\Decorator\Assert;

use Elasticsearch\Client;
use Vain\Elastic\Client\Factory\Decorator\AbstractElasticClientFactoryDecorator;
use Vain\Elastic\Client\Factory\ElasticClientFactoryInterface;
use Vain\Elastic\Exception\BadConfigFactoryException;
use Vain\Elastic\Exception\NoElasticConfigFactoryException;
use Vain\Elastic\Exception\NoRequiredFieldFactoryException;

/**
 * Class ElasticClientFactoryAssertDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ElasticClientFactoryAssertDecorator extends AbstractElasticClientFactoryDecorator
{
    private $requiredFields;

    /**
     * ElasticClientFactoryAssertDecorator constructor.
     *
     * @param ElasticClientFactoryInterface $clientFactory
     * @param array                         $requiredFields
     */
    public function __construct(ElasticClientFactoryInterface $clientFactory, array $requiredFields)
    {
        $this->requiredFields = $requiredFields;
        parent::__construct($clientFactory);
    }

    /**
     * @inheritDoc
     */
    public function createClient(\ArrayAccess $config) : Client
    {
        if (false === $config->offsetExists('elastic')) {
            throw new NoElasticConfigFactoryException($this);
        }

        $configData = $config->offsetGet('elastic');
        if (false === is_array($configData)) {
            throw new BadConfigFactoryException($this);
        }

        foreach ($this->requiredFields as $requiredField) {
            if (false === array_key_exists($requiredField, $configData)) {
                throw new NoRequiredFieldFactoryException($this, $requiredField);
            }
        }

        return parent::createClient($config);
    }
}