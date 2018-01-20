<?php
/**
 * @author Sam Street
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping as ORM;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\App;
use Laravel\Passport\HasApiTokens;
use LaravelDoctrine\ORM\Auth\Authenticatable;
use LaravelDoctrine\ORM\Notifications\Notifiable;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends Entity
    implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, Notifiable, HasApiTokens;

    function __construct()
    {
        $this->assignments = new ArrayCollection();
        $this->role = new ArrayCollection();
    }

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
    private $assignments;

    /**
     * @var string
     * @ORM\Column(name="username", type="string", unique=true, nullable=false)
     */
    private $username;

    /**
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     */
    private $role;

    /**
     * @var \DateTime
     * @ORM\Column(name="dob", type="date", nullable=false)
     */
    private $dob;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_date", type="date", nullable=false)
     */
    private $createdDate;

    /**
     * @var \DateTime
     * @ORM\Column(name="expiry_date", type="date", nullable=true)
     */
    private $expiryDate;

    /**
     * @var string
     * @ORM\Column(name="first_name", type="string",  nullable=false)
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column(name="last_name", type="string",  nullable=false)
     */
    private $lastName;

    /**
     * @var string
     * @ORM\Column(name="email", type="string",  nullable=false)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="is_active", type="string",  nullable=false)
     */
    private $isActive = 1;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id'        => $this->getId(),
            'firstName' => $this->getFirstName(),
            'lastName'  => $this->getLastName(),
            'email'     => $this->getEmail()
        ];
    }

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * @return mixed
     */
    public function getAssignments()
    {
        return $this->assignments;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getDob(): \DateTime
    {
        return $this->dob;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate(): \DateTime
    {
        return $this->createdDate;
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate(): \DateTime
    {
        return $this->expiryDate;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getIsActive(): string
    {
        return $this->isActive;
    }

    /**
     * @param mixed $assignments
     */
    public function setAssignments($assignments)
    {
        $this->assignments = $assignments;

        return $this;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @param \DateTime $dob
     */
    public function setDob(\DateTime $dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * @param \DateTime $createdDate
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @param \DateTime $expiryDate
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param string $isActive
     *
     * @return $this
     */
    public function setIsActive(string $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }


    public function getKey(){
        return 'key';
    }

}
