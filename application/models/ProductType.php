<?php

class Application_Model_ProductType
{
	protected $_id;
	protected $_name;

    public function __set($id, $name){
        $this->_name = $name;
        $this->_id = $id;
    }

    public function __get(){

    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }	
}

