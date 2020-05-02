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
        <!DOCTYPE html>
        <html>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <link rel='shortcut icon' href='<?= BASE_URL ?>/www/img/favicon.ico' type='image/x-icon'/>
            <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css'/>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                  crossorigin="anonymous">
            <script>
                //create the JavaScript variable for the base url
                var base_url = "<?= BASE_URL ?>";
            </script>
            <script type="text/javascript" src="<?= BASE_URL ?>/www/js/ajax_autosuggestion.js"></script>
        </head>
        <body>
        <!-- <div id="top"></div> -->
        <div id='wrapper'>
            <div id="banner">
                <a href="<?= BASE_URL ?>/index.php" style="text-decoration: none" title="Celebrity Web Presence Data">
                    <div align="center" style="padding-top: 25px;">
                        <span style='color: antiquewhite; font-size: 30pt; font-family: "Trebuchet MS", Helvetica, sans-serif'>
                                    🌟 Celebrity Web Data Showcase 🌟
                                </span>
                    </div>
                </a>
            </div>

            <br><br><br>
            <!-- <div id="footer"><br>I211 Final Project Spring 2020</div> -->


            <div id="mainbody">
                <div>
                    <div id="main-header"><h2 class="align-middle">Add in New Celebrity Details</div>
                    <form action='<?= BASE_URL . "/celebrity/add/" ?>' method="post" class="col5"
                          style="width: 50%; margin-left: 25%">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name:</label>
                            <input name="first_name" type="text" size="5" required class="form-control"
                                   id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter their first name.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name:</label>
                            <input name="last_name" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" placeholder="Enter their last name.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Gender:</label>
                            <input name="gender" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" placeholder="Enter their Gender.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Age:</label>
                            <input name="age" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" placeholder="Enter their age.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Web Presence:</label>
                            <input name="web_presence" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" placeholder="Enter their web-presence.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Most Active:</label>
                            <input name="most_active" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" placeholder="Enter their most active.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Post Frequency:</label>
                            <input name="post_frequency" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" placeholder="Enter their post frequency.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image:</label>
                            <input name="images" type="text" size="50" required class="form-control"
                                   id="exampleInputPassword1" placeholder="Enter an image url.">
                        </div>
                </div>
                <div class="staff-button">
                    <div style="align-items: center">
                        <input  class="btn btn-success" type="submit" name="action" value="Add New Celebrity"/>
                        <input class="btn btn-secondary" type="button" value="Back to View All Celebrities"
                               onclick='window.location.href = "<?= BASE_URL . "/celebrity/index/" ?>"'
                    </div>
                </div>

                </form>
            </div>
        </div>
        </body>
        </html>
        <?php
    }
//end of display method
}