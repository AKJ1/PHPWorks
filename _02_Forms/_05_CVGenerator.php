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
			.Lang{
				width: 75%;
				display: inline;
				text-align: left;

			}
			.langitem{
				font-size: 18px;
				text-transform: uppercase;
			}
			.removeLang{
				background-color: lightyellow;
				width: 20%;
				display: inline-block;;
				font-size: 18px;
			}
			.LangAttributes select{
				width: 32%;
				display: inline-block;
			}
			.LangAttributes{
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 100%;
			}
			table{
				display: table;
				width: 50%;
				min-width: 500px;
				margin-left: auto;
				margin-right: auto;
				text-align: center;
				border: 1px solid black;
			}
			tr ,td, th{
				border: 1px solid black;
			}
		</style>

		<script>
		function removeButton(button){
			var holder = button.innerHTML;
			button.innerHTML = removeButton;
		}
		</script>
		<?php 
			session_start();
		 ?>
	</head>
	<body>
		<form action="" id="form" method="post">
			<section id="Personal">
				<fieldset>
					<legend><h4>Personal Information</h4></legend>
					<paper-input label="Your Name" name="keks"></paper-input>
					<input type="text" name="FirstName" placeholder="First Name">
					<input type="text" name="LastName" placeholder="LastName">
					<input type="text" name="Email" placeholder="Email">
					<input type="text" name="Phone" placeholder="Phone Number">
					<span class="radio"><label for="male">Male</label>
					<input type="radio" name="Sex" value="male">
					<label for="female">Female</label>
					<input type="radio" name="Sex" value="female"></span>
					<label for="bday">Birth Date</label>
					<input type="date" name="Birth" id="bday">
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
					if (isset($_SESSION['enteredProgLangs'])) {
						$sessionData = $_SESSION['enteredProgLangs'];
					}else{
						$sessionData = [];
					}
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
					<span class="LangAttributes">
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
					</span>
					<button type="submit" name="addlang" value="1">Add Language</button>
					<?php
					if (isset($_SESSION['enteredLangs'])) {
						$sessionData = $_SESSION['enteredLangs'];
					}else{
						$sessionData = [];
					}
					if (isset($_POST['removeLang'])) {
						foreach ($sessionData as $key => $value) {
							foreach ($value as $k => $v) {
								if ($k == $_POST['removeLang']) {										
									unset($sessionData[$key]);
								}
							}
						}
					}
					if (isset($sessionData)) {
						if (isset($_POST['addlang']) && isset($_POST['comprehension']) && isset($_POST['reading']) && isset($_POST['writing'])) {
								$currentLang = [($_POST['curlang']) =>[$_POST['comprehension'], $_POST['reading'], $_POST['writing']]];
								array_push($sessionData, $currentLang);
							}
						foreach ($sessionData as $key => $value) {
							foreach ($value as $k => $v) {
								echo "<p class=\"Lang\">$k - <span class=\"langitem\">";
								foreach ($v as $kii => $val) {
									echo " $val";
								}
								echo "</span></p><button class=\"removeLang\" name=\"removeLang\" value=\"$k\">Remove?</button>";
							}
						}
					}
					else
					{
						$_SESSION['enteredLangs'] = [];
					}
					//print_r($_SESSION['enteredLangs']);
					$_SESSION['enteredLangs'] = $sessionData;
					?>
					<label for="radio">Driver License</label>
					<span class="radio"><label for="drvA">A</label>
					<input type="checkbox" name="drvA" value="A" id="drvA">
					<label for="drvB">B</label>
					<input type="checkbox" name="drvB" value="B"id="drvB">
					<label for="drvC">C</label>
					<input type="checkbox" name="drvC" value="C" id="drvC"></span>
				</fieldset>
			</section>
			<button type="submit" name="submit" value="1">Submit</button>
			<?php if (isset($_POST['submit'])) {
				echo "<table>";
				echo "<tr><th colspan=\"2\">Personal Information</th></tr>";
				echo "<tr><td>First Name</td><td>", $_POST['FirstName'], "</td></tr>";
				echo "<tr><td>Last Name</td><td>", $_POST['LastName'], "</td></tr>";
				echo "<tr><td>E-mail</td><td>", $_POST['Email'], "</td></tr>";
				echo "<tr><td>Phone</td><td>", $_POST['Phone'], "</td></tr>";
				echo "<tr><td>Gender</td><td>", $_POST['Sex'], "</td></tr>";
				echo "<tr><td>Born</td><td>", $_POST['Birth'], "</td></tr>";
				echo "<tr><td>Nationality</td><td>", $_POST['nationality'], "</td></tr>";
				echo "</table>";

				echo "<table>";
				echo "<tr><th  colspan=\"2\">Last Work Position</th></tr>";
				echo "<tr><td>Company Name</td><td>", $_POST['Company'], "</td></tr>";
				echo "<tr><td>From</td><td>", $_POST['WorkedFromDate'], "</td></tr>";
				echo "<tr><td>To</td><td>", $_POST['WorkedToDate'], "</td></tr>";
				echo "</table>";

				echo "<table>";
				echo "<tr><th  colspan=\"2\">Computer Skillls</th></tr><tr><td>Programming Languages</td><td><table><tr><th>Language</th><th>Skill Level</th></tr>";
				foreach ($_SESSION['enteredProgLangs'] as $key => $value) {
					foreach ($value as $k => $v) {
						echo "<tr> <td>$k</td> <td>$v</td> ";
					}
				}
				echo "</table>";
				echo "</td></tr>";
				echo "</table>";

				echo "<table>";
				echo "<tr><th colspan=\"2\">Other Skills</th></tr><tr><tr><td>Languages</td><td><table><tr><th>Language</th><th>Comprehension</th><th>Reading</th><th>Writing</th></tr>";
				foreach ($_SESSION['enteredLangs'] as $key => $value) {
					echo "<tr>";
					foreach ($value as $k => $v) {
						echo "<td>$k</td>";
						foreach ($v as $kii => $val) {
							echo "<td>$val</td>";
						}
	
					}
					echo "</tr>";
				}
				echo "</table></td></tr><tr><td>Driver's license</td><td>";
				if (isset($_POST['drvA'])) {
					echo $_POST['drvA'], " ";
				}
				if (isset($_POST['drvB'])) {
					echo $_POST['drvB'], " ";
				}
				if (isset($_POST['drvC'])) {
					echo $_POST['drvC'], " ";
				}
				
				echo "</td></tr>";

			} ?>
		</form>
	</body>
</html>