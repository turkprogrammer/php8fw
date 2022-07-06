<?php
use php8fw\View;

/** @var $this View */
?>
<?= $this->getPart('parts/header') ?>
<div class="content-wrapper">
    <div class="container clearfix">
        <main class="content">
            <!-- for-example -->
            <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;"><?= $this->content ?></p>
        </main>
    </div>
</div>
<?= $this->getPart('parts/footer') ?>

