<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>View Employees</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     } 
     body{
         background-color: beige;
     } 
     thead{
         background-color: grey;
     }
       
.Nav{
    min-height: 30px;
    line-height: 30px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    background-color: grey;
  
  }
  .Nav a{
    color: white;
    font-size: large;
    text-decoration: none;
  }
  .Nav span{
    color:white;
  }
</style>  
  
<body>  
  <!-- Navigation bar-->  
<div class="Nav">
<a href="dashboard.php"><i class="fas fa-house-user"></i>Home</a>
<a href=""><i class="fas fa-shopping-cart"></i>Profile</a>
<a href="logout.php"><input type="submit" class="button" value="Logout"></a>
</div>
<br>
<div class="table-scrol">  
    <h2 align="center">All Employees</h2>   
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
        <tr>  
  
            <th>Id</th>  
            <th>First Name</th> 
            <th>Last Name</th> 
            <th>Email</th> 
            <th>Username</th> 
            <th>Password</th>  
            <th>Delete</th>  
        </tr>  
        </thead>
        
        <?php


?>
    </table>  
        </div>  
</div>  
</body>  
  
</html>  