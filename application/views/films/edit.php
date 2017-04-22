<?php
/**
 *  @var $data - масив данных
 */
?>

<!-- Вывод сообщения о ошибке -->
<?php if (count($data['message']) > 0) : ?>
    <?php foreach ($data['message'] as $msg) : ?>
        <p class="<?= $msg['type'] ?>"><?= $msg['text'] ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form name="forma" method="post" enctype="multipart/form-data">
    <label> Название фильма:
        <input type="text" value="<?= $data['title'] ?>" name="title">
    </label>
    <label> Год выпуска:
        <input type="text" value="<?= $data['year'] ?>" name="year">
    </label>
    <label> Описание:
        <input type="text" value="<?= $data['description'] ?>" name="description">
    </label>
    <label>Картинка:
        <input type="file" name="photo">
    </label>
    <label>
        <input type="submit" value="Отправить">
    </label>
</form>