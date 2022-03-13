<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>

<?= $this->section('content'); ?>
<div class="" style="min-height: 100%;">
    <h1 class="text-black-50">foster home</h1>
    <section class="">
        <div class="container-fluid" id="uploadKitten" style="width: 40%;">
            <h1 class="text-center mb-5">Book Foster Home</h1>
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

            <?= form_open(); ?>
       
            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="checkIn">
                <label for="checkIn">Check in</label>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control " name="chekcOut">
                <label for="checkOut">Check out</label>
            </div>


            <input type="submit" value="Book now"> 

            <?= form_close(); ?>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>