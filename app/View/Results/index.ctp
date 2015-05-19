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
        <th>Statystyki bieżącego sezonu znajdują się na oficjalnej stronie Ligi FLS. Zespół BKS obecnie występuje w <a href="http://liga-fls.pl/home/index.php?option=com_joomleague&view=resultsranking&p=87&division=&r=&Itemid=567" target="_blank">lidze D1</a>
        </th>
    </tr>
      <tr>
        <th><?php echo $this->Html->link('Dodaj Wynik', array('action' => 'add')); ?></th>
    </tr>
</table>

<table class="content">
    <tr>
		<th>Akcje</th>
		<th>Miejce</th>
        <th>Zespół</th>
		<th>Sezon</th>
		<th>Bramki zdobyte</th>
        <th>Bramki stracone</th>
		<th>Bilans bramkowy</th>
		<th>Wygrane</th>
		<th>Remisy</th>
		<th>Porażki</th>
		<th>Punkty</th>
		
    </tr>

    <?php foreach ($results as $result): ?>

    <tr>
		 <td>
            <?php
                echo $this->Form->postLink
				(
                    'Usuń',
                    array('action' => 'delete', $result['result']['id']),
                    array('confirm' => 'Na pewno usunąć?')
                );
            ?>
        </td>
        <td><?php echo $result['result']['place']; ?></td>
        <td><?php echo $result['result']['team']; ?></td>
		<td><?php echo $result['result']['season']; ?></td>
		
		<td><?php echo $result['result']['goalsfor']; ?></td>
		<td><?php echo $result['result']['goalsagainst']; ?></td>
		<td><?php echo $sum =$result['result']['goalsfor'] - $result['result']['goalsagainst']; ?></td>
		<td><?php echo $result['result']['won']; ?></td>
		<td><?php echo $result['result']['draw']; ?></td>
		<td><?php echo $result['result']['lost']; ?></td>
		<td><?php echo $result['result']['points']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

</body>