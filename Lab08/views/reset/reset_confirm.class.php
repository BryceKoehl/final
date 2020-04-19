<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: reset_confirm.class.php
 * Description: Display a conformation message indicating whether the user’s attempt to reset password was successful
 * or failed. It should also display hyperlinks accordingly
 */

class ResetConfirm extends View
{
    public function display($reset){ //takes in variable $reset
        parent::header(); //inherited from parent View class
        ?>

        <!--HTML code starts here-->

        <div class="top-row">Reset Password</div>

        <!-- update body message -->
        <div class="middle-row">
            <p>You have successfully reset your password.</p>
            <?php
            //if password reset failed, try again
            //also update text to report Password reset Success/Password reset Failed
            if(!$reset){
                echo '<h3>Password rest failed, please try again.</h3>';
            }
            ?>
        </div>

        <!-- links  -->
        <div class="bottom-row">
            <span style="float: left">Want to logout? <a href="index.php?action=logout">Logout</a></span>
            <span style="float: right">Don't have an account?<a href="index.php"> Register</a></span>
        </div>

        <?php
        parent::footer(); //inherited from parent View class
    }
}
?>