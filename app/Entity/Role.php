<?php
/**
 * @author Sam Street
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="role")
 * @ORM\HasLifecycleCallbacks()
 */
class Role extends Entity
{

    /**
     * @var integer $id
     * @ORM\Column(name="id", type="integer", unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="role_name", type="string", nullable=false)
     */
    private $rolename;

    /**
     * @var string
     * @ORM\Column(name="access", type="string", nullable=false)
     */
    private $access;

    public function jsonSerialize()
    {
        return [

        ];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRolename(): string
    {
        return $this->rolename;
    }

    /**
     * @return string
     */
    public function getAccess(): string
    {
        return $this->access;
    }


}
