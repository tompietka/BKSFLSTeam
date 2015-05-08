<!-- File: /app/View/seasons/edit.ctp -->

<h1>Edytuj sezon</h1>
<?php
echo $this->Form->create('season');
	echo $this->Form->input('year', array('label' => 'Rok'));
	echo $this->Form->input('season', array('label' => 'Sezon'));


	
	echo $this->Form->end('Zapisz Sezon');
?>