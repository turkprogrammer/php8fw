
<?php if (!empty($names)): ?>
    <?php foreach ($names as $name): ?>
        <?= $name->id ?> => <?= $name->first_name ?><br>
    <?php endforeach; ?>
<?php endif; ?>