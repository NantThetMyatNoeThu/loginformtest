
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

<body class="bg-success">

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
                    <form method="post" name="postForm">
                        <h3>This is login form</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  <button type="submit" class="btn btn-dark text-white float-end" name="clickbtn"> Click me </button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    session_start();
    if(isset($_POST["clickbtn"])){
      $uemail=$_POST["email"];
      $upass=$_POST["pass"];
      // echo $uemail;
      if($uemail===$_SESSION["email"] && password_verify($upass,$_SESSION["password"])){
        echo "Login is successful.";
      }
      else echo "Login fail!Try again......";
    }
    ?>
</body>
</html>