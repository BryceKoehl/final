<?php
/**
 * Author: "Maimouna Diallo, Bryce Koehl, Ashley Nguyen, Christopher Schilling"
 * Date: 4/5/2020
 * File: index.class.php
 * Description: The view file for the application homepage. It defines a class named Index and a public method
 * named display(), which displays the registration form. The registration form allows a user to enter username,
 * password, email, first name and last name.
 *
 * Please note the following regarding the form:
 * • Use HTML5 validation techniques to ensure all fields are required; the email field is filled with an email
 * address; and the password field is filled with 5 or more characters.
 * • Use “post”, but not “get”, method to submit form data.
 * • The form should be sent to index.php along with the querystring variable called action.
 */

class Index extends View
{
    public function display(){
        parent::header();
        ?>

        <!--HTML code starts here... we'll come back to this. Reference user_error-->

        <!-- header -->
        <div class="top-row">Create an account</div>

        <!-- form elements -->
        <div class = "middle-row">
          <p> Please complete the entire form. All fields are required. </p>
          <form action = "index.php?action=register"  method = "POST">
            <div> <input type="text" name="username" placeholder="Username" required style='width:99%'/></div>
            <div> <input type="password" name="password" placeholder="Password, 5 characters minimum" required minlength = "5" style = 'width:99%'/> </div>
            <div> <input type="email" name="email" placeholder = "Email" required style='width:99%' /> </div>
            <div> <input type="text" name="firstName" placeholder = "First name" required style='width:99%' /> </div>
            <div> <input type="text" name="lastName" placeholder = "Last name" required style='width:99%' /> </div>
            <div> <input type="submit" name="Register" class = "button"/> </div>
          </form>

        <!-- links -->

<div class="bottom-row">
  <span style="float: left">Already have an account?<a href="index.php?action=login"> Login</a>
  </span>
</div>

<?php
parent::footer();
    }
}
?>
