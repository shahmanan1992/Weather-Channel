<!DOCTYPE html>
<html>
<head>
<title>Weather Report</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>

html, body {
	height:100%;
	
}

#container {
	margin:0;
	padding-top:100px;
	background-color:aqua;
	width:100%;
	height:100%;
	text-align:center;
	color:black;
	
}

.weather {
	border:0;
	padding-left:20px;
	color:black;
	border-radius:10px;
	width:300px;
	height:40px;
}

.submit {
	border:0;
	background-color:green;
	height:40px;
	width:150px;
	border-radius:10px;
	color:white;

}

#result,#fail{
	margin-top:30px;
	border-radius:10px;
	border:none;
	background-color:red;
	color:white;
	margin-left:30%;
	margin-right:30%;
	padding:20px;
	display:none;
}
#success{
	margin-top:30px;
	border-radius:10px;
	border:none;
	background-color:orange;
	color:white;
	margin-left:30%;
	margin-right:30%;
	padding:20px;
	display:none;
}

</style>
</head>


<body>


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<div id="container">
	<div id="center">
		<h1>Weather Channel</h1>
		<p>Enter your city below to forecast the weather</p>
		<br /><input type="text" id="weather" name="weather" class="weather" placeholder="Eg. London, Mumbai, San Francisco.."/><br /><br />
		<input type="submit" id="submit" value="Find the weather" name="submit" class="submit" />
	</div>
	<div id="result" class="alert">
	</div>
	<div id="fail" class="alert">
	</div>
	<div id="success" class="alert">
	</div>
</div>


<script>
	 
		$("#submit").click(function() {
			
			$(".alert").hide();
			if($("#weather").val()!="")
			{
				$.get("weather.php?weather="+$("#weather").val(),function(data) {
					if(data=="Could not find this place. Please try again")
					{
						$("#fail").html("Could find find this place. Please try again").fadeIn();
					}
					else {
						$("#success").html(data).fadeIn();
					}
				});
		
			}
		else {
			$("#result").html("Please insert a city and try again.").fadeIn();
		}
	});

</script>

</body>
</html>
