<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: reset_confirm.php
 * Description: Display a conformation message indicating whether the user’s attempt to reset password was successful
 * or failed. It should also display hyperlinks accordingly
 */

class ResetConfirm extends View
{
    public function display($message, $reset){
        parent::header();
        ?>

        <!--HTML code starts here... we'll come back to this. Reference user_error-->

        <div class="top-row">Password reset confirmation</div>

        <!-- middle row -->
        <div class="middle-row">
            <h3>Password reset successful</h3>
            <p><?= $message ?></p>
            <?php
            //if password reset failed, try again
            //also update header! Password reset Success/Login Failed
            if(!$reset){
                echo '<h3>Password rest failed, please try again.</h3>';
                echo '<p><?= $message ?></p>';
                echo '<span style="float: left">Reset password<a href="index.php?action=reset">Reset password</a></span>';
           }
            ?>
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