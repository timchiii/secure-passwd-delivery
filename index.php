<?php
	function retrievePassword($id)
	{
		//check the database against the ID provided and return the pasword
		exit();
	}

	//if ID is provided then run the function to retrive password
	if(isset($_GET['id']))
	{
		retrievePassword($_GET['id']);
	}
	
?>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		
		.slider {
			width: 100%;
		}
		
		.aCheckbox {
		}
		
		#wrap {
			float: left;
			position: relative;
			left: 50%;
		}
	
		#content {
			float: left;
			position: relative;
			left: -50%;
		}
		
		body {
			font-size: 1.5vh;
		}
		
		h1 {
			font-size: 4.5vh;
		}
	</style>
	<script language="javascript">
		function generatePassword() {
			var length = document.getElementById("pwlength").value;
			var lcase = document.getElementById("lcase").checked;
			var ucase = document.getElementById("ucase").checked;
			var numbers = document.getElementById("numbers").checked;
			var symbols = document.getElementById("symbols").checked;
			var password = document.getElementById("password");
			var chars = "";
			var passwd = "";
			if(lcase == true) { chars = chars + "abcdefghijklmnopqrstuvwxyz"; }
			if(ucase == true) { chars = chars + "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; }
			if(numbers == true) { chars = chars + "0123456789"; }
			if(symbols == true) { chars = chars + "!@#$%^&*()-=_+?"; }
			console.log("lcase:" + lcase);
			console.log("ucase:" + ucase);
			console.log("numbers:" + numbers);
			console.log("symbols:" + symbols);
			
			console.log("chars:" + chars);
			
			for (i=0;i<length;i++) {
				var c = Math.floor(Math.random()*chars.length + 1);
				passwd += chars.charAt(c)
			}
			password.value = passwd;
		}
	</script>
</head>
<body>
		<h1 class="w3-panel w3-center">Generate a Password:</h1>
		<div id="wrap">
		<div id="content">
		<form action="index.php">
				<p class="w3-panel w3-center" style="font-size: 2.5vh;">Password Length: <input type="text" style="text-align: center;" value="24" size="2" id="pwlength"></p>
				<input type="range" min="5" max="128" value="24" class="slider w3-center" id="myRange" style="width:100%;">
				<div class="w3-container">	
					<input type="checkbox" name="lcase" id="lcase" value="lcase" onchange='generatePassword();' checked>
					Include lowercase letters: abcdefghijklmnopqrstuvwxyz
					<br>
					<input type="checkbox" name="ucase" id="ucase" value="ucase" onchange='generatePassword();' checked>
					Include uppercase letters: ABCDEFGHIJKLMNOPQRSTUVWXYZ
					<br>
					<input type="checkbox" name="numbers" id="numbers" value="numbers" onchange='generatePassword();' checked>
					Include numbers: 0123456789
					<br>
					<input type="checkbox" name="symbols" id="symbols" value="symbols" onchange='generatePassword();' checked>
					Include symbols: !@#$%^&*()-=_+?
					<br>
				</div>
				<input type="text" style="text-align: center; width: 100%;" id="password">
				<script language="javascript">
					var slider = document.getElementById("myRange");
					var output = document.getElementById("pwlength");
					var password = document.getElementById("password");
					
					slider.oninput = function() {
						output.value = this.value;
						generatePassword();
					}
					generatePassword();
					
				</script>
				<br>
				<div class="w3-panel w3-center">
				<a href="generate.php">
					<input type="submit" value="Generate Secure Password Link">
				</a>
				</div>
					</div>
				</div>
				
		


		</form>
	
</body>
</html>
