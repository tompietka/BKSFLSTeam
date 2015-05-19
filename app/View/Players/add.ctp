<!-- File: /app/View/Players/add.ctp -->

<h1>Nowy Zawodnik</h1>

<?php
	echo $this->Form->create('Player');
	echo $this->Form->input('name', array('label' => 'Imię'));
	echo $this->Form->input('surname', array('label' => 'Nazwisko'));
	echo $this->Form->input('dob', array('label' => 'Data urodzenia', 'minYear' =>date('Y') - 40, 'maxYear' =>date('Y') - 10));
	echo $this->Form->input('season', array('label' => 'Sezon'));
	echo $this->Form->input('games', array('label' => 'Mecze'));
	echo $this->Form->input('goals', array('label' => 'Bramki'));
	echo $this->Form->input('assists', array('label' => 'Asysty'));
	echo $this->Form->input('manofmatch', array('label' => 'Zawodnik Meczu'));
	echo $this->Form->input('yellowcards', array('label' => 'Żółte kartki'));
	echo $this->Form->input('redcards', array('label' => 'Czerwone kartki'));
	echo $this->Form->input('picture', array('label' => 'Zdjęcie'));

	
	echo $this->Form->end('Zapisz Zawodnika');
?>

