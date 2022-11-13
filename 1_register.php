
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body class="bg-black">
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                <a href="1_login.php"><button class=" btn bg-primary text-white btn-lg">Login</button></a>
                </div>
                <div class="mb-3">
                <a href="1_register.php"><button class="btn bg-success text-white">Register</button></a>
                </div>
                <div>
                <a href="1_logout.php"><button class="btn bg-danger text-white">Logout</button></a>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                    <form method="POST">
                        <h3>This is rergister form</h3>    
                        <div class="form-group">
                          <label for="exampleInputName">User name :</label>
                          <input type="text" class="form-control" id="exampleInputName"  placeholder="Enter username" name="uname" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email" required >
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputPassword2">Confirm password</label>
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm password" name="cpass" required>
                        </div>
                        <button type="submit" class="btn btn-dark text-white float-end" name="register"> Click me </button>
                    </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    session_start();
   if(isset($_POST["register"])){
    // echo "Hello";
    $name=$_POST["uname"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $conpass=$_POST["cpass"];
    function checkStrongPass($checkpass,$sname,$semail){
        $upperStatus= false;
        $lowerStatus= false;
        $numberStatus= false;
        $specialStatus= false;
        if(preg_match("/[A-Z]/",$checkpass)){
            $upperStatus=true;
        }
        if(preg_match("/[a-z]/",$checkpass)){
            $lowerStatus=true;
        }
        if(preg_match("/[0-9]/",$checkpass)){
            $numberStatus=true;
        }
        if(preg_match("/[!@#$%*&]/",$checkpass)){
            $specialStatus=true;
        }
        if($upperStatus&& $lowerStatus&& $numberStatus&& $specialStatus){
            $_SESSION["password"]=password_hash($checkpass,PASSWORD_BCRYPT);
            $_SESSION["username"]=$sname;
            $_SESSION["email"]=$semail;
            echo "Register success";
        }else {
            echo "Please enter strong password";
        }
    }
    if(strlen($pass)<6){
        echo "please enter pass over 6 characters";
        
    }else {
        
        if($pass!==$conpass){
            echo "please enter same password";
        } else{
            checkStrongPass($pass,$name,$email);
           
            
        };
    };
        
    
   }
    ?>
</body>
</html>