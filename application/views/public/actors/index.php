<table cellpadding="5" cellspacing="0" border="1">
    <tr>
	<td>id</td>
	<td>Имя</td>
	<td>Фамилия</td>
	<td>Подробности</td>
    </tr>

    <?php foreach ($data as $actor) : ?>
        <tr>
	    <td><?= $actor['id'] ?></td>
	    <td><?= $actor['name'] ?></td>
	    <td><?= $actor['lastname'] ?></td>
	    <td>
		<a href="/actors/<?= $actor['id'] ?>">more</a>
	    </td>
        </tr>
    <?php endforeach; ?>
</table>