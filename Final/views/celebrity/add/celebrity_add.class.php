<?php
/**
 * Author: "Ashley Nguyen"
 * Date: 4/23/2020
 * File: celebrity_add.class.php
 * Description: this class is for adding a new celebrity profile to the database
 */

class CelebrityAdd extends CelebrityIndexView
{
    public function display()
    {
        ?>

        <div id="main-header"><h2 class="align-middle">Add in New Celebrity Details</div>
        <form class="card-body" action='<?= BASE_URL . "/celebrity/add/" ?>' method="post"
              style=" margin-top: 10px; padding: 10px; ">
            <div>
                <table class="staff-details-table" align='left' cellspacing="15">
                    <tr>
                        <td>First Name:</td>
                        <td><input name="first_name" type="text" size="100" required/></td>
                    </tr>

                    <tr>
                        <td>Last Name:</td>
                        <td><input name="last_name" type="text" size="100" required/></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input name="gender" type="text" size="100" required/></td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td><input name="age" type="text" size="100" required/></td>
                    </tr>
                    <tr>
                        <td>Web Presence:</td>
                        <td><input name="web_presence" type="text" size="100" required/></td>
                    </tr>
                    <tr>
                        <td>Most Active:</td>
                        <td><input name="most_active" type="text" size="100" required/></td>
                    </tr>
                    <tr>
                        <td>Post Frequency:</td>
                        <td><input name="post_frequency" type="text" size="100" required/></td>
                    </tr>
                </table>
            </div>
            <div style="align-items: center">
                <input type="submit" name="action" value="Add New Celebrity"/>
                <input type="button" value="Cancel"
                       onclick='window.location.href = "<?= BASE_URL . "/celebrity/index/" ?>"'
            </div>
        </form>

        <?php
    }
//end of display method
}