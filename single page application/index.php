<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

<div class="menu">

<div class="container">

<div class="row">

<div class="col-lg-12">

<a id="all" class="btn btn-warning btn-sm" href="index.php">All students</a>
<a id="add_student" class="btn btn-warning btn-sm" href="">Add new students</a>
<a id="profile" class="btn btn-warning btn-sm" href="">Profile</a>





</div>





</div>




</div>




</div>
	
	
<div class="app">


	

</div>
	





	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<script>
	
	$('#add_student').click(function(){

     $. ajax({

     url: 'create.php',
	 success: function(data){
     $('.app'). html(data);



	 }

	 });
  

   return false;



	});


	$('#profile').click(function(){


   $. ajax({

     url: 'profile.php',
	 success: function(info){


     $('.app').html(info);


	 }




   });

   return false;

	});

	$('#all').click(function(){

   $. ajax({

   url: 'all.php',
   success: function(data){

   $('.app').html(data);




   }



   });

 return false;

	});
	
	
	</script>
</body>
</html>