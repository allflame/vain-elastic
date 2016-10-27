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

use Vain\Core\Exception\AbstractCoreException;
use Vain\Elastic\Client\Factory\ElasticClientFactoryInterface;

/**
 * Class ElasticClientFactoryException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ElasticClientFactoryException extends AbstractCoreException
{
    private $clientFactory;

    /**
     * ElasticClientFactoryException constructor.
     *
     * @param ElasticClientFactoryInterface $clientFactory
     * @param string                        $message
     * @param int                           $code
     * @param \Exception|null               $previous
     */
    public function __construct(
        ElasticClientFactoryInterface $clientFactory,
        string $message,
        int $code = 500,
        \Exception $previous = null
    ) {
        $this->clientFactory = $clientFactory;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return ElasticClientFactoryInterface
     */
    public function getClientFactory(): ElasticClientFactoryInterface
    {
        return $this->clientFactory;
    }
}