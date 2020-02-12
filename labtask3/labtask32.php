<!DOCTYPE html>
<html>
<?PHP
$name = $email = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$name= test($_POST["name"]);
	 $dd = test($_POST["dd"]);
  $email = test($_POST["email"]);
  $mm = test($_POST["mm"]);
  $yyyy = test($_POST["yyyy"]);
  $gender = test($_POST["gender"]);
	$degree=test($_POST["degree"]);
	$bgroup=test($_POST["bgroup"]);
	$bgroup2= $bgroup;
}

function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<p>Name</p>	
<input type="text" name="name" value="<?PHP echo $name; ?>"><br>


<br>

<p>email</p>	
<input type="email" name="email" value="<?PHP echo $email; ?>"><br>


<h2>Date of Birth: </h2>

	<p>dd</p>
<input type="number" name="dd" value="<?PHP echo $dd; ?>">
<p>mm</p>
<input type="number" name="mm" value="<?PHP echo $mm; ?>">
<p>yyyy</p>
<input type="number" name="yyyy" value="<?PHP echo $yyyy; ?>">






<p>Gender:</p>	

<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 


 



<br>




<p>Degree:</p>	

  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC" > SSC<br>
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="HSC") echo "checked";?>value="HSC"> HSC<br>
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="BSC") echo "checked";?> value="BSC"> BSC <br>
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="Msc") echo "checked";?> value="Msc">Msc



<br>
<p>BloodGroup:</p>
<select name="bgroup">
  <?php if (isset($bgroup) && $bgroup==$bgroup2) echo "checked";?>
  <option <?php if (isset($bgroup) && $bgroup=="A+") echo "checked";?>value="A+">A+</option>
  <option <?php if (isset($bgroup) && $bgroup=="AB+") echo "checked";?> value="AB+">AB+</option>
  <option <?php if (isset($bgroup) && $bgroup=="O+") echo "checked";?> value="O+">O+</option>
  <option <?php if (isset($bgroup) && $bgroup=="other") echo "checked";?> value="other">other</option>
</select>
<input type="Submit" name="Submit">
</form>

<?php 



echo "<h1> OUTPUT: </h1>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dd;
echo "-";
echo $mm;
echo "-";
echo $yyyy ;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bgroup;




?>
</html>