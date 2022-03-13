<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>

<?= $this->section('content'); ?>
<div class="bg-warning" style="height: 100%">
    <h1 class="text-black-50 text-center">kitten</h1>
</div>
<?= $this->endSection(); ?>