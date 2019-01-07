<?php
 include ("header.php");
 ?>

 <form method="POST">
 <fieldset class = "fieldset1">
   <legend class = "legend1">Login/Create an Account</legend>
   <br/>
     <label>Username: <input type = "text" name="user"/></label>

     <br /><br />
    <label>Password: <input type = "password" name="pass"/></label>
    <br /><br />
    <input class="login" type="submit" value="Login"/>
    <br />
    <p class="loginSpecifications"> The username can contain letters (both upper and lower case) and digits only. <br/>
        The password must be at least 6 characters long (characters are to be letters and
        digits only), have at least one letter and at least one digit. </p>
</fieldset>
</form>

<?php
  if(isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // checks if at least one field is left empty
    if (empty($username) || empty($password)) {
      echo "<br/><span class='loginIncomplete'>Please make sure the form is complete!</span>";
    }

    // checks if username and password are properly formatted
    else {
      $valid_user = preg_match('/^[A-Za-z0-9]+$/', $username);
      $valid_pass = preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/', $password);

      if((!$valid_user) || (!$valid_pass)) {
        // username not properly formatted
        if(!$valid_user) {
          echo "<br/><span class='loginIncorrect'>Incorrect username format!</span>";
        }

        // password not properly formatted
        if(!$valid_pass) {
          echo "<br/><span class='loginIncorrect'>Incorrect password format!</span>";
        }
      }

      // entries are properly formatted
      else {
        $fileName = 'login.txt';
        // $login_file = fopen("login.txt", "r");
        $file_contents = file_get_contents("$fileName");
        $contents_array = explode(PHP_EOL, $file_contents);
        $wrongPassword = false;
        $validLogin = false;

        // loops through array of logins and checks if valid/invalid
        foreach($contents_array as $line) {
          // echo $line."<br/>";
          $regUser = '/^('.$username.')(:)/';
          $regUserPass = '/^('.$username.':'.$password.')/';
          $user_match = preg_match($regUser, $line);
          // echo "user_match".$user_match."<br/>";
          $userPass_match = preg_match($regUserPass, $line);
          // echo "userPass_match".$userPass_match."<br/>";

          if($user_match) {
            if($userPass_match)
              $validLogin = true;
            $wrongPassword = true;
          }
        }

        if($validLogin)
          echo "<br/><span class='loginIncomplete'>Logged in!</span>";

        else if($wrongPassword)
          echo "<br/><span class='loginIncorrect'>Invalid Login!</span>";

        else {
          $login_file = fopen("login.txt", "a");
          $entry = $username.':'.$password;
          fwrite($login_file, $entry.PHP_EOL);
          fclose($login_file);
          header("Location: registration.php");
          die();
        }

      }
    }
  }
 ?>


 <?php
  include ("footer.php");
  ?>
