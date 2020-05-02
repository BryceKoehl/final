<?php
/*
 * Author: Ashley, Chris, Bryce, Maimouna
 * Date: April 19 2020
 * File: celebrity_edit.class.php
 * Description: the display method in the class displays celebrity details in a form.
 *
 */
class CelebrityEdit extends CelebrityIndexView {

    public function display($celebrity) {
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
        <form class="new-media"  action='<?= BASE_URL . "/celebrity/update/" . $celeb_id ?>' method="post" style="width: 50%; margin-left: 25%; border: 1px solid #bbb; margin-top: 10px; padding: 10px;">
            <div id="mainbody">
                <div>
                    <div id="main-header"><h2 class="align-middle">Add in New Celebrity Details</div>
                    <form action='<?= BASE_URL . "/celebrity/add/"?>' method="post" class="col5"style="width: 50%; margin-left: 25%">
                        <div class="form-group">
                            <label for="exampleInputEmail1" >First Name:</label>
                            <input name="first_name" type="text" size="5" required class="form-control"
                                   id="exampleInputEmail1"
                                   aria-describedby="emailHelp" value="<?= $first_name ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name:</label>
                            <input name="last_name" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" value="<?= $last_name ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Gender:</label>
                            <input name="gender" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" value="<?= $gender ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Age:</label>
                            <input name="age" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" value="<?= $age ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Web Presence:</label>
                            <input name="web_presence" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" value="<?= $web_presence?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Most Active:</label>
                            <input name="most_active" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1"value="<?= $most_active ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Post Frequency:</label>
                            <input name="post_frequency" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" value="<?= $post_frequency ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image:</label>
                            <input name="images" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" placeholder="Enter an image url.">
                        </div>
                        <div class="staff-button">
                            <div style="align-items: center">
                                <input  class="btn btn-success" type="submit" name="action" value="Update Celebrity"/>
                                <input class="btn btn-secondary" type="button" value="Cancel"
                                       onclick='window.location.href = "<?= BASE_URL . "/celebrity/detail/" . $celeb_id ?>"'>
                            </div>
                        </div>
                </div>
        </form>
        <?php
    }

//end of display method
}
