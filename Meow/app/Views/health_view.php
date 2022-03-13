<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>

<?= $this->section('content'); ?>
<div class="bg-success" style="height: 100%">
    <h1 class="text-black-50">health page</h1>
    <?php if(isset($allvets)): ?>
    <?php $table = new \CodeIgniter\View\Table(); ?>
    <?= $table->generate($allvets); ?>
    <?php endif; ?>
</div>
<?= $this->endSection(); ?>