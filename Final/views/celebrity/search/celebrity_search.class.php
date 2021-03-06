<?php
/*
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: 5/1/2020
 * Name: celebrity_search.class.php
 * Description: this script defines the celebritySearch class. The class contains a method named display, which
 *     accepts an array of Celebrity objects and displays them in a grid.
 */

class CelebritySearch extends CelebrityIndexView
{
    /*
     * the displays accepts an array of movie objects and displays
     * them in a grid.
     */

    public function display($terms, $celebs)
    {
        //display page header
        parent::displayHeader("Search Results");
        ?>
        <div id="main-header"> Search Results for <i><?= $terms ?></i></div>
        <span class="rcd-numbers"></span>
        <!-- display all records in a grid -->
        <div class="grid-container">
            <?php
            if ($celebs === 0) {
                echo "No celebrity was found.<br><br><br><br><br>";
            } else {
                //display celebrities in a grid
                foreach ($celebs as $i => $celeb) {
                    $celeb_id = $celeb->getCelebId();
                    $first_name = $celeb->getFirstName();
                    $last_name = $celeb->getLastName();
                    $images = $celeb->getImages();

                    if (strpos($images, "http://") === false and strpos($images, "https://") === false) {
                        $images = BASE_URL . "/" . CELEB_IMG . $images;
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
            }
            ?>
        </div>
        <a href="<?= BASE_URL ?>/celebrity/index">Go to Celebrity list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}