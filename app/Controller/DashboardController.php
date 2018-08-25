<?php
App::uses('AppController', 'Controller');

class DashboardController extends AppController {

  public function beforeFilter(){
    $this->layout = 'admin';
  }

  public function index(){
      $title = 'Dashboard';
      $this->set(compact('title'));
  }

}
