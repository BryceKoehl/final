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
  public function display($result){
      parent::header();
      ?>

      <!--HTML code starts here... we'll come back to this. Reference user_error-->

      <div class="top-row">Login</div>

      <!-- middle row -->
      <div class="middle-row">
        <?php
          //if login failed, sign in again
          //also update header! Login Success/Login Failed
          if(!$result){
            echo '<p>Your last attempt to login failed. Please try again.</p>';
          }else{
            echo '<p>You have successfully logged in.</p>';
          }
          ?>
      </div>

      <!-- bottom row for links  -->
      <div class="bottom-row">
          <?php
          //if login failed, sign in again
          //also update header! Login Success/Login Failed
          if(!$result){
              echo '<span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>';
              echo '<span style="float: right">Reset password? <a href="index.php?action=reset">Reset</a></span>';
          }else{
              echo '<span style="float: left">Want to logout? <a href="index.php?action=logout">Logout</a></span>';
              echo '<span style="float: right">Reset password? <a href="index.php?action=reset">Reset</a></span>';
          }
          ?>
      </div>

<?php
parent::footer();
  }
}
?>