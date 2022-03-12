<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>

<?= $this->section("content"); ?>

    <?php if ($session->getTempdata('success_signup')): ?>
        <div class="alert alert-success" role="alert">
            <?= $session->getTempdata('success_signup'); ?>
        </div>
    <?php endif; ?>
    <?php if ($session->getTempdata('error_login')): ?>
        <div class="alert alert-danger" role="alert">
            <?= $session->getTempdata('error_login'); ?>
        </div>
    <?php endif; ?>

    <div class="container-fluid" style="width: 30%;  margin-top: 5px;">
        <lottie-player src="https://assets10.lottiefiles.com/datafiles/fPoT7mQ92gI517D/data.json" background="transparent" speed="1" style="margin-inline: auto; width: 250px; height: 250px; margin-bottom: 20px;" loop autoplay></lottie-player>
            <?= form_open(); ?>
            <div class="form-floating">
                <input class="form-control" type="email" name="email" id="email" value='<?=set_value('email')?>'  required>
                <label for="email">
                    Email
                </label>
                <?php if(isset($validation) and $validation -> hasError('email')): ?>
                    <div class="text-danger">
                        <?= $validation->getError('email'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="my-2 form-floating">
                <input class="form-control" type="password" name="pass" id="pass" required>
                <label for="pass">
                    Password
                </label>
                <?php if(isset($validation) and $validation -> hasError('password')): ?>
                    <div class="text-danger">
                        <?= $validation->getError('password'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <button class="btn btn-lg btn-primary mt-5" style="width: 100%;" name="loginbtn" type="submit">
                Log In
            </button>
            <?= form_close(); ?>
    </div>


<?= $this->endSection(); ?>