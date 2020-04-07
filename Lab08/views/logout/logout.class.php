<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: logout.class.php
 * Description: Display a conformation message after the user has logged out.
 */

class Logout extends View
{
  public function display($message){
      parent::header();
      ?>

      <!--HTML code starts here... we'll come back to this. Reference user_error-->
      <!-- header -->
      <div class="top-row">Logout</div>

      <!-- form elements -->
      <div class = "middle-row">
        <p>You have successfully logged out.</p>
      </div>

      <!-- links -->
      <div class="bottom-row">
          <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
          <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
      </div>

<?php
parent::footer();
  }
}
?>
