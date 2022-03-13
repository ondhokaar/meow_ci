<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layouts/basic'); ?>

<?= $this->section("content"); ?>
<style>
    h6 {
        font-style: italic;
    }
    
</style>
<section class="body" style="font-size: 13px; ">
        <div class="card-group">
            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-info" alt="...">
                <div class="card-body">
                    <h6 class="card-title">Foreigner cat</h6>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>

            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-dark" alt="...">
                <div class="card-body">
                    <h6 class="card-title">Foreigner cat</h6>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>

            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-danger" alt="...">
                <div class="card-body">
                    <h6 class="card-title">Foreigner cat</h6>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-dark" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>

            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-danger" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
                        <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-dark" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>


        </div>


        <div class="card-group">


            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-danger" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-dark" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>

            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-danger" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-info" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>

            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-warning" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>

            <div class="card" style="width: 10rem;">
                <img src="<?= base_url() ?>/public/assets/img/happy.svg" class="card-img-top bg-primary" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Foreigner cat</h5>
                    <p class="card-text">father from america, mother from bangladesh, born in Sweden</p>
                    <div  >
                        <a href="#" class="btn btn-primary">Details</a>
                        <small class="text-muted" style="padding-left: 50%">Dhaka</small>
                    </div>
                    
                </div>
            </div>
        </div>


    </section>
<?= $this->endSection(); ?>