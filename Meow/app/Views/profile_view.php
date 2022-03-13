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
<section class="d-flex">
    <div class="container-fluid" id="uploadKitten" style="width: 40%">
        <h2 class="text-center">Upload For Sell</h2>
        <?php if ($session->has('wfailed')): ?>
            <div class="alert alert-danger" role="alert">
                <?= $session->get('wfailed'); ?>
            </div>
        <?php endif; ?>
        <?php if ($session->has('wsuccess')): ?>
            <div class="alert alert-success" role="alert">
                <?= $session->get('wsuccess'); ?>
            </div>
        <?php endif; ?>

        <?= form_open_multipart(); ?>

        <div class="form-floating mb-1" >
            <input type="text" name="kname" id="kname" value='<?= set_value('kname'); ?>' class="form-control" required>
            <label for="kname">Kitten Name</label>


        </div>
        <div class="form-floating mb-1">
            <input type="text" class="form-control" value='<?= set_value('kdetails'); ?>' id="kdetails" style="height: 100px" required"></input>
            <label for="kdetails">Details (Age/Gender/food/vaccination/weight/address</label>
        </div>


        <div class="mb-1">
            <h6>Upload an image </h6> <input type="file" name="kitten-img" id="kitten-img" class="form-control" required>



        </div>

        <input class="mt-3" type="submit" value="Upload"> 

        <?= form_close(); ?>
    </div>
</section>
<?= $this->endSection(); ?>