<?php
/**
 *  @var $data - масив данных
 */
?>

<!-- Вывод сообщения о ошибке -->
<?php if (count($data['message']) > 0) : ?>
    <?php foreach ($data['message'] as $msg) : ?>
        <p><?= $msg ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form name="forma" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <label> Name:
        <input type="text" value="<?= $data['model']['name'] ?>" name="name">
    </label>
    <label> Last Name:
        <input type="text" value="<?= $data['model']['lastname'] ?>" name="lastname">
    </label>
    <label> Birthdate:
        <input type="date" value="<?= $data['model']['birthdate'] ?>" name="birthdate">
    </label>
    <label> biography:
       <textarea name="biography"><?= $data['model']['biography'] ?></textarea>
    </label>
    <label>Photo:
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