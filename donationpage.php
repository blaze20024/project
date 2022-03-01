<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="donation.css">
    <title>Donation Page</title>

    <style>
.left, .right {
  float: left;
  width: 20%; /* The width is 20%, by default */
}

.main {
  float: left;
  width: 60%; /* The width is 60%, by default */
}

/* Use a media query to add a breakpoint at 800px: */
@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
</style>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
          
    <?php


        $servername ="localhost";
        $username="root";
        $password="";
        $database="donation_form";

$conn= mysqli_connect($servername , $username ,$password , $database);
if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error()); 
}

if ($_SERVER['REQUEST_METHOD']=='POST')
{ 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Thanks!!!</strong> For Donating.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    $sql = "INSERT INTO `donation form` (`Name`, `email`, `phone_number`) VALUES ('$name', '$email', '$number');";
    mysqli_query($conn , $sql);
    
}

?>
    <div class="container mt-3">
            <h1 class="head">NGO DONATION</h1>
            <form action="donationpage.php" method="post">
        <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">

    <label for="email" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb">
  <div class="mb-3">
  <label for="number" class="form-label">Phone Number </label>
    <input type="int" name="number" class="form-control" id="number">
    
  </div>
  </div>
  <button  type="submit" class="btn btn-primary">Submit</button><br>
  <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HzhfdlpbpFYlGh" async> 
  </script>
</form>
        </div>

</body>

</html>