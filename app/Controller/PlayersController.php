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
                $this->Session->setFlash(__('Zawodnik został zapisany.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Nie można zapisać zawodnika.'));
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
				$this->Session->setFlash(__('Statystyki zawodnika zredagowane.'));
				return $this->redirect(array('action' => 'index'));
			}
        $this->Session->setFlash(__('Nie można zredagować statystyk zawodnika.'));
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
            __('Zawodnik usunięty.', h($id))
        );
    } else 
	{
        $this->Session->setFlash(
            __('Zawodnik nie może zostać usunięty.', h($id))
        );
    }
    return $this->redirect(array('action' => 'index'));
	}
}

?>