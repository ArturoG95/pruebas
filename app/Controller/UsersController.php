<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

  public function beforeFilter(){
    $this->Auth->allow('login','register','do_register');
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

  public function do_register(){
        $this->viewClass = 'json';
        if ($this->request->is('ajax') && $this->request->is('post') && !empty($this->request->data)) {
            $this->User->create();
            $this->request->data['register_birthday'] = date('Y-m-d', strtotime($this->request->data['register_birthday']));
            $register = $this->User->save($this->request->data);
            }
            $this->set(array(
                'result' => ($register) ? "ok" : "error",
                'data' => $this->request->data,
                '_serialize' => array(
                    'result',
                    'data',
                )
            ));

    }

}
