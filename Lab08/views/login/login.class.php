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
          <form action = "index.php?action=login"  method = "POST">
              <div> <input type="text" name="username" placeholder="Username" required style='width:99%'/></div>
              <div> <input type="password" name="password" placeholder="Password, 5 characters minimum" required minlength = "5" style = 'width:99%'/> </div>
          </form>
      </div>

      <!-- bottom row for links  -->
      <div class="bottom-row">
          <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
      </div>


<?php
parent::footer();
  }
}
?>
