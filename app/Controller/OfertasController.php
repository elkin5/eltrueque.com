<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OfertasController
 *
 * @author ELKIN
 */
class OfertasController extends AppController{
    //put your code here
    
    public function index() {
        $this->set('title_for_layout', 'index');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        $this->set('ofertas', $this->Oferta->find('all'));
    } 
    
    public function add($id = null) {
        $this->set('title_for_layout', 'agregar producto');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        
        if ($this->request->is("post")) {
            $this->request->data['Product']['user_id'] = $this->Auth->user('id');
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash("El producto a sido guardado.");
                $this->redirect(array("action" => "index"));
            }
        }
    }
        
}

?>
