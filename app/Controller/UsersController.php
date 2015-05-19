<?php

class UsersController extends AppController 
{
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }


    public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Session->setFlash(__('Nieprawidłowy login lub hasło. Spróbuj ponownie.'));
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Użytkownik zapisany'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Użytkownik nie został zapisany. Spróbuj ponownie.')
            );
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Użytkownik zapisany'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Użytkownik nie został zapisany. Spróbuj ponownie.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('Użytkownik usunięty'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Użytkownik nie został usunięty'));
        return $this->redirect(array('action' => 'index'));
    }


  
}

?>