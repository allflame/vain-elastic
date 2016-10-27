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
 * Class NoRequiredFieldFactoryException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class NoRequiredFieldFactoryException extends ElasticClientFactoryException
{
    /**
     * NoRequiredFieldFactoryException constructor.
     *
     * @param ElasticClientFactoryInterface $clientFactory
     * @param string                        $requiredField
     */
    public function __construct(ElasticClientFactoryInterface $clientFactory, $requiredField)
    {
        parent::__construct(
            $clientFactory,
            sprintf('Required field %s is missing from elastic config', $requiredField)
        );
    }
}