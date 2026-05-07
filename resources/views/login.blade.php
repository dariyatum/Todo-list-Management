<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    body{
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      background:#eee;
    }

    .login-box{
      width:850px;
      background:#d7c3f3;
      border-radius:10px;
      overflow:hidden;
    }

    .left{
      padding:60px;
    }

    .right{
      background:#b58df5;
      display:flex;
      justify-content:center;
      align-items:center;
    }

    .form-control{
      border-radius:30px;
    }

    .btn-login{
      background:#2e2141;
      color:white;
      border-radius:30px;
    }

    img{
      width:250px;
    }
  </style>
</head>

<body>

<div class="container login-box">
  <div class="row">

    <!-- Left -->
    <div class="col-md-6 left">
      <h2 class="fw-bold mb-4">Welcome Back!!</h2>

      <input type="email" class="form-control mb-3" placeholder="Email">

      <input type="password" class="form-control mb-3" placeholder="Password">

      <div class="text-end mb-3">
        <a href="#" class="text-danger small">Forgot Password?</a>
      </div>

      <button class="btn btn-login w-100 mb-4">Login</button>

      <div class="text-center">
        <i class="fa-brands fa-google mx-2"></i>
        <i class="fa-brands fa-facebook mx-2"></i>
        <i class="fa-brands fa-apple mx-2"></i>
      </div>
    </div>

    <!-- Right -->
    <div class="col-md-6 right">
      <img src="your-image.png" alt="">
    </div>

  </div>
</div>

</body>
</html>