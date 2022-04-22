<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/06/15
 * Time: 14:52
 */

namespace AppBundle\Api;


class ZipCodeApi {

    private $id;


    private $name;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ZipCodeApi
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
     * Constructor
     */
    public function __construct($name=null)
    {
        $this->name=$name;
    }





}