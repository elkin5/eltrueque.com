<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author ELKIN
 */
class Product extends AppModel{
    //put your code here
    
    public $name = "Product";
    
    public $belongsTo = array(
        'User' => array(
            'className'    => 'User',
            'foreignKey'   => 'user_id'
        )
    );
    
    var $actsAs = array(
        'MeioUpload' => array('filename')
    );
    
    public function isOwnedBy($product, $user){
        return $this->field('id', array('id' => $product, 'user_id' => $user)) === $product;
    }
}

?>
