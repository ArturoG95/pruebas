<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

  public function beforeFilter(){
    $this->layout = 'login';
  }
  public function login(){

  }

}
