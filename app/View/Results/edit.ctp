<!-- File: /app/View/results/edit.ctp -->

<h1>Edytuj wynik</h1>
<?php
echo $this->Form->create('result');
	echo $this->Form->input('place', array('label' => 'Miejsce'));
	echo $this->Form->input('team', array('label' => 'Zespól'));
	echo $this->Form->input('season', array('label' => 'Sezon'));
	echo $this->Form->input('goalsfor', array('label' => 'Bramki zdobyte'));
	echo $this->Form->input('goalsagainst', array('label' => 'Bramki stracone'));
	echo $this->Form->input('won', array('label' => 'Wygrane'));
	echo $this->Form->input('draw', array('label' => 'Remisy'));
	echo $this->Form->input('lost', array('label' => 'Porazki'));
	echo $this->Form->input('points', array('label' => 'Punkty'));


	
	echo $this->Form->end('Zapisz Wynik');
?>