<?php
/**
 * @author Sam Street
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="assignment")
 * @ORM\HasLifecycleCallbacks()
 */
class Assignment extends Entity
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
     * @var \DateTime $startDate
     * @ORM\Column(name="startDate", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime $endDate
     * @ORM\Column(name="endDate", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var string $title
     * @ORM\Column(name="title", type="string", nullable=false)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

}
