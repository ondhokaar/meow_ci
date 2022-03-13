<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>
<?php
    $userdata = [
        'name' => 'shabbir',
        'email' => 'aa@bb.cc'
    ];
?>
<?= $this->section('content'); ?>
    <div class="container-fluid bg-danger" style="border: 3px solid green; height:100%;">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="rounded-circle" height="50" border="3">
                    <h3>user: <?= $userdata['name'] ?></h3>
                    <h4 class="text-warning">email: <?= $userdata['email'] ?></h4>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>