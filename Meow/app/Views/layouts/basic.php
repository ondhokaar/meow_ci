<?php $session = \Config\Services::session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body class="bg-info" style="min-height: 100%; ">

    <section class="navigation sticky-top rounded">

        <nav class="navbar navbar-expand-md rounded bg-dark us-hover navbar-dark py-2">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown" style="margin-right: 10px;">
                        <a class="nav-link dropdown-toggle" href="#" class="" id="kittens" role="button" data-bs-toggle="dropdown">Kittens</a>
                        <ul class="dropdown-menu bg-secondary navbar-dark" aria-labelledby="kittens">
                            <a href="<?= base_url() ?>/dashboard/buykittens"><li class="dropdown-item">Buy</li></a>
                            <a href="<?= base_url() ?>/profile/#uploadKitten"><li class="dropdown-item">Sell</li></a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: 10px;">
                        <a class="nav-link dropdown-toggle" href="#" id="accessories" role="button" data-bs-toggle="dropdown" aria-expanded="false">Accessories</a>
                        <ul class="dropdown-menu bg-secondary navbar-dark" aria-labelledby="accessories">
                            <a href="<?= base_url() ?>/dashboard/buyAccessories/food"><li class="dropdown-item">Food</li>
                            <a href="<?= base_url() ?>/dashboard/buyAccessories/toys"><li class="dropdown-item">Toys</li>
                            <a href="<?= base_url() ?>/dashboard/buyAccessories/meds"><li class="dropdown-item">Vet Medicine</li>
                        </ul>
                    </li>
                    <li class="nav-item" style="margin-right: 10px;"><a class="nav-link" href="<?= base_url() ?>/fosterhome" id="">Foster Home</a></li>
                    <li class="nav-item" style="margin-right: 10px;"><a class="nav-link" href="<?= base_url() ?>/health" id="">Health</a></li>

                </ul>
                <a href="<?= base_url() ?>" class="m-auto">
                    <img  src="<?= base_url() ?>/public/assets/img/happy.svg" alt="" width="50" height="50"  class="d-inline-block align-text-top">
                </a>
                <ul class="nav navbar-nav" style="margin-left: auto;">

                        
                    <?php if($session->get('loggedInUser')): ?>
                        <li class="nav-item"><a href="<?= base_url() ?>/profile" class="nav-link">Profile</a></li>                    
                        <li class="nav-item"><a href="<?= base_url() ?>/dashboard/logout" class="nav-link">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a href="<?= base_url() ?>/login" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="<?= base_url() ?>/signup" class="nav-link">Sign Up</a></li>
                    <?php endif; ?>                        
                        <li class="nav-item"><a href="" class="nav-link">Feedback</a></li>
                </ul>

                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_5dbf6say.json" background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
            </div>
        </nav>


    </section>

   
    <?= $this -> renderSection("content"); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>