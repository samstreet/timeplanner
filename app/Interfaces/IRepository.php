<?php
/**
 * @author Sam Street
 */

namespace App\Interfaces;

use App\Entity\Entity;

interface IRepository
{

    /**
     * @param \App\Entity\Entity $entity
     *
     * @return \App\Entity\Entity
     */
    public function create(Entity $entity): Entity;

    /**
     * @param \App\Entity\Entity $entity
     * @param                    $data
     *
     * @return \App\Entity\Entity
     */
    public function update(Entity $entity, $data): Entity;

    /**
     * @param \App\Entity\Entity $entity
     *
     * @return bool
     */
    public function delete(Entity $entity): bool;

}