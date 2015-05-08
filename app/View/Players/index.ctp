<body>
  <div id="content">

<table class="menu">
    <tr>
        <th><a href="posts">Informacje</a></th>
        <th><a href="players">Zawodnicy</a></th>
        <th><a href="results">Wyniki</a></th>
		<th><a href="contact">Kontakt</a></th>
    </tr>
</table>

<table class="content1">
    <tr>
        <th><?php echo $this->Html->link('Dodaj Zawodnika', array('action' => 'add')); ?></th>
    </tr>
</table>


<table class="content">
    <tr>
		<th>Akcje</th>
        <th>Imię</th>
		<th>Nazwisko</th>
		<th>Wiek</th>
        <th>Sezon</th>
		<th>Mecze</th>
		<th>Gole</th>
		<th>Asysty</th>
		<th>Zawodnik Meczu</th>
		<th>Żółte kartki</th>
		<th>Czerwone kartki</th>
		
    </tr>

    <!-- Here is where we loop through our $players array, printing out post info -->

    <?php foreach ($players as $player): ?>
    <tr>
		 <td>
            <?php
                echo $this->Form->postLink
				(
                    'Usuń',
                    array('action' => 'delete', $player['Player']['id']),
                    array('confirm' => 'Na pewno usunąć?')
                );
            ?>

        </td>
        <td><?php echo $player['Player']['name']; ?></td>
        <td>
		
		 <?php echo $this->Html->link($player['Player']['surname'],array('action' => 'edit', $player['Player']['id']));?>
		
		</td>
		<td><?php echo date_diff(date_create($player['Player']['dob']), date_create('today'))->y; ?></td>
		<td><?php echo $player['Player']['season']; ?></td>
		<td><?php echo $player['Player']['games']; ?></td>
		<td><?php echo $player['Player']['goals']; ?></td>
		<td><?php echo $player['Player']['assists']; ?></td>
		<td><?php echo $player['Player']['manofmatch']; ?></td>
		<td><?php echo $player['Player']['yellowcards']; ?></td>
		<td><?php echo $player['Player']['redcards']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

</body>