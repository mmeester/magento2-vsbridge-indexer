<?php
/**
 * @package   Divante\VsbridgeIndexerCore
 * @author    Agata Firlejczyk <afirlejczyk@divante.pl>
 * @copyright 2019 Divante Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Divante\VsbridgeIndexerCore\Api;

use Divante\VsbridgeIndexerCore\Api\Index\TypeInterface;

/**
 * Interface ConvertDataTypesInterface
 */
interface ConvertDataTypesInterface
{
    /**
     * @param TypeInterface $type
     * @param array $docs
     *
     * @return array
     */
    public function castFieldsUsingMapping(TypeInterface $type, array $docs);
}