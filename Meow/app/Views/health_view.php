<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" style="min-height: 100%;">
    <h1 class="text-black-50">Vet Contact Info</h1>
    <div class="d-flex justify-content-center" >
            <?php if(isset($allvets)): ?>
    <?php $table = new \CodeIgniter\View\Table(); ?>
    <?= $table->generate($allvets); ?>
    <?php endif; ?>
    </div>
    
</div>
<?= $this->endSection(); ?>