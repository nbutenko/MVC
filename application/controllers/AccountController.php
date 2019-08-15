<?php
namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {
    public function __construct($route)
    {
        parent::__construct($route);
        $this->before();
    }

    public function before() {
        $this->view->layout = 'custom';
    }

    public function loginAction() {
//        $this->view->redirect('/');
        if(!empty($_POST)){
//            $this->view->message('success', 'Error message');
//            $this->view->location('/');
        }
        $this->view->render('Login page');
    }

    public function registerAction() {
        $this->view->render('Registration page');
    }

}