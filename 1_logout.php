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

<body class="bg-dark">
<?php 
    session_start();
    session_destroy();
    ?>
    <div class="container mt-5" >
        <div class="card" style="width: 800px; height: 200px;">
            <div class="card-body">
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
                
                    <div class="alert alert-primary d-flex align-items-center" role="alert" style="height: 100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" class="me-2   text-success"  >
                        <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/>
                    </svg>
                      <div>
                         Logout successful!
                       </div>
                      
                </div>
            
        </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>