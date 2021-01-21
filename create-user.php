
<!DOCTYPE html> 
<html> 
<head> 
<title>MONEY PLUS</title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type"> 

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://website1908.github.io/Moneyplus.github.to/createusers.css">
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfer-money.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'Navbar.php';
?>
        <h2 class="text-center pt-4"; style ="color:#660066;text-align:center;font-family: Times New Roman;"><b>Create a User</b></h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="user1.png" style="border: none; border-radius: 50%;alihn:left;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <h2 style="color:Black;font-family: Times New Roman;"><b><input class="app-form-control" placeholder="NAME" type="text" name="name" required></b></h2>
            </div>
            <div class="app-form-group">
              <h2 style="color:Black;font-family: Times New Roman;"><b><input class="app-form-control" placeholder="EMAIL" type="email" name="email" required></b></h2>
            </div>
            <div class="app-form-group">
             <h2 style="color:Black;font-family: Times New Roman;"><b> <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required></b></h2>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
