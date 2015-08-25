<?php

//class
class Contact

{
    //class properties
    private $name;
    private $phone;
    private $address;

    // construct (array)
    function __construct($name, $phone, $address)
    {
        // renaming variables
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;

        // getters and setters


        // Get name
        function getName()
        {
            return $this->name;
        }

        // Set name
        function setName($new_name)
        {
            $this->name = $new_description;
        }


        // get phone
        function getPhone()
        {
            return $this->phone;
        }
        // set phone
        function setPhone($new_phone)
        {
            $this->phone = $new_phone;
        }

        // get address
        function getAddress()
        {
            return $this->address;
        }
        // set address
        function setAddress($new_address)
        {
            $this->address = $new_address;
        }


        // static functions
        // get all list of contacts



        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        // delete all

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }


        // save function

        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }
    }


 ?>
