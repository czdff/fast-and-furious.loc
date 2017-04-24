<div class="item">
    <h2><?= $data['title'] . ' ' . $data['year'] ?></h2>
    <div class="img">
        <img src="<?= $data['photo'] ?>" alt="<?= $data['title'] ?>">
    </div>
    <div class="desc">
        <?= $data['description'] ?>
    </div>
</div>