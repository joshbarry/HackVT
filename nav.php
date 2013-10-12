<?php 
//Navigation
?>
<!--
<a class="button" href="#counties_toggle">Counties</a>
<a class="button" href="#scores_toggle">Scores</a>
<a class="button" href="#funding_toggle">Funding</a>
-->

<div class="tabs">
<form name="navigation" action="<? print $_SERVER['PHP_SELF'];?>" method="post"> 
<div class="tab">
	<input type="radio" class="tabby" id="tab-1" name="tab-group-1" checked="">
	<label for="tab-1">Counties</label>
		<div class="serverTabContent">
		<div id="panelIDS1">
			
			<select name="Counties" onchange="this.form.action=this.value">
				<option value="?&county=none">--- Select County ---</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Addison"; ?>">Addison</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Bennington"; ?>">Bennington</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Caledonia"; ?>">Caledonia</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Essex"; ?>">Essex</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Franklin"; ?>">Franklin</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Grand Isle"; ?>">GrandIsle</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Lamoille"; ?>">Lamoille</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Orange"; ?>">Orange</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Orleans"; ?>">Orleans</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Rutland"; ?>">Rutland</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Washington"; ?>">Washington</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Windham"; ?>">Whindam</option>
				<option value="<? print $_SERVER['PHP_SELF']."?&county=Windsor"; ?>">Windsor</option>
			</select>
			<input type="submit" tabindex="300" name="cmdSubmitted" value="Submit" style="display:block; margin: 10px auto;" />
		</div>
		</div>
</div>

<div class="tab">
	<input type="radio" class="tabby" id="tab-2" name="tab-group-1">
	<label for="tab-2">Scores</label>
		<div class="serverTabContent">
		<div id="panelIDS2">
			
			<select name="Tests">
				<option value="?&scores=none">--- Select Scores ---</option>
				<option value="Necap Science Grade 8 ">NECAP Science Grade 8</option>
				<option value="NECAP Writing Grade 8">NECAP Writing Grade 8</option>
				<option value="NECAP Science Grade 4">NECAP Science Grade 4</option>
				<option value="NECAP Math Grades 3-8">NECAP Math Grades 3-8</option>
				<option value="NECAP Reading Grades 38">NECAP Reading Grades 3-8</option>
				<option value="NECAP Writing Grade 5">NECAP Writing Grade 5</option>
				<option value="NECAP Writing Grade 11">NECAP Writing Grade 11</option>
				<option value="NECAP Reading Grade 11">NECAP Reading Grade 11</option>
				<option value="NECAP Science Grade 11">NECAP Science Grade 11</option>
				<option value="NECAP Math Grade 11">NECAP Math Grade 11</option>
			</select>
			<input type="submit" tabindex="300" name="cmdSubmitted" value="Submit" style="display:block; margin: 10px auto;" />
		</div>
		</div>
</div>

<div class="tab">
	<input type="radio" class="tabby" id="tab-3" name="tab-group-1">
	<label for="tab-3">Year Period</label>
		<div class="serverTabContent">
		<div id="panelIDS3">
			
			<select name="year" onsubmit="<? $_POST['year'] ?>" >
				<option value="?&year=none">--- Select Year ---</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
			</select>
			<input type="submit" tabindex="300" name="cmdSubmitted" value="Submit" style="display:block; margin: 10px auto;" />
		</div>
		</div>
</div>
</form>
</div>
