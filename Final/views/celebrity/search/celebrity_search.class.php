<?php
/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: search.class.php
 * Description: this script defines the SearchMovie class. The class contains a method named display, which
 *     accepts an array of Movie objects and displays them in a grid.
 */

class CelebritySearch extends CelebrityIndexView {
    /*
     * the displays accepts an array of movie objects and displays
     * them in a grid.
     */

     public function display($terms, $celebs) {
        //display page header
        parent::displayHeader("Search Results");
        ?>
        <div id="main-header"> Search Results for <i><?= $terms ?></i></div>
        <span class="rcd-numbers">
            <?php
            echo ((!is_array($celebs)) ? "( 0 - 0 )" : "( 1 - " . count($celebs) . " )");
            ?>
        </span>
        <hr>

       <!-- display all records in a grid -->
               <div class="grid-container">
            <?php
            if ($celebs === 0) {
                echo "No celebrity was found.<br><br><br><br><br>";
            } else {
                //display movies in a grid; six movies per row
                foreach ($celebs as $i => $celeb) {
                    $celeb_id = $celeb->getCelebId();
                    $first_name = $celeb->getFirstName();
                    $last_name = $celeb->getLastName();
                    $images = $celeb->getImages();

                    if (strpos($images, "http://") === false AND strpos($images, "https://")=== false) {
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