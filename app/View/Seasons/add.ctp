<!-- File: /app/View/seasons/add.ctp -->

<h1>Dodaj Sezon</h1>
<?php
	echo $this->Form->create('season');
	echo $this->Form->input('year', array('label' => 'Rok'));
	echo $this->Form->input('season', array('label' => 'Sezon'));
	echo $this->Form->end('Zapisz Sezon');
?>