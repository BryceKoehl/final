<?php

/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: movie_index.class.php
 * Description: This class defines a method called "display", which displays all movies.
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
                    <form style="margin-left: 40%; margin-right: 45%" method="get" action="<?= BASE_URL ?>/celebrity/search">
                        <input type="text" class="form-control" id="searchtextbox" name="query-terms"
                               placeholder="Search by first and last name"
                               autocomplete="off" onkeyup="handleKeyUp(event)" style="justify-content: center">
                        <button style="float: right; margin-top: -12% " type="submit" class="btn btn-primary">Go
                        </button>
                    </form>

                <div id="suggestionDiv"></div>

            <div id="button-group" style="align-content: center; margin-top: 1%">
                <input class="btn btn-secondary" type="button" id="edit-button" value="   Add New Celebrity Profile   "
                       onclick="window.location.href = '<?= BASE_URL ?>/celebrity/goToAdd'">&nbsp;
            </div>
            </div>
        </div>
        <div class="grid-container">
        <?php
        if ($celebs === 0) {
            echo "No celeb was found.<br><br><br><br><br>";
        } else {
            //display movies in a grid; six movies per row
            foreach ($celebs as $i => $celeb) {
                $celeb_id = $celeb->getCelebId();
                $first_name = $celeb->getFirstName();
                $last_name = $celeb->getLastName();
                $images = $celeb->getImages();

                if (strpos($images, "http://") === false AND strpos($images, "https://") === false) {
                    $images = BASE_URL . "/" . CELEB_IMG . $images;
                }

                if (strpos($celeb_id, "http://") === false AND strpos($celeb_id, "https://") === false) {
                    $celeb_id = $i + 1;
                }

                if ($i % 6 == 0) {
                    echo "<div class='row'>";
                }

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
