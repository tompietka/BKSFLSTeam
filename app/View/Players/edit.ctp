<!-- File: /app/View/Players/edit.ctp -->

<h1>Edytuj zawodnika</h1>
<?php
echo $this->Form->create('Player');
	echo $this->Form->input('name', array('label' => 'Imie'));
	echo $this->Form->input('surname', array('label' => 'Nazwisko'));
	echo $this->Form->input('dob', array('label' => 'Data urodzenia'));
	echo $this->Form->input('picture', array('label' => 'Zdjecie'));
	echo $this->Form->input('season', array('label' => 'Sezon'));
	echo $this->Form->input('games', array('label' => 'Mecze'));
	echo $this->Form->input('goals', array('label' => 'Bramki'));
	echo $this->Form->input('assists', array('label' => 'Asysty'));
	echo $this->Form->input('manofmatch', array('label' => 'Zawodnik Meczu'));
	echo $this->Form->input('yellowcards', array('label' => 'Zólte kartki'));
	echo $this->Form->input('redcards', array('label' => 'Czerwone kartki'));
	
echo $this->Form->end('Zapisz zawodnika');
?>