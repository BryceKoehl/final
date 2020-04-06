<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: register.class.php
 * Description: Display a confirmation message after a user has attempted to create an account. Please note the page
 * should display different messages indicating whether the registration is successful or failed and then display
 * hyperlinks accordingly.
 */

class Register extends View
{
  public function display($register){
      parent::header();
      ?>

      <!--HTML code starts here... we'll come back to this. Reference user_error + i have a pic :) -->

      <!-- header -->
      <div class="top-row">Create an account</div>

      <!-- form elements -->
      <div class = "middle-row">
        <?php
        //shows message depending on if registration was successful or failed
        if(!$register){
          echo "<p>There has been an error</p>";
        }else{
          echo "<p> Your account has been successfully created. </p>";
        }
        ?>
      </div>

      <!-- links -->
      <div class="bottom-row">
        <span style = "float: left"> Already have an account? <a href = "index.php?action = login"> Login </a>
        </span>
        <?php
          if(!$register){
            echo '<span style = "float: right"> Don\'t have an account? <a href = "index.php"> Register </a> </span>';
          }
        ?>
<?php
parent::footer();
    }
}
?>
