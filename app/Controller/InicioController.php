<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InicioController
 *
 * @author ELKIN
 */
class InicioController extends AppController{
    //put your code here
    
    public function index(){
        
        $this->set('title_for_layout', 'Pagina Principal');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
    }
}

?>
