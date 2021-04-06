<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/0e62e3bdc9.js" crossorigin="anonymous"></script>
  <title>Dashboard</title>
</head>
<style>
  body{
      background-color: beige;
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
  .container{
    display: grid;
    grid-template-columns: 2fr 2fr 2fr;
    grid-column-gap: 20px;
    grid-row-gap: 30px;
    flex: auto;
  }
  .card{
    background-color: grey;
    border-radius: 10px;
    padding: 2em;
    box-shadow: 0px 10px 5px gray;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  
  }
  .card .name{
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 8em;
  }
  
  .card a{
    background-color: blue;
    border: none;
    padding: 0.5em;
    border-radius: 5px;
    font-weight: lighter;
    text-decoration: none;
    color: black;
  }
</style>
<body>
<!-- Navigation bar-->  
<div class="Nav">
<a href="admin/admin_dashboard.php"><i class="fas fa-house-user"></i>Home</a>
<a href=""><i class="fas fa-shopping-cart"></i>Profile</a>
<a href="logout.php"><input type="submit" class="button" value="Logout"></a>
</div>
<br>
    <section class="header text-center">
        <h3>Welcome, Employee Leave Management System</h3>
    </section>
    <br>
     <div class="container">
     <div class="card">
     <a href="leaves/approve_leave.php"><div class="name">Approve Leaves</div></a>
     </div>
     <div class="card">
     <a href="admin/employees.php"><div class="name">View Employees</div></a>
     </div> 
     <div class="card">
     <a href="report.php"><div class="name">Generate Reports</div></a>
     </div> 
   
 
</div>

  
</body>

</html>
