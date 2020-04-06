<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: login.class.php
 * Description: The view file for displaying the login form.
 */

class Login extends View
{
  public function display(){
      parent::header();
      ?>

      <!--HTML code starts here... we'll come back to this. Reference user_error-->

      <div class="top-row">Login</div>

      <!-- middle row -->
      <div class="middle-row">
          <h3>Please log in.</h3>
          <p><?= $message ?></p>
      </div>

      <!-- bottom row for links  -->
      <div class="bottom-row">
          <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
          <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
      </div>


<?php
parent::footer();
  }
}
?>
