<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Oferta
 *
 * @author ELKIN
 */
class Oferta extends AppModel{
    //put your code here
    
    public $name = "Oferta";
    
    public function isOwnedBy($oferta, $user){
        return $this->field('id', array('id' => $oferta, 'user_id' => $user)) === $oferta;
    }
}

?>
