<?php

namespace app\controllers;

class MainController
{
    public function indexAction()
    {
        echo "Привет, ";
        echo __METHOD__;
    }
}