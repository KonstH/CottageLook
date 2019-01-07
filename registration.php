<?php
 include ("header.php");
 ?>

 <form method="POST">
 <fieldset class = "fieldset1">
   <legend class = "legend1">Success!</legend>
   <br/>
   <p class="loginSpecifications"> Your account has been created! Click the button
   below to be redirected to the search page.</p>
    <input id="btn" class="login" type="submit" name="submit" value="Go to search page"/>
    <br />

</fieldset>
</form>

<?php
if (isset($_POST['submit'])){
  header("Location: Q4.php");
  die();
}
?>

<?php
 include ("footer.php");
 ?>
