<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: verify.class.php
 * Description: The view file for displaying a confirmation message after a user has attempted to log in. The page
 * should display different messages showing whether the login is successful or failed and then display hyperlinks
 * accordingly.
 */

class Verify extends View
{
  public function display($message, $register){
      parent::header();
      ?>

      <!--HTML code starts here... we'll come back to this. Reference user_error-->

      <div class="top-row">Confirmation</div>

      <!-- middle row -->
      <div class="middle-row">
        <p>You have successfully logged in.</p>
        <?php
          //if login failed, sign in again
          //also update header! Login Success/Login Failed
          if(!$register){
            echo '<h3>Login Failed, please login again.</h3>';
          }
          ?>
      </div>

      <!-- bottom row for links  -->
      <div class="bottom-row">
          <span style="float: left">Want to logout? <a href="index.php?action=logout">Logout</a></span>
          <span style="float: right">Reset password? <a href="index.php">Reset</a></span>
      </div>

<?php
parent::footer();
  }
}
?>
