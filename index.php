<?php
/**
* index.php
*
* Created by: Pradyumna Shembekar
* Email: pshembe@calstatela.edu
* Created on: 01/25/2015
*/
?>

<?php
    require("header.php");
?>

  <title>AMPC Request Form</title>

  </head>
  <body>

	  <form name="registration" class="registration" action="submit.php" method="post">
	  <table class="personalInfo">
		<tr><td align="right">Name*: </td><td><input name="fname" maxlength="45" value="<? if (isset($_POST["fname"])) echo  htmlspecialchars($_POST["fname"]) ?>" required/></td></tr>
		<tr><td align="right">CIN*: </td><td><input name="cin" maxlength=9 onKeyPress="return numbersonly(this, event)" value="<? if (isset($_POST["cin"])) echo htmlspecialchars($_POST["cin"]) ?>" required/></td></tr>
		<tr><td align="right">Phone Number*: </td><td><input name="phno" maxlength=10 " value="<? if (isset($_POST["phno"])) echo htmlspecialchars($_POST["phno"]) ?>" required/></td></tr>
		<tr><td align="right">Email*: </td><td><input type="email" name="email" size="30px" value="<? if (isset($_POST["email"])) echo htmlspecialchars($_POST["email"]) ?>" required/></td></tr>
		<tr><td align="right">Quarter*: </td><td><select name="quarter">
					<option value="Fall">Fall</option>
					<option value="Winter">Winter</option>
					<option value="Spring">Spring</option>
					<option value="Summer">Summer</option>
				</select></td></tr>
		<tr><td align="right">Year*: </td><td><select name="year">
				<option value="2015">2015</option>
			</select></td></tr>
		<tr><td align="right">Library Call #(if needed): </td><td><input name="libcall" /></td></tr>
		<tr><td align="right">Pages Needed: </td><td><input name="pgneeded" /></td></tr>

	</table><br />

	<table class="requestedMaterial" >
		<caption><b>Requested Material*</b></caption>
		<tr><td><input type="checkbox" name="material[]" value="Textbook">Textbook</td>
		    <td><input type="checkbox" name="material[]" value="Course Packet">Course Packet</td>
		    <td><input type="checkbox" name="material[]" value="Handout">Handout</td>
		    <td><input type="checkbox" name="material[]" value="Article">Article</td></tr>

		<tr><td><input type="checkbox" name="material[]" value="Library Book">Library Book</td>
		    <td><input type="checkbox" name="material[]" value="Libraryarticle">Library Article</td>
		    <td><input type="checkbox" name="material[]" value="Web CT PDF">Web CT PDF</td>
		    <td><input type="checkbox" name="material[]" value="Powerpoint">Powerpoint</td></tr>
	</table><br />

	<table class="requestedFormat">
		<caption><b>Requested Format*</b></caption>
		<tr><td><input type="checkbox" name="format[]" value="KES" />Kurzweil</td>
            <td><input type="checkbox" name="format[]" value="DOC" />DOC</td>
		    <td><input type="checkbox" name="format[]" value="PDF" />PDF</td>
		    <td><input type="checkbox" name="format[]" value="Braille" />Braille</td>
		    <td><input type="checkbox" name="format[]" value="RTF" />RTF</td>
		    <td><input type="checkbox" name="format[]" value="TXT" />TXT</td></tr>

	</table><br />
	<div class="button"><button class="submitBtn" type="submit" name="submit">Submit</button></div>

	</form><br /><br />

<?php
  require("info.php");
?>

<?php
  require("footer.php");
?>
