<html>
<head>
	<meta http-equiv="Content-Type" content="text/hmtl; charset utf-8/">
	<title>Untitled Document</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style>
	#msg{
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
	#msg.show
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
	<div class="reset">

		<form>
			<h2 align="center" style="color:#fff">Reset Password</h2>
			<input type="password" name="username" placeholder="Old Password" /><br/><br/>
			<input type="password" name="username" placeholder="New Password" /><br/><br/>
			<input type="password" name="username" placeholder="Confirm Password" /><br/><br/>
			<input type="button" value="Save" onclick="myFunction()" /><br/><br/>
			<a href="Login.html" style="text-decoration:none;">Go back to home page</a><br/><br/>
			<div id="msg">Your Password changed successfully</div>

			<script>
				function myFunction(){
					var x = document.getElementById("msg");
					x.className = "show";
					setTimeout(function(){ x.className = 
						x.className.replace("show", ""); } , 3000);
				}
			</script>
		</form>
	</div>
</body>

</html>