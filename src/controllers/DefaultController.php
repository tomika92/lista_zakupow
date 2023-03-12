<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function login()
    {
        $this->render('login');
    }

    public function my_list()
    {
        $this->render('my_list');
    }

    public function register()
    {
        $this->render('register');
    }

    public function details()
    {
        $this->render('details');
    }

    public function search()
    {
        $this->render('search');
    }
}