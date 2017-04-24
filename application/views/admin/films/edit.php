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
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <label> Название фильма:
        <input type="text" value="<?= $data['model']['title'] ?>" name="title">
    </label>
    <label> Год выпуска:
        <input type="text" value="<?= $data['model']['year'] ?>" name="year">
    </label>
    <label> Описание:
       <textarea name="description"><?= $data['model']['description'] ?></textarea>
    </label>
    <label>Картинка:
        <select name="photo">
            <option selected>Select Photo</option>
            <?php foreach ($data['select'] as $option) : ?>
                <option value="<?= $option ?>" <?php echo $option == $data['model']['photo'] ? 'selected' : ''?>>
                    <?= $option ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
    <label>
        <input type="submit" value="Сохранить">
    </label>
</form>