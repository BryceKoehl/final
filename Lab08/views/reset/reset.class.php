<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: reset.class.php
 * Description: Display the password reset form if the user has logged in. The form should automatically fill the
 * username field using the cookie created when the user logs in. It should also make the username field read-only.
 * The form should use POST method to submit data. If the user is currently not logged in, display an error message instead.
 */

class Reset extends View
{
  public function display(){
    parent::header();
    ?>
    <!-- HTML code starts here -->
    <!-- top row for page header -->
    <div class = "top-row">Reset Password</div>

    <!-- reset password form elements -->
    <div class == "middle-row">
      <p> Please enter a new password. Username is not changeable. </p>
      <form action = "index.php?action=do_reset" method="POST"><br>
        <p><input type = "text" name = "username" value = "<?php if(isset($_COOKIE['username']) &&
        !empty($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>" required readonly style='width:99%'/> </p>
        <div><input type = "password" name = "password" placeholder = "Password, 5 character minimum."
          required minlength = "5" style = 'width:99%' /> </div>
          <input type = "submit" value = "Reset Password" name = "reset" class = "button" />
        </form>
      </div>

      <!-- links -->
      <div class = "bottom-row">
        <span style = "float: left">Cancel password reset?<a href = "index.php?action=login"> Cancel Reset</a></span>
      </div>

    <?php
    parent::footer();
  }
}
?>
