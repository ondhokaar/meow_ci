<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>

<?= $this->section("content"); ?>

    <div class="container-fluid" style="width: 40%;">
        <h1 class="text-center my-3">sign up</h1>
        <?php if($session->getTempdata('error')): ?>
            <div class="alert alert-danger" role="alert">
                <?= $session->getTempdata('error'); ?>
            </div>
        <?php endif;?>

        <?= form_open(); ?>
        <div class="form-floating mb-1" style="margin-top: 10%;">
            <input type="text" name="name" id="name" value='<?= set_value('name'); ?>' class="form-control">
            <label for="name">your name</label>
            <?php if(isset($validation) and $validation -> hasError('name')): ?>
                <div class="text-danger">
                    <?= $validation->getError('name'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-floating my-1">
            <input type="email" name="email" value='<?= set_value('email'); ?>' class="form-control" id="email">
            <label for="email">Email</label>
            <?php if(isset($validation) and $validation -> hasError('email')): ?>
                <div class="text-danger">
                    <?= $validation->getError('email'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-floating my-1">
            <input type="password" name="password" class="form-control" id="password">
            <label for="password">Password</label>
            <?php if(isset($validation) and $validation -> hasError('password')): ?>
                <div class="text-danger">
                    <?= $validation->getError('password'); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="form-floating my-1">
            <input type="password" name="confirm-password" class="form-control" id="confirm-password">
            <label for="confirm-password">confirm Password</label>
            <?php if(isset($validation) and $validation -> hasError('confirm-password')): ?>
                <div class="text-danger">
                    <?= $validation->getError('confirm-password'); ?>
                </div>
            <?php endif; ?>
        </div>

        <button class="btn btn-lg btn-primary mt-5" style="width: 100%;" name="signup" type="submit">
            Sign Up
        </button>
        <?= form_close(); ?>
    </div>
<?= $this->endSection(); ?>