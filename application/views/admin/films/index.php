<div>
    <a href="/admin/addfilm/">Add Films</a> | <a href="/admin/loadimage/">Load Image</a>
</div>
<table cellpadding="5" cellspacing="0" border="1">
    <caption>Фильмография</caption>
    <tr>
        <th>№</th>
        <th>Название фильма</th>
        <th>Год выпуска</th>
        <th>Описание</th>
        <th>Ссылка</th>
    </tr>
    <?php foreach ($data as $film) : ?>
        <tr>
            <td><?= $film['id'] ?></td>
            <td><?= $film['title'] ?>
            </td>
            <td><?= $film['year'] ?></td>
            <td><?= $film['description'] ?></td>
            <td>
                <a href="<?= '/admin/editfilms?id=' . $film['id'] ?>">Edit</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>