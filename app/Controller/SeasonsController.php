<?php

class seasonsController extends AppController 
{
    public $helpers = array('Html', 'Form');

    public function index() 
	{
        $this->set('seasons', $this->season->find('all'));
    }
	
  
	public function add() 
	{
        if ($this->request->is('post')) 
		{
            $this->season->create();
            if ($this->season->save($this->request->data)) 
			{
                $this->Session->setFlash(__('Your season has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your season.'));
        }
    }

	
	
	public function edit($id = null) 
	{
    if (!$id) 
		{
			throw new NotFoundException(__('Invalid season'));
		}

    $season = $this->season->findById($id);
    if (!$season) 
		{
			throw new NotFoundException(__('Invalid season'));
		}

    if ($this->request->is(array('season', 'put'))) 
		{
			$this->season->id = $id;
			if ($this->season->save($this->request->data)) 
			{
				$this->Session->setFlash(__('Your season has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
        $this->Session->setFlash(__('Unable to update your season.'));
		}

    if (!$this->request->data) 
		{
			$this->request->data = $season;
		}
	}
	
	public function delete($id) {
    if ($this->request->is('get')) 
	{
        throw new MethodNotAllowedException();
    }
    if ($this->season->delete($id)) 
	{
        $this->Session->setFlash(
            __('The season with id: %s has been deleted.', h($id))
        );
    } else 
	{
        $this->Session->setFlash(
            __('The season with id: %s could not be deleted.', h($id))
        );
    }
    return $this->redirect(array('action' => 'index'));
	}
}

?>