<?php
/**
 * Created by PhpStorm.
 * User: Lahiru
 * Date: 19/04/2016
 * Time: 12:03 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="student")
 */
class Student
{
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    /**
     * @ORM\Column(type="string")
     * @ORM\Id
     */
    private $index_no;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $icbc;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $gender;

    /**
     * @ORM\Column(type="integer")
     */
    private $birthyear;



    /**
     * Set name
     *
     * @param string $name
     * @return Student
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set icbc
     *
     * @param string $icbc
     * @return Student
     */
    public function setIcbc($icbc)
    {
        $this->icbc = $icbc;

        return $this;
    }

    /**
     * Get icbc
     *
     * @return string 
     */
    public function getIcbc()
    {
        return $this->icbc;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Student
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthyear
     *
     * @param integer $birthyear
     * @return Student
     */
    public function setBirthyear($birthyear)
    {
        $this->birthyear = $birthyear;

        return $this;
    }

    /**
     * Get birthyear
     *
     * @return integer 
     */
    public function getBirthyear()
    {
        return $this->birthyear;
    }

    /**
     * Set index_no
     *
     * @param string $indexNo
     * @return Student
     */
    public function setIndexNo($indexNo)
    {
        $this->index_no = $indexNo;

        return $this;
    }

    /**
     * Get index_no
     *
     * @return string 
     */
    public function getIndexNo()
    {
        return $this->index_no;
    }
}
