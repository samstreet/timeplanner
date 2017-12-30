<?php
/**
 * @author Sam Street
 */

namespace App\Repository;

use App\Entity\Entity;
use App\Entity\User;
use App\Interfaces\IRepository;

class UserRepository extends BaseRepository implements IRepository
{

    /**
     * @param \App\Entity\Entity $entity
     *
     * @return \App\Entity\Entity
     */
    public function create(Entity $entity): Entity
    {
        $this->em->persist($entity);
        $this->em->flush();

        return $entity;
    }

    /**
     * @param \App\Entity\Entity $entity
     * @param                    $data
     *
     * @return \App\Entity\Entity
     */
    public function update(Entity $entity, $data): Entity
    {
        // TODO: Implement update() method.
    }

    /**
     * @param \App\Entity\Entity $entity
     *
     * @return bool
     */
    public function delete(Entity $entity): bool
    {
        try {
            $this->em->remove($entity);
            $this->em->flush();

            return true;
        } catch ( \Exception $e ){
            return false;
        }
    }

    /**
     * @param $id
     *
     * @return \App\Entity\Entity
     */
    public function find($id): Entity
    {
        $u = new User();
        $u->setId($id);

        return $u;
    }


}
