<?php
/**
 * @var $data;
 */
?>
<p><?= $data['msg'] ?></p>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['data']['id'] ?>">
    <label>
        <input name="title" type="text" value="<?= $data['data']['title'] ?>" />
    </label>
    <label>
        <textarea name="html"><?php echo trim($data['data']['html']) ?></textarea>
    </label>
    <input type="submit" name="save">
</form>
