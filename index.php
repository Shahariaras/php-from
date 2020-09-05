<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.sec {
  width: 50%;
  border: 3px solid black;
  border-radius: 5px;
}
.sec2 {
  width: 50%;
  border: 3px solid black;
  border-radius: 5px;
  text-align: center;
}

</style>
<div class="sec";>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <button type="submit" class="registerbtn">Register</button>
  
</form>
</div>
<div class="sec2";>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['email'];
  if (empty($name)) {
    echo "<b>Email</b>"."<per>  : </per>"."Name is empty";
  } else {
    echo "<b>Email</b>"."<per>  : </per>".$name;
  }
}
?>
<br><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['psw'];
  if (empty($name)) {
    echo "<b>Password</b>"."<per>  : </per>"."Name is empty";
  } else {
    echo "<b>Password</b>"."<per>  : </per>".$name;
  }
}
?>
<br><br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['psw-repeat'];
  if (empty($name)) {
    echo "<b>Re-Password</b>"."<per>  : </per>"."Name is empty";
  } else {
    echo "<b>Re-Password</b>"."<per>  : </per>".$name;
  }
}
?>
</div>




