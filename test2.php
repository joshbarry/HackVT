<?php
 
if(isset($_POST['formSubmit']) )
{
  $varMovie = $_POST['formMovie'];
  $varName = $_POST['formName'];
  $varGender = $_POST['formGender'];
  $errorMessage = "";
 
  // - - - snip - - - 
}
 
?>

<p>
What is your Gender?
<select name="formGender">
  <option value="">Select...</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
</select>
</p>