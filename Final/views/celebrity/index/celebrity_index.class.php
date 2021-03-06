<?php

/*
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: 5/1/2020
 * Name: celebrity_index.class.php
 * Description: This class defines a method called "display", which displays all celebrities.
 */

class CelebrityIndex extends CelebrityIndexView
{
    /*
     * the display method accepts an array of movie objects and displays
     * them in a grid.
     */

    public function display($celebs)
    {
        //display page header
        parent::displayHeader("List All Celebrities");
        ?>
        <div id="main-header" align="center" style="width: 100%;">Click on any celebrity profile to learn more!</div>
        <br>
        <div>
            <!--create the search bar -->
            <div id="searchbar" style="align-content: center">
                <form style="margin-left: 40%; margin-right: 45%" method="get"
                      action="<?= BASE_URL ?>/celebrity/search">
                    <input type="text" class="form-control" id="searchtextbox" name="query-terms"
                           placeholder="Search by first and last name"
                           autocomplete="off" onkeyup="handleKeyUp(event)" style="justify-content: center">
                    <button style="float: right; margin-top: -12% " type="submit" class="btn btn-primary">Go
                    </button>
                </form>

                <div id="suggestionDiv"></div>

                <div id="button-group" style="align-content: center; margin-top: 1%">
                    <button class="btn btn-secondary" id="edit-button"
                            onclick="window.location.href = '<?= BASE_URL ?>/celebrity/goToAdd'">&nbsp;Add New Celebrity Profile</button>
                </div>
            </div>
        </div>
        <div class="grid-container">
        <?php
        if ($celebs === 0) {
            echo "No celeb was found.<br><br><br><br><br>";
        } else {
            //display celebrities in a grid
            foreach ($celebs as $i => $celeb) {
                $celeb_id = $celeb->getCelebId();
                $first_name = $celeb->getFirstName();
                $last_name = $celeb->getLastName();
                $images = $celeb->getImages();

                //logic for grabbing the correct image file path
                if (strpos($images, "http://") === false and strpos($images, "https://") === false) {
                    $images = BASE_URL . "/" . CELEB_IMG . $images;
                }

                if ($i % 6 == 0) {
                    echo "<div class='row'>";
                }

                //displays each celebrity in database with respective image
                echo "<div class='col'><p><a href='", BASE_URL, "/celebrity/detail/$celeb_id'><img src='$images'></a><span>$first_name<br>$last_name<br></span></p></div>";
                ?>
                <?php
                if ($i % 6 == 5 || $i == count($celebs) - 1) {
                    echo "</div>";
                }
            }

            ?>
            </div>

            <?php
        } //end of display method
    }
}
