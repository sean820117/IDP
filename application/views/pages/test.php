<?php foreach ($infos as $infos_item): ?>

    <h2><?php echo $infos_item['title'] ?></h2>
    <div id="main">
        <?php echo $infos_item['content'] ?>
    </div>

<?php endforeach ?>