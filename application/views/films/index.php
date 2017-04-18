<h1>Фильмография</h1>
<table>
    <caption>Работы</caption>
    <tr>
	<th>№</th>
	<th>Название фильма</th>
	<th>Год выпуска</th>
	<th>Ссылка</th>
    </tr>
    <?php foreach ($data as $val) :?>
    <tr>
	<td><?=  $val['id']?></td>
	<td><?=  $val['name']?>
	</td>
	<td><?=  $val['year']?></td>
	<td><a href="<?=  'films/'.$val['id']?>"><?=  'films/'.$val['id']?></a>
	</td>
    </tr>
    <?php endforeach; ?>
</table>