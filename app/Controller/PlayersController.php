<?php

class PlayersController extends AppController 
{
    public $helpers = array('Html', 'Form');

    public function index() 
	{
        $this->set('players', $this->Player->find('all'));
    }
	
  
	public function add() 
	{
        if ($this->request->is('post')) 
		{
            $this->Player->create();
            if ($this->Player->save($this->request->data)) 
			{
                $this->Session->setFlash(__('Your Player has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your Player.'));
        }
    }

	
	
	public function edit($id = null) 
	{
    if (!$id) 
		{
			throw new NotFoundException(__('Invalid Player'));
		}

    $player = $this->Player->findById($id);
    if (!$player) 
		{
			throw new NotFoundException(__('Invalid Player'));
		}

    if ($this->request->is(array('Player', 'put'))) 
		{
			$this->Player->id = $id;
			if ($this->Player->save($this->request->data)) 
			{
				$this->Session->setFlash(__('Your Player has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
        $this->Session->setFlash(__('Unable to update your Player.'));
		}

    if (!$this->request->data) 
		{
			$this->request->data = $player;
		}
	}
	
	public function delete($id) {
    if ($this->request->is('get')) 
	{
        throw new MethodNotAllowedException();
    }
    if ($this->Player->delete($id)) 
	{
        $this->Session->setFlash(
            __('The Player with id: %s has been deleted.', h($id))
        );
    } else 
	{
        $this->Session->setFlash(
            __('The Player with id: %s could not be deleted.', h($id))
        );
    }
    return $this->redirect(array('action' => 'index'));
	}
}

?>