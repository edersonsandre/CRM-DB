<?php

class OportunidadeController extends Zend_Controller_Action
{

    public function init(){
        $this->getHelper('viewRenderer')->setNoRender(true);

        $server = new Zend_Rest_Server();
        $server->setClass('Application_Model_Oportunidade');

        $server->handle();

    }

    public function indexAction(){

    }



}

