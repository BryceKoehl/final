<?php
/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: movie_index.class.php
 * Description: This class defines a method called "display", which displays all movies.
 */
class CelebrityIndex extends CelebrityIndexView {
    /*
     * the display method accepts an array of movie objects and displays
     * them in a grid.
     */

    public function display($celebs) {
        //display page header
        parent::displayHeader("List All Celebrities");
        ?>
        <div id="main-header">Celebritiy Web Presence</div>

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
                   // $rating = $movie->getRating();
                    //$release_date = new \DateTime($movie->getRelease_date());
                    //$image = $movie->getImage();
                    //if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                     //   $image = BASE_URL . "/" . MOVIE_IMG . $image;
                    }
                    if ($i % 6 == 0) {
                        echo "<div class='row'>";
                    }
                    echo "<div class='col'><p><a href='", BASE_URL, "/celebrity/detail/$celeb_id'> . </a><span>$first_name<br>Last Name $last_name<br>" .  "</span></p></div>";
                    ?>
                    <?php
                    if ($i % 6 == 5 || $i == count($celebs) - 1) {
                        echo "</div>";
                    }
                }

            ?>
        </div>

        <?php
        //display page footer
        parent::displayFooter();
    } //end of display method
}
