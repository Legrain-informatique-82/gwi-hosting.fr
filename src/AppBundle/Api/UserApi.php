<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/06/15
 * Time: 14:52
 */

namespace AppBundle\Api;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;


class UserApi  {

    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var string */
    private $name;

    /**
     * @SecurityAssert\UserPassword(
     *     message = "Votre mot de passe actuel est erroné"
     * )
     */
    //private $oldPassword;

    /**
     * @Assert\Length(
     *      min = "5",
     *      max = "50",
     *      minMessage = "Votre mot de passe doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre mot de passe ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $password;



    /**
     * @var string
     **/
    private $firstname;

    /**
     * @Assert\Email(
     *     message = "'{{ value }}' n'est pas un email valide.",
     *     checkMX = true
     * )
     */
    private $email;


    /**
     * @var string
     */
    private $address1;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $address3;


    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $zipcode;

    /**
     *
     */
    protected $agency;

    /**
     * @var string
     *
     */
    private $phone;

    /**
     * @var string
     *
     */
    private $cellPhone;

    /**
     * @var string
     *
     */
    private $workPhone;



    /**
     * @var boolean
     *
     */
    private $active;
    private $codeTiers;
    private $companyName;
    private $numTVA;
    private $tiersPourTva;

    function __construct($id, $name,/*$oldPassword,*/$password, $firstname, $email, $address1, $address2, $address3, $city, $zipcode, $agency, $phone,$cellPhone,$workPhone, $active,$codeTiers,$companyName,$numTVA,$tiersPourTva)
    {
        $this->id = $id;
        $this->name = $name;
//        $this->oldPassword=$oldPassword;
        $this->password=$password;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->address3 = $address3;
        $this->city = $city;
        $this->zipcode = $zipcode;
        $this->agency = $agency;
        $this->phone = $phone;
        $this->cellPhone = $cellPhone;
        $this->workPhone = $workPhone;
        $this->active = $active;
        $this->codeTiers=$codeTiers;
        $this->companyName= $companyName;
        $this->numTVA = $numTVA;
        $this->tiersPourTva = $tiersPourTva;
    }

    /**
     * @return mixed
     */
    public function getCodeTiers()
    {
        return $this->codeTiers;
    }

    /**
     * @param mixed $codeTiers
     */
    public function setCodeTiers($codeTiers)
    {
        $this->codeTiers = $codeTiers;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getNumTVA()
    {
        return $this->numTVA;
    }

    /**
     * @param mixed $numTVA
     */
    public function setNumTVA($numTVA)
    {
        $this->numTVA = $numTVA;
    }

    /**
     * @return mixed
     */
    public function getTiersPourTva()
    {
        return $this->tiersPourTva;
    }

    /**
     * @param mixed $tiersPourTva
     */
    public function setTiersPourTva($tiersPourTva)
    {
        $this->tiersPourTva = $tiersPourTva;
    }

    /**
     * @return string
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * @param string $cellPhone
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * @param string $workPhone
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;
    }

    /**
     * @return mixed
     */
   /* public function getOldPassword()
    {
        return $this->oldPassword;
    }*/

    /**
     * @param mixed $oldPassword
     */
   /* public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }*/

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @param string $address3
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param mixed $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return mixed
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * @param mixed $agency
     */
    public function setAgency($agency)
    {
        $this->agency = $agency;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }


}