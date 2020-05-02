<?php

/*
 * Author: Ashley, Chris, Bryce, Maimouna
 * Date: April 19 2020
 * File: celebrity_edit.class.php
 * Description: the display method in the class displays celebrity details in a form.
 *
 */

class CelebrityEdit extends CelebrityIndexView
{

    public function display($celebrity)
    {
        //display page header
        parent::displayHeader("Edit Celebrity");

        //retrieve celebrity details by calling get methods
        $celeb_id = $celebrity->getCelebId();
        $first_name = $celebrity->getFirstName();
        $last_name = $celebrity->getLastName();
        $gender = $celebrity->getGender();
        $age = $celebrity->getAge();
        $web_presence = $celebrity->getWebPresence();
        $most_active = $celebrity->getMostActive();
        $post_frequency = $celebrity->getPostFrequency();
        $images = $celebrity->getImages();
        ?>

        <div id="main-header">Edit Celebrity Details</div>

        <!-- display movie details in a form -->
        <form class="new-media" action='<?= BASE_URL . "/celebrity/update/" . $celeb_id ?>' method="post"
              style="border: 1px solid #bbb; margin-top: 10px; padding: 10px;">
            <input type="hidden" name="id" value="<?= $celeb_id ?>">
            </p>
            <p><strong>First Name</strong>: <br>
                <input name="first_name" type="text" size="50" value="<?= $first_name ?>" required=""></p>
            <p><strong>Last Name</strong>: <br>
                <input name="last_name" type="text" size="50" value="<?= $last_name ?>" required=""></p>
            <p><strong>Gender</strong>: <br>
                <input name="gender" type="text" size="50" required value="<?= $gender ?>"></p>
            <p><strong>Age</strong>: <br>
                <input name="age" type="int" size="3" required value="<?= $age ?>"></p>
            <p><strong>Web Presence</strong>: <br>
                <input name="web_presence" type="text" required value="<?= $web_presence ?>"></p>
            <p><strong>Most Active</strong>: <br>
                <input name="most_active" type="text" required value="<?= $most_active ?>"></p>
            <p><strong>Post Frequency</strong>: <br>
                <input name="post_frequency" type="text" required value="<?= $post_frequency ?>"></p>
            <p><strong>Image</strong>: <br>
                <input name="images" type="text" required value="<?= $images ?>"></p>
            <input type="submit" name="action" value="Update Celebrity">
            <input type="button" value="Cancel"
                   onclick='window.location.href = "<?= BASE_URL . "/celebrity/detail/" . $celeb_id ?>"'
        </form>
        <?php
    }

//end of display method
}
