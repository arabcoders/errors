<?php
/**
 * This file is part of ( framework ) project.
 *
 * (c) 2017 ArabCoders Ltd.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace arabcoders\errors\Output\Interfaces;

use arabcoders\errors\Interfaces\MapInterface;

/**
 * Interface OutputInterface
 *
 * @package arabcoders\errors\Output\Interfaces
 */
Interface OutputInterface
{
    /**
     * Process Data for output or not.
     */
    public function display();

    /**
     * Set Map.
     *
     * @param MapInterface $map
     *
     * @return OutputInterface
     */
    public function setMap( MapInterface $map ) : OutputInterface;

    /**
     * Get Map.
     *
     * @return MapInterface
     */
    public function getMap() : MapInterface;
}