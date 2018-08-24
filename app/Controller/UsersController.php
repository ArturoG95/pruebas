<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

  public function beforeFilter(){
    $this->layout = 'login';
  }

  public function login(){
      $title = 'Login';
      $this->set(compact('title'));
  }

  public function register(){
      $title = 'Registro';
      $this->set(compact('title'));
  }
}
