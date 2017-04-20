<h1>Актеры</h1>
<table>
    <caption>Актеры</caption>
    <tr>
	<th>№</th>
	<th>Имя</th>
	<th>Фамилия</th>
	<th>День Рождения</th>
	<th>Биография</th>
	<th>Фото</th>
    </tr>
    <?php foreach ($data as $val) :?>
    <tr>
	<td><?=  $val['id']?></td>
	<td><?=  $val['name']?></td>
	<td><?=  $val['lastname']?></td>
	<td><?=  $val['birthdate']?></td>
	<td><?=  $val['biography']?></td>
	<td><?=  $val['photo']?></td>
    </tr>
    <?php endforeach; ?>
</table>