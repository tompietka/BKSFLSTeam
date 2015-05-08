<!-- File: /app/View/Posts/add.ctp -->

<h1>Dodaj Wpis</h1>
<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title', array('label' => 'Tytuł'));
	echo $this->Form->input('body', array('rows' => '3', 'label' =>'Tekst'));
	echo $this->Form->end('Zapisz');

?>