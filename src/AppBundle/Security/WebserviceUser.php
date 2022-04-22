<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 10/06/15
 * Time: 16:08
 */

namespace AppBundle\Security;

use Symfony\Component\Security\Core\User\UserInterface;

class WebserviceUser implements UserInterface
{
    private $username;
    private $email;
    private $password;
    private $salt;
    public $roles;
    private $user;



    public function __construct($user){


        $this->user=$user;
        $this->password=$user->password;
        $this->salt=$user->registrationDate;
        $this->email = $user->email;
        $this->username=$user->email;
        $this->roles = array();
        foreach($user->roles as $r){
            $this->roles[]=$r;
        }

      //  if(!is_array($user->roles))$user->roles=array($user->roles);

    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function getUser()
    {
        return $this->user;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function eraseCredentials()
    {
        $this->password='';
    }



    public function equals(UserInterface $user)
    {

        if (!$user instanceof WebserviceUser) {
            return false;
        }



        return true;
    }
}