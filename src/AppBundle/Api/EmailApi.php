<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/06/15
 * Time: 14:52
 */

namespace AppBundle\Api;


use Symfony\Component\Validator\Constraints as Assert;


class EmailApi {

    private $username;

    /**
     * @Assert\Length(
     *      min = "8",
     *      max = "50",
     *      minMessage = "Votre mot de passe doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre mot de passe ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $password;

    /**
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas un nombre valide.")
     */
    private $quota;

    /**
     * @Assert\Email(
     *     message = "'{{ value }}' n'est pas un email valide.",
     *     checkMX = true
     * )
     */
    private $fallback_email;



    /**
     * Constructor
     */
    public function __construct($username=null,$password=null,$quota=null,$fallback_email=null)
    {
        $this->username=$username;
        $this->password=$password;
        $this->quota=$quota;
        $this->fallback_email=$fallback_email;

    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * @param int $quota
     */
    public function setQuota($quota)
    {
        $this->quota = $quota;
    }


    /**
     * @return string
     */
    public function getFallbackEmail()
    {
        return $this->fallback_email;
    }

    /**
     * @param string $fallback_email
     */
    public function setFallbackEmail($fallback_email)
    {
        $this->fallback_email = $fallback_email;
    }




}