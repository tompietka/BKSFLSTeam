<?php

class resultsController extends AppController 

{
    public $helpers = array('Html', 'Form');

    public function index() 
	{

        $this->set('results', $this->result->find('all'));

    }

  
	public function add() 
	{
        if ($this->request->is('post')) 
		{
            $this->result->create();
            if ($this->result->save($this->request->data)) 
			{
                $this->Session->setFlash(__('Your result has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your result.'));
        }
    }
	public function edit($id = null) 
	{
    if (!$id) 
		{
			throw new NotFoundException(__('Invalid result'));
		}

    $result = $this->result->findById($id);
    if (!$result) 
		{
			throw new NotFoundException(__('Invalid result'));
		}

    if ($this->request->is(array('result', 'put'))) 
		{
			$this->result->id = $id;
			if ($this->result->save($this->request->data)) 
			{
				$this->Session->setFlash(__('Your result has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
        $this->Session->setFlash(__('Unable to update your result.'));
		}

    if (!$this->request->data) 
		{
			$this->request->data = $result;
		}
	}
	
	public function delete($id) {
    if ($this->request->is('get')) 
	{
        throw new MethodNotAllowedException();
    }
    if ($this->result->delete($id)) 
	{
        $this->Session->setFlash(
            __('The result with id: %s has been deleted.', h($id))
        );
    } else 
	{
        $this->Session->setFlash(
            __('The result with id: %s could not be deleted.', h($id))
        );
    }
    return $this->redirect(array('action' => 'index'));
	}
}

?>