<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersController
 *
 * @author ELKIN
 */
class UsersController extends AppController{

    public function beforeFilter() {
        parent::beforeFilter();
        
        $this->Auth->allow('add');
        $this->Auth->allow('login');
        //// libre para que cualquiera pueda agregar un usuario
        //todos los datos de sesion de un usuario
        //$data['User'] = $this->Auth->user();
        /*en la vista: $session->read(Auth.User'); // devuelve el registro completo del usuario*/
    }

    public function login() {
        $this->set('title_for_layout', 'Iniciar Sesion');
        $this->layout = 'unregistred';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect(array('controller' => 'inicio', 'action' => 'index'));
                 $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('usuario o contraseña incorrecta, intentelo de nuevo'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    function index() {
        $this->set('title_for_layout', 'Gestion de usuarios');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        $usuario = $this->Auth->user('role');
        echo 'usuario logueado como ' . $usuario;
        $this->set('users', $this->User->find('all'));
    }
    
    public function view($id = null) {
        $this->set('title_for_layout', 'Usuario');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        $this->User->id = $id;
        $this->set('user', $this->User->read());
    }
      
    public function add() {
        $this->set('title_for_layout', 'Registro Usuario');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Usuario registrado correctamente'));
                $this->redirect(array('controller' => 'inicio', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('A ocurrido un error al al registrarse, por favor intentelo de nuevo'));
            }
        }
    }

    function edit($id = null) {
        $this->set('title_for_layout', 'Editar Perfil');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        $this->User->id = $id;
        if ($this->request->is("get")) {
            $this->request->data = $this->User->read();
        } else {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash("Usuario actualizado correctamente");
                $this->redirect(array("action" => "index"));
            }
        }
    }
    
    public function delete($id = null) {
        $this->set('title_for_layout', 'Eliminar Usuario');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuario invalido'));
        }
        
        if ($this->User->delete()) {
            $this->Session->setFlash(__('Usuario eliminado'));
            $this->redirect(array('action' => 'index'));
        }
        
        $this->Session->setFlash(__('Usuario no puede ser eliminado'));
        $this->redirect(array('action' => 'index'));
    }
    function correo() {
        $this->set('title_for_layout', 'Recuperacion de contraseña');
        $this->layout = 'unregistred';
        $this->set('users', $this->User->find('all'));
    }
    public function isAuthorized($user) {
        // Todos los usuarios registrados pueden agregar productos
        if ($this->action === 'logout') {
            return true;
        }
        
        return parent::isAuthorized($user);
    }
}

?>
