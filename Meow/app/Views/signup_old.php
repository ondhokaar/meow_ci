<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>signup</title>
    <link rel="shortcut icon" href="img/happy.svg" type="image/x-icon">
</head>

<body>
    <!-- good morning -->
    <section class="navigation sticky-top">
        <nav class="navbar navbar-expand-md navbar-dark us-hover bg-dark">
            <a href="index.php" class="nav-link">
                <img style="margin-left: 3px;" src="img/happy.svg" alt="" width="50" height="50">
            </a>
            <div class="container-fluid " style="flex-direction: row-reverse;">
                <ul class="nav navbar-nav">
                    <li class="nav-item bg-dark us-hover"><a href="login.php" class="nav-link mx-1">login</a></li>
                    <!-- <li class="nav-item bg-dark us-hover"><a href="registry.php" class="nav-link mx-1">signup</a></li> -->
                </ul>
            </div>

        </nav>
    </section>
    
    <section class="signupmain">
        <div class="container-fluid" style="width: 40%;">
            <h1 class="text-center my-3">Let's be friends!</h1>
            <form action="registry.php" method="post">
                <div class="form-floating mb-1" style="margin-top: 15%;">
                    <input type="text" name="name" id="name" class="form-control">
                    <label for="name">your name</label>
                </div>
                <div class="form-floating my-1">
                    <input type="email" name="email" class="form-control" id="email">
                    <label for="email">Email</label>
                </div>

                <div class="form-floating my-1">
                    <input type="password" name="password" class="form-control" id="password">
                    <label for="password">Password</label>
                </div>
                <?php $btnplaceholder="let's be friends!"; ?>
                <button class="btn btn-lg btn-primary mt-5" style="width: 100%;" name="signup" type="submit">
                Sign Up
                </button>
            </form>
        </div>
    </section>



    <?php

        
        if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $salt = "^@%13(*%~";
            $pass = $_POST['password'];
            $encrypted_pass = md5($pass.$salt);
    
        
           // $query = "insert into users values('1', '".$name."', '".$email."', '".$encrypted_pass."')";


            include_once('dbconnect.php');
            
            $query = "insert into users values('".$email."', '".$encrypted_pass."')";
            if(isset($_POST['signup'])) {
                try {
                    if ($conn->query($query) === TRUE) {
                        echo "success.. meow! :3";
                        $btnplaceholder = "sign up success.. meow! :3";
                        //now take to login page
                    } else {
                        echo "sth went wrong! :<";
                    }
                }
                catch(Exception $exUserexists){
                    echo "user already exists!";
                }
                
            }

        }
    ?>



    <!-- bye -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>