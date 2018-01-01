<?php
/**
 * @author Sam Street
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends Entity {

	/**
	 * @var integer $id
	 * @ORM\Column(name="id", type="integer", unique=true, nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 *
	 */
	private $id;

    /**
     * @ORM\OneToMany(targetEntity="Assignment", mappedBy="user")
     */
    private $features;

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return User
	 */
	public function setId( int $id ): User {
		$this->id = $id;

		return $this;
	}



}