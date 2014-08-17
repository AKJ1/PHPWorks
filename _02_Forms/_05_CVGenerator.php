<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Stuff</title>
		<link rel="stylesheet" href="css/default.css">
		<style>
		body{
			background-color: #faca8e;
		}
			input,button{
				display:block;
				width: 80%;
			}
			select{
				display:block;
				width: 80%;
				padding: 10px;
				border: 1px solid black;
				border-radius: 5px;
				margin-left: auto;
				margin-right: auto;
			}
			button,input,select{
				margin-top: 5px;
				margin-bottom: 5px;
			}
			legend{
				font-size: 40px;
				text-align: center;
				font-weight: bolder;
			}
			.radio *{
				display: inline-block;
				width: auto;
			}
			.radio{
				display: block;
				width: auto;
				text-align: center;
				margin-right: auto;
				margin-left:auto;
			}
			section{
				margin-bottom: 50px
			}
			h4{
				margin-top: 10px;
				margin-bottom: 5px;
			}
			fieldset{
				min-width: 550px;
				width: 30%;
				border: 1px solid black;
				margin-left: auto;
								margin-right: auto;
			}
			section{
				width: auto;
			}
			label{
				display: block;
				text-align: center;
			}
			.removeButton{
				background-color: lightyellow;
				display: inline-block;
				width: 50%;
			}
			.removeButton:hover{
				color: white;
				content: "Remove?";
				background-color: black;
			}
			.progLang{
				width: 40%;
				margin: 10px;
				display: inline-block;
			}
		</style>

		<script>
		function removeButton(button){
			var holder = button.innerHTML;
			button.innerHTML = removeButton;
		}
		</script>
	</head>
	<body>
		<form action="" id="form" method="post">
			<section id="Personal">
				<fieldset>
					<legend><h4>Personal Information</h4></legend>
					<paper-input label="Your Name" name="keks"></paper-input>
					<input type="text" name="FirstName" id="" placeholder="First Name">
					<input type="text" name="LastName" id="" placeholder="LastName">
					<input type="text" name="Email" id="" placeholder="Email">
					<input type="text" name="Phone" id="" placeholder="Phone Number">
					<span class="radio"><label for="male">Male</label>
					<input type="radio" name="sex" id="male">
					<label for="female">Female</label>
					<input type="radio" name="sex" id="female"></span>
					<label for="bday">Birth Date</label>
					<input type="date" name="birth" id="bday">
					<label for="nationality">Nationality</label>
					<select name="nationality" id="nationality">
						<option value="">Bulgarian</option>
						<option value="">Romanian</option>
						<option value="">French</option>
						<option value="">American</option>
						<option value="">Pakistani</option>
					</select>
				</fieldset>
			</section>
			<section id="LastWork">
				<fieldset>
					<legend>Last Work Position</legend>
					<label for="company">Company Name</label>
					<input type="text" name="Company" id="company">
					<label for="from">From</label>
					<input type="date" name="WorkedFromDate" id="from">
					<label for="to">To</label>
					<input type="date" name="WorkedToDate" id="to">
				</fieldset>
			</section>
			<section id="ComputerSkills">
				<fieldset>
					<legend>Computer Skills</legend>
					<label for="languages">Programming Languages</label>
					<input type="text" name="proglang" id="languages" placeholder="Enter Language">
					<select name="profficiency" id="">
						<option value="Beginner">Beginner</option>
						<option value="Advanced">Advanced</option>
						<option value="Expert">Expert</option>
						<option value="Artisan">Artisan</option>
					</select>
					<button type="submit" name="addproglang" value="1">Add language</button>
					<?php
					session_start();
					$sessionData = $_SESSION['enteredProgLangs'];
					if (isset($_POST['removeProgLang'])) {
						foreach ($sessionData as $key => $value) {
							foreach ($value as $k => $v) {
								if ($k.$v == $_POST['removeProgLang']) {										
									unset($sessionData[$key]);
								}
							}
						}
					}
					if (isset($_SESSION['enteredProgLangs'])) {
						if (isset($_POST['addproglang'])) {
								$currentLang = [($_POST['proglang']) => $_POST['profficiency']];
								array_push($sessionData, $currentLang ) ;
							}
						foreach ($sessionData as $key => $value) {
							foreach ($value as $k => $v) {
								echo "<p class=\"progLang\">$k - $v</p><button class=\"removeButton\" name=\"removeProgLang\" value=\"$k$v\">Remove?</button>";
							}
						}
					}
					else
					{
						$_SESSION['enteredProgLangs'] = [];
					}
					
					$_SESSION['enteredProgLangs'] = $sessionData;
					?>
				</fieldset>
			</section>
			<section id="Other">
				<fieldset>
					<legend>Other Skills</legend>
					<input type="text" name="curlang" id="" placeholder="Enter Language">
					<select name="comprehension" id="" placeholder="-Comprehension-">
						<option disabled="true" selected="true">-Comprehension-</option>
						<option value="Beginner">Beginner</option>
						<option value="Advanced">Advanced</option>
						<option value="Expert">Expert</option>
					</select>
					<select name="reading" id="" placeholder="-Reading-">
						<option disabled="true" selected="true">-Reading-</option>
						<option value="Beginner">Beginner</option>
						<option value="Advanced">Advanced</option>
						<option value="Expert">Expert</option>
					</select>
					<select name="writing" id="" placeholder="-Writing-">
						<option disabled="true" selected="true">-Writing-</option>
						<option value="Beginner">Beginner</option>
						<option value="Advanced">Advanced</option>
						<option value="Expert">Expert</option>
					</select>
					<button type="submit" name="addlang" value="1">Add Language</button>
					<?php
					session_start();
					$sessionData = $_SESSION['enteredLangs'];
					if (isset($_POST['removeLang'])) {
						foreach ($sessionData as $key => $value) {
							foreach ($value as $k => $v) {
								if ($k.$v == $_POST['removeLang']) {										
									unset($sessionData[$key]);
								}
							}
						}
					}
					if (isset($_SESSION['enteredLangs'])) {
						if (isset($_POST['addproglang'])) {
								$currentLang = [($_POST['curlang']) => $_POST['writing']];
								array_push($sessionData, $currentLang ) ;
							}
						foreach ($sessionData as $key => $value) {
							foreach ($value as $k => $v) {
								echo "<p class=\"progLang\">$k - $v</p><button class=\"removeButton\" name=\"removeProgLang\" value=\"$k$v\">Remove?</button>";
							}
						}
					}
					else
					{
						$_SESSION['enteredProgLangs'] = [];
					}
					
					$_SESSION['enteredProgLangs'] = $sessionData;
					?>
					<label for="radio">Driver License</label>
					<span class="radio"><label for="drvA">A</label>
					<input type="checkbox" name="driverA" id="drvA">
					<label for="drvB">B</label>
					<input type="checkbox" name="driverB" id="drvB">
					<label for="drvC">C</label>
					<input type="checkbox" name="driverC" id="drvC"></span>
				</fieldset>
			</section>
			<button type="submit" name="submit">Submit</button>
		</form>
	</body>
</html>