<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{

    protected function _initAutoloader() {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNameSpace("Shanty");

        return $autoloader;
    }	

} 
