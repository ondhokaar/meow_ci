<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>

<?= $this->section('content'); ?>
<?php $i = 0; ?>
<style>
    .col-md-2 {
        padding: 1px;
    }
</style>
<div class="container-fluid d-flex" style="display:flex;">
    <div class="row">
        <?php foreach ($temps as $t): ?>    

        <?php $i++;?>
        <div class="card col-md-2" style="">
            <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-info" alt="...">
            <div class="card-body">
                <h6 class="card-title">Foreigner cat</h6>
                <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                <a href="#" class="btn btn-primary" style="width: 100%;">Details</a>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>