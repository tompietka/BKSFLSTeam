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
        <th><?php echo $this->Html->link('Dodaj Wpis', array('action' => 'add')); ?></th>
    </tr>
</table>

<table class="content">
    <tr>
        <th>Tytuł</th>
        <th>Akcje</th>
        <th>Data dodania</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],array('action' => 'view', $post['Post']['id']));?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink
				(
                    'Usuń',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Na pewno usunąć?')
                );
            ?>
            <?php
                echo $this->Html->link
				(
                    'Edytuj', array('action' => 'edit', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>