<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel
{
  public $name = 'User'; //nombre del modelo
  public $useTable = 'users'; //tabla que se esta usando para guardar los datos.

  public $actsAs = array(//relaciona los modelos ayudando al rendimiento.
    'Containable'
  );

  public function beforeSave($options = array()){ //beforeSave: se ejecuta antes de guardar la informacion.
    if (isset($this->data[$this->alias]['register_password'])) { //[$this->alias] modelo en el que estas. isset solo es para saber si la variable esta establecida.
      $this->data[$this->alias]['register_password'] = md5($this->data[$this->alias]['register_password']);
    }
    return true;
  }
}
?>
