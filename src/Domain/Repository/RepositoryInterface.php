<?php
namespace Digicademy\DLight\Domain\Repository;

/*********************************************************************************************
 * Copyright notice
 *
 * DLight - Domain Driven Design Microframework
 *
 * @copyright 2018-2019 Torsten Schrade <Torsten.Schrade@adwmainz.de>
 * @copyright 2018-2019 Academy of Sciences and Literature | Mainz
 * @license   https://raw.githubusercontent.com/digicademy/dlight/master/LICENSE (MIT License)
 *
 *********************************************************************************************/

interface RepositoryInterface
{

    /**
     * @param $collection
     * @param $identifier
     *
     * @return mixed
     */
    public function findByIdentifier($collection, $identifier);

    /**
     * @param string $collection
     * @param string $query
     *
     * @return mixed
     * @throws \Exception
     */
    public function findAll($collection, $query);

}
