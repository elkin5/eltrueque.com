<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductsController
 *
 * @author ELKIN
 */
class ProductsController extends AppController{
    //put your code here
    
    public $helpers = array ("Html","Form");
    
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
        $this->set('products', $this->Product->find('all'));
    } 
    
    public function search() {
        
        $valor = $this->request->data('search');
        $valor = "'%".$valor."%'";
        $this->set('title_for_layout', 'search');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        //echo 'Modelo.columna = '.$valor;
        $this->set('products', $this->Product->find('all', array('conditions'=>"Product.nombre LIKE". $valor)));
    }

    public function view($id = null) {
        $this->set('title_for_layout', 'ver producto');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        $this->Product->id = $id;
        $this->set("product", $this->Product->read());
    }

    public function add() {
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
    
    function edit($id = null) {
        $this->set('title_for_layout', 'editar producto');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        $this->Product->id = $id;
        if ($this->request->is("get")) {
            $this->request->data = $this->Product->read();
        } else {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash("El producto ha sido actalizado.");
                $this->redirect(array("action" => "index"));
            }
          }
    }

    function delete($id) {
        $this->set('title_for_layout', 'eliminar producto');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        
        /*if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }*/
        
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Producto invalido'));
        }
        
        if ($this->Product->delete()) {
            $this->Session->setFlash(__('Producto eliminado'));
            $this->redirect(array('action' => 'index'));
        }
        
        $this->Session->setFlash(__('Producto no puede ser eliminado'));
        $this->redirect(array('action' => 'index'));
    }
    
    public function isAuthorized($user) {
        // Todos los usuarios registrados pueden agregar productos
        if ($this->action === 'add') {
            return true;
        }
        
        if ($this->action === 'searchview' ||$this->action === 'searchadvanced') {
            return true;
        }
        // si es el dueño del producto se permite editar o borrar
        if (in_array($this->action, array('edit', 'delete'))) {
            $productId = $this->request->params['pass'][0];
            if ($this->Product->isOwnedBy($productId, $user['id'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }
    
    public function searchini() {
        
        $valor = $_GET['search'];
        $valor = "'".$valor."'";
        $this->set('title_for_layout', 'search');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        
        $this->set('products', $this->Product->find('all', array('conditions'=>"Product.categoria =". $valor)));
    }
    
    public function searchadvanced() {
        
        $producto = $this->request->data['Products']['producto'];
        $categoria = $this->request->data['Products']['categoria'];
        $fechainicio = $this->request->data['Products']['fechainicio'];
        $fechafin = $this->request->data['Products']['fechafin'];
        //$ciudad = $this->request->data['Products']['ciudad'];
        echo $producto;
        echo ' ';
        echo $categoria;
        echo ' ';
        //echo $fechainicio;
        echo ' ';
        echo $fechainicio->format("d/m/Y");
        echo ' ';
        //echo $ciudad;
        //$producto = "'".$producto."'";
        $categoria = "'%".$categoria."%'";
        $this->set('title_for_layout', 'Busqueda Avanzada');
        if ($this->Auth->user('role') == NULL){
             $this->layout = 'unregistred';
        }
        
        elseif ($this->Auth->user('role') == 'admin') {
            $this->layout = 'admin';
        }
        
        elseif ($this->Auth->user('role') == 'user') {
            $this->layout = 'registred';
        }
        
        //$this->set('products', $this->Product->find('all', array('conditions'=>array('Product.categoria LIKE '.$categoria))));
        //$this->set('products', $this->Product->find('all', array('conditions'=>"Product.categoria =". $categoria)));
        $this->set('products', $this->Product->find('all',array('conditions'=>array('OR'=>array('Product.nombre' => $producto, 'Product.categoria LIKE '.$categoria)))));
    }
    
    public function searchview(){
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
