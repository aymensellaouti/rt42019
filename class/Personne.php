<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/03/2019
 * Time: 16:17
 */
class Personne
{
    private $name;
    private $firstname;

    /**
     * Personne constructor.
     * @param $name
     * @param $firstname
     */
    public function __construct($name = '', $firstname = '')
    {
        $this->name = $name;
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

}