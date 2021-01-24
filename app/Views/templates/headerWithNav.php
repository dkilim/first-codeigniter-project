<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--Font-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Habultron</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" href="/profile"><i class="far fa-user"></i> Profile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item">
            <a class="nav-link" href="/adduser">Add User</a>
       </li>
       <li class="nav-item">
            <a class="nav-link" href="/edituser">Edit User</a>
       </li>
    </ul> 

    <ul class="navbar-nav my-2 my-lg-0">
       <li class="nav-item">
            <a class="nav-link" ><?= session()->get('firstname')." ".session()->get('lastname') ?></a>
       </li> 
       <li class="nav-item">
            <a class="nav-link" href="/logout">Logout   <i class="far fa-sign-out"></i></a>
       </li>
    </ul>
   

    </div>

  </div>
</nav>