<!DOCTYPE html> 
<html> 
<head> 
<title>Transactionhistory</title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type"> 

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<style> 

.mySlides {display:none;} 

body {font-family:Times New Roman;} 

.navbar { 

width:100%; 

background-color: #f2f2f2; 

overflow: auto; 

} 
.navbar a{ float:right; 
padding:16px; 
color:#000066; 
text-decoration:none; 
font-size:20px; 
} 
.navbar a:hover { 
backgound-color:#0000cc; 
} 
@media screen and (max-width: 500px) 
.navbar a { 
float:none; 
enter display:block; 
} 
} 
</style> 
</head> 
<style> 
body { 
background-image:url('Bg.jpg'); 
background-repeat:no-repeat; 
background-attachment:fixed; 
background-size:100% 100%; 
} 
</style> 
<body> 
<h4 style="color:#660066; text-align:left; font-family:Times New Roman;">Money Plus<i class="fa fa-university"></i></h4> 
<div class="navbar"> 
<a href ="transaction_history.php">Transaction History</a> 
<a href ="transfer-money.php">Transfer Money</a> 
<a href ="create-user.php">Create user</a> 
<a href= "home.php">Home</a>  
</div>
<style> 
table { 
font-family: Tmes New Roman, sans-serif; 
border-collapse: collapse; 
width: 65%; 
} 

td, th { 
border: 1px solid #3333cc; 
text-align: center; 
padding: 4px; 
} 

tr:nth-child(even){ 
background-color: #e6ffff; 
} 

</style> 
</head> 
<body> 
<h2 style ="color:#00004d;text-align:left;font-family: Times New Roman;"><b>Transaction History</b></h2> 

<div class="table">
  <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
  <tr>
<th><h4 style="color:#00004d; font-family: Times New Roman;"><b>Sr-No</b></h4></th> 
<th><h4 style="color:#00004d; font-family: Times New Roman;"><b>Sender</b></h4></th> 
<th><h4 style="color:#00004d; font-family: Times New Roman;"><b>Receiver</b></h4></th> 
<th><h4 style="color:#00004d; font-family: Times New Roman;"><b>Amount</b></h4></th> 
<th><h4 style="color:#00004d; font-family: Times New Roman;"><b>Date & Time</b></h4></th> 
</tr> 
<tr>
    <td class="py-2">1</td>
     <td class="py-2">Shubhra</td>
                        <td class="py-2">Rohan</td>
                        <td class="py-2">8000</td>
                       <td class="py-2">2021-01-21-02:00</td>
  </tr>
<td class="py-2">2</td>
     <td class="py-2">Kaviya</td>
                        <td class="py-2">Avni</td>
                        <td class="py-2">500</td>
                       <td class="py-2">2021-01-21-02:01</td>
  </tr>
</thead>
        <tbody>
        </tbody>
               
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>