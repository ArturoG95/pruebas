<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

  public function beforeFilter(){
    $this->Auth->allow('login','register','do_register','do_login');
    $this->layout = 'login';
  }

  public function login(){
      $title = 'Login';
      $this->set(compact('title'));
  }

  public function logout()
  {
      $this->Auth->logout();
      return $this->redirect($this->Auth->redirectUrl(array(
          'controller' => 'users',
          'action' => 'login'
      )));
  }
  public function do_login(){
    $this->viewClass = "json";
    if($this->request->is('ajax') && $this->request->is('post') && !empty($this->request->data)){
      $client_data = $this->User->find('first',array(
        'conditions'=>array(
            'register_email'=>$this->request->data['email'],
            'register_password'=> md5($this->request->data['password'])
        )
      ));
    }
    if (is_array($client_data)) {
                $this->Auth->login($client_data);
                $this->set(array(
                    'result' => 'ok',
                    'data' => $client_data,
                    '_serialize' => array(
                        'result',
                        'data'
                    )
                ));
            } else {
                $this->set(array(
                    'result' => 'failed',
                    'data' => __('Contraseña o usuario incorrecto'),
                    '_serialize' => array(
                        'result',
                        'data'
                    )
                ));
            }
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
