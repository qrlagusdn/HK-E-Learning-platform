<html>
<head>
	<meta http-equiv="Content-Type" content="text/hmtl; charset utf-8/">
	<title>Untitled Document</title>
	<link href="css/forget.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style>
	#snackbar{
		visibility: hidden;
		min-width: 250px;
		background-color: yellow;
		color: #000;
		text-align: 200px;
		border-radius: 2px;
		padding: 16px;
		position: fixed;
		z-index: 1;
		right: 590px;
		top: 30px;
		font-size: 17px;
		margin-right: 30px;
	}
	#snackbar.show
	{
		visibility: visible;
		-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
		animation: fadein 0.5s, fadeout 0.5s 2.5s;
	}

	@-webkit-keyframes fadein {
		from {top: 0; opacity: 0;}
		to{top: 30px; opacity: 1;}
	}

	@keyframes fadein {
		from {top: 0; opacity: 0;}
		to{top: 30px; opacity: 1;}
	}

	@-webkit-keyframes fadein {
		from {top: 30; opacity: 1;}
		to{top: 0; opacity: 0;}
	}

	@keyframes fadein {
		from {top: 30; opacity: 1;}
		to{top: 0; opacity: 0;}
	}

</style>
</head>
<body>
	<div class="forget">
		<form>
			<h2 align="center" style="color:#fff;">Forget password</h2>
			<h5 style="font-size:14px; color: yellow;">Enter e-mail here</h5>
			<input type = "text" name = "username" placeholder="Enter your e-mail"><br/><br/>
			<input type = "button" value = "Send" onclick="myFunction()"/><br/><br/>
			<a href="Login.html" style="text-decoration:none;">Go back to home page</a><br/><br/>

			<div id="snackbar">Link send on your email</div>

			<script>
				function myFunction(){
					var x = document.getElementById('snackbar');
					x.className = "show";
					setTimeout(function(){ x.className= 
						x.className.replace("show", "");}, 3000);
				}
			</script>

		</form>

	</div>
</body>
</html>