<?php

class Bob_PetController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->mdate = date("M d Y - h:i:s");
    }


}

