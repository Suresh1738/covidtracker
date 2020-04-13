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
<?php


?>

<div class="container-fluid ">  
          <div class="table-responsive">     
  <table class="table table-dark ">
    <thead class="table-dark">
      <tr>
        <th row="col">Districts</th>
        <th  row="col">Confirmed</th>
        <th  row="col">Recovered</th>
        <th  row="col">Deceased</th>
      </tr>
    </thead><?php
foreach($districtdta as $key=>$value1){
    
  


   
   ?>
    <tbody class="table-light text-dark" >
    
      <tr>
          <th>
              <?php echo $key;?>
          </th>
          <td> <?php echo $value1[$arrcount]["cases"];?>
        </td>
          <td> <?php echo $value1[$arrcount]["recovered"]; ?></td>
          <td> <?php echo $value1[$arrcount]["deaths"]; ?></td>

      </tr>

      <?php  }?>
    </tbody>
  </table>
</div>
 </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>