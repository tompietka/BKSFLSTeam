<!-- File: /app/View/seasons/index.ctp -->

<table>
    <tr>
        <th><a href="posts">Informacje</a></th>
        <th><a href="players">Zawodnicy</a></th>
        <th><a href="seasons">Wyniki</a></th>
		<th><a href="contact">Kontakt</a></th>
    </tr>
</table>

<p><?php echo $this->Html->link('Dodaj Sezon', array('action' => 'add')); ?></p>
<table>
    <tr>
		<th>Akcje</th>
		<th>Id</th>
        <th>Rok</th>
		<th>Sezon</th>
    </tr>

    <!-- Here is where we loop through our $seasons array, printing out post info -->

    <?php foreach ($seasons as $season): ?>
    <tr>
		 <td>
            <?php
                echo $this->Form->postLink
				(
                    'Usuń',
                    array('action' => 'delete', $season['season']['id']),
                    array('confirm' => 'Na pewno usunąć?')
                );
            ?>
        </td>
		<td><?php echo $season['season']['id']; ?></td>
		<td><?php echo $season['season']['year']; ?></td>
		<td><?php echo $season['season']['season']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>