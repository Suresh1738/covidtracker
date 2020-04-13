<?php include('logic.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="covid.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light  sticky-top">
	<div class="container-fluid">
  <a class="navbar-brand" href="#"  class="nav-link text-light" > covidtracker</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
					<a class="nav-link active" href="main.php">HOME</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link " href="ac.html">FACTS</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="myths.html">MYTHS</a>
                </li>
                <li class="nav-item ">
					<a class="nav-link" href="helpline.html">HELPLINE</a>
                </li>
                </ul>
		</div>
	</div>
</nav>

      <div class="container text-center my-4">
       <div class="row">
          <div class="col-4">
              <h4>Worldwide </h4>
              <?php echo $totalcases;?>
          </div>
          <div class="col-4">
              <h4>Recovered</h4>
              <?php echo $totalrecovered;?>
          </div>
          <div class="col-4">
              <h4>Deaths</h4>
              <?php echo $totaldeaths;?>
          </div>
        </div>
      </div>
      <div class="container-fluid ">  
          <div class="table-responsive">     
  <table class="table table-dark ">
    <thead class="table-dark">
      <tr>
        <th row="col">Country</th>
        <th  row="col">Confirmed</th>
        <th  row="col">Recovered</th>
        <th  row="col">Deceased</th>
      </tr>
    </thead>
    <tbody class="table-light text-dark" >
      <?php
      foreach($data as $key =>$value){
        $increase=   $value[$days_count]["confirmed"]- $value[$days_prev_count]["confirmed"];
      ?>
      <tr>
          <th>
              <?php echo $key;?>
          </th>
          <td> <?php echo $value[$days_count]["confirmed"];   ?>
          <?php if($increase !=0){?>
          <small class="text-danger"><i class="fas fa-arrow-up">  <?php echo $increase;  ?></i></small>
          <?php }?>
        </td>
          <td> <?php echo $value[$days_count]["recovered"]; ?></td>
          <td> <?php echo $value[$days_count]["deaths"]; ?></td>

      </tr>

      <?php } ?>
    </tbody>
  </table>
</div>
 </div>
 <div class="container-fluid bg-warning">
  <div class="h text-center">
<h2>Made by <a calss="n nav-link text-danger" href="https://www.facebook.com/surace.punk">Sureysh </a><h2>
  </div> 
 </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>