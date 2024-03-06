<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h3><?= esc($guest_item['name']) ?></h3>

        <div class="main">
            <?= esc($guest_item['comment']) ?>
        </div>
        <p><a href="/guests/<?= esc($guest_item['name'], 'url') ?>">View Guest Comment</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>