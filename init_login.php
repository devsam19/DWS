<!DOCTYPE html>
<html>
<head>
	<title>Login_Splash</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
  	 body
   	{
   	 background-color: #0288D1 !important;
   	} 

   	.mid{
   			
  			 z-index: 1;
  			 width: 50%;
    		 top:0;
    		 bottom: 0;
    		 left: 0;
    		 right: 0;
    		 margin: auto;
  			 padding: 100px;
  			 text-align: center;
  			 
  			 
  
   	}

   	.heading{
   		color: #FEFEFE;
			font-family: "ROBOTO", sans-serif;
			font-size: 40px;
			
   	}
   	.smallHead{
   		color: #FEFEFE;
			font-family: "ROBOTO", sans-serif;
			font-size: 25px;
   	}

   	.log_bt{
   		
  		font-family: "Roboto", sans-serif;
  		text-transform: uppercase;
  		font-weight: bold;
  		background: #FEFEFE;
  		width: 90%;
  		border: 0;
  		padding-left: 15px;
  		padding-top: 20px;
  		padding-bottom: 20px;
  		padding-right: 15px;
  		color: #0288D1;
  		font-size: 14px;
      	cursor: pointer;
      	
   	}

   	.log_bt:hover{
   		font-family: "Roboto", sans-serif;
  		text-transform: uppercase;
  		font-weight: bold;
  		background: #00508A;
  		width: 90%;
  		border: 0;
  		padding-left: 15px;
  		padding-top: 20px;
  		padding-bottom: 20px;
  		padding-right: 15px;
  		color: #FEFEFE;
  		font-size: 14px;
      	cursor: pointer;
   	}

   	.bt{
   		width: 50%;
   		float: right;
   	}

   	.new_acc{
   		width: 100%;
   	
   		padding-top: 25px;
   		font-family: "Roboto", sans-serif;
   		font-size: 18px;
   		font-weight: bold;
  		color: #FEFEFE;
   	}
  </style>
</head>
<body>
<div class="container">
	
	<div class="row">
<div class="col-sm- col-md-6" align="left" style="color: #FEFEFE;"></div>
<div class="col-sm-8 col-md-6" align="right">
	
</div>

<div class="mid">
	<p align="center" class="heading">Digital Warehousing System</p>
	<p align="center" class="smallHead">One stop solution to warehousing problems and Inventory Management</p>
	<div class="bt">
		<button class="log_bt" id="client">Client Login</button>
	</div>
	<div class="bt">
		<button class="log_bt" id="admin">Admin Login</button>	
	</div>
	<br/>
	<br/>
	<div class="new_acc">
	
		<a href="www.google.com" style="color: #FEFEFE;">Create a New Account</a>

	</div>	
	
</div>

</div>
<script type="text/javascript">
	document.getElementById("client").addEventListener("click",function(){
			document.location.href='login.php';
	});

	document.getElementById("admin").addEventListener("click",function(){
			document.location.href='admin_login.php';
	});
</script>
</body>
</html>