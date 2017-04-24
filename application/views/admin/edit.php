<?php
/**
 * @var $data;
 */
?>
<p><?= $data['msg'] ?></p>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['data']['id'] ?>">
    <label>Title:
        <input name="title" type="text" value="<?= $data['data']['title'] ?>" />
    </label>
    <label>Html:
        <textarea name="html"><?php echo trim($data['data']['html']) ?></textarea>
    </label>
    <label>
        <input type="submit" name="save">
    </label>
</form>
