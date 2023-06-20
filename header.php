<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity=" shas12-iBBXmBfw30+nuLcSkibmrPcLa80T92x01BIsZ+yWOWZCVaSWEccV3gFORBVOZ+8dL.Dgy/AHThR35VZc20M/gI1w ==" crossorigin="anonymous"/>
    <title>Dashboard</title>
    <style>
    .sidebar {
    margin: 0;
    margin-top: 2px;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
  }
   .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }
  .sidebar a.active {
    background-color: #4CAF50;
    color: white;
  }
  .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
  div.content {
    margin-top: 60px;
    margin-left: 200px;
    padding: 1px 16px;
    height: 100px;
  }
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
   @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
  .navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}
  </style>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </div>
</nav>
<div class="sidebar">
  <a class="active" href="#home">Jobs</a>
  <a href="jobs.php">Candidates applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>