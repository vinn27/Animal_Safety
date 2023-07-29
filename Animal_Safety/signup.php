<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="index">
    <h1 class="text-center my-5"><span class="text-primary">User</span> Registration</h1>
    <div class="container-fluid my-5 py-5 d-flex justify-content-center">

        <div class="container m-5 p-5">
    <form action="signupdone.php" method="post">

      <div class="form-group">
        <label class="h4" for="username" >Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
      </div>

      <div class="form-group">
        <label class="h4" for="phone" >Phone Number</label>
        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
      </div>

      <div class="form-group">
        <label class="h4" for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
      </div>

      <div class="form-group">
        <label class="h4" for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    </div>
    <div class="container-fluid bg-dark text-center mb-0 py-5 text-light">
        <i>Please <span class="text-info">login</span> for Smooth<span class="text-info"> Experinece</span></i>
        <h2><i>6th Semester MiniProject-II</i></h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
<style>
.index {
    background-image: url(".\\images\\animals.jpg");
    /* transform: translateY(-100px); */
    /* transform: translateX(100px); */
    /* left: 30; */
    background-repeat: no-repeat;
    /* background-position: center; */
    background-size: cover;
}
.form-group {
    padding-bottom: 20px; /* Increase the padding-bottom as desired */
  }

.inner {
    transform: translateY(-100px);
}
</style>

</html>