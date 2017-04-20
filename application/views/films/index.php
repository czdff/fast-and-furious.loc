<table cellpadding="5" cellspacing="0" border="1">
    <caption>Фильмография</caption>
    <tr>
	<th>№</th>
	<th>Название фильма</th>
	<th>Год выпуска</th>
	<th>Описание</th>
	<th>Ссылка</th>
    </tr>
    <?php foreach ($data as $film) :?>
    <tr>
	<td><?=  $film['id']?></td>
	<td><?=  $film['title']?>
	</td>
	<td><?=  $film['year']?></td>
	<td><?=  $film['description']?></td>
	<td><a href="<?=  'films/'.$film['id']?>"><?=  'films/'.$film['id']?></a>
	</td>
    </tr>
    <?php endforeach; ?>
</table>