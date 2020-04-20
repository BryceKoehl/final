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
  public function display($result){ //display function takes in $result variable
      parent::header(); //inherited from parent View class
      ?>

      <!--HTML code starts here-->

      <div class="top-row">Login</div>

      <!-- body to display message whether login is success/fail-->
      <div class="middle-row">
        <?php
          //if login failed, sign in again
          //updates text to report whether Login Success/Login Failed
          if(!$result){
            echo '<p>Your last attempt to login failed. Please try again.</p>';
          }else{
            echo '<p>You have successfully logged in.</p>';
          }
          ?>
      </div>

      <!-- links  -->
      <div class="bottom-row">
          <?php
          //if login failed, sign in again
          //also update text to report Login Success/Login Failed
          if(!$result){ //if the login fails, direct to these links
              echo '<span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>';
              echo '<span style="float: right">Reset password? <a href="index.php?action=reset">Reset</a></span>';
          }else{ //when the login is successful, direct to these links
              echo '<span style="float: left">Want to logout? <a href="index.php?action=logout">Logout</a></span>';
              echo '<span style="float: right">Reset password? <a href="index.php?action=reset">Reset</a></span>';
          }
          ?>
      </div>

<?php
parent::footer(); //inherited from parent View class
  }
}
?>