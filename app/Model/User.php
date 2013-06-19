<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ELKIN
 */
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel{
    //put your code here
    
    public $name = 'User';
    public $hasMany = array(
        'Product' => array(
            'className'     => 'Product',
            'foreignKey'    => 'user_id',
            'dependent'     => true
        )
    );
    
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
    
    var $validate = array(
        'username' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Sólo letras y números'),
            'between' => array(
                'rule' => array('between', 3, 15),
                'message' => 'Entre 5 y 15 caracteres')),
        'password' => array('rule' => array('minLength', '6'),
            'message' => 'Debe contener minimo 6 caracteres'),
        'email' => 'email');

}

?>
