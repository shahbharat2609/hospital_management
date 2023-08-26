<?php


$conn = mysqli_connect('localhost','root','','Hospital_db') or die('connection failed');
$name=$_REQUEST["Name"];
$sql = "SELECT * FROM contact where name like '$name%'";
$result = mysqli_query($conn,$sql );


?>
<html>

<head> 
  <title>query system</title>
<link rel="stylesheet" href="css/name.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">   
<link rel="icon" href="favicon.ico">
</head>
<body>
    <div class="box">   
    <h3 class="heading">Results by  <span style="color:#16a085;">name</span></h3> 
    <table class="table table-striped" table-borderless  table-reponsive align="center" style="width:900px; line-height:40px; color:#16a085;">
  
    <tr align="left" style="color:grey;">
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact no.</th>
        <th scope="col">Date</th>
    </tr>
<?php
  while($row=mysqli_fetch_assoc($result)) 
 {
    
echo "<tr>
      <td>".$row['name']."</td>
       <td>". $row['email']."</td>
       <td>". $row['number']."</td>
       <td>". $row['date']."</td>
       </tr> ";
  }
?>
</table>
<a href="index.php"><button type="button" class="btn btn-outline-success btn-lg">Back To Home</button></a> 
<a href="query.html"><button type="button" class="btn btn-outline-success btn-lg">Back To Query Page</button></a>
</div>
</body>
 </html>