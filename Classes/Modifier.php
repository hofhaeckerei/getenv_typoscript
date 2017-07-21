<?php
namespace H4ck3r31\GetEnvTypoScript;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\SingletonInterface;

class Modifier implements SingletonInterface
{
    /**
     * @param array $parameters
     * @return string
     */
    public function resolve(array $parameters)
    {
        $value = getenv($parameters['functionArgument']);
        if (
            $value === null || $value === false
            || is_object($value) || is_array($value)
        ) {
            $value = '';
        }
        return (string)$value;
    }
}