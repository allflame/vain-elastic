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

namespace Vain\Elastic\Exception;

use Vain\Elastic\Client\Factory\ElasticClientFactoryInterface;

/**
 * Class BadConfigFactoryException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class BadConfigFactoryException extends ElasticClientFactoryException
{
    /**
     * BadConfigFactoryException constructor.
     *
     * @param ElasticClientFactoryInterface $clientFactory
     */
    public function __construct(ElasticClientFactoryInterface $clientFactory)
    {
        parent::__construct($clientFactory, 'Elastic config section should contain array', 0, null);
    }
}