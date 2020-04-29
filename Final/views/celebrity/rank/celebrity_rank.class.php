<?php
/**
 * Author: "Ashley Nguyen"
 * Date: 4/28/2020
 * File: celebrity_rank.class.php
 * Description:
 */

class CelebrityRank extends CelebrityIndexView
{
    public function display($celeb_rankings)
    {
        //display page header
        parent::displayHeader("Celebrities Ranked by Extraversion");
        ?>

        <div id="main-header">Celebrities Ranked by Extraversion</div>
        <hr>
        <!-- display movie details in a table -->
        <?php
        if ($celeb_rankings === 0) {
            echo "No ranking info avaliable!";
        } else {
            //display movies in a grid; six movies per row
            foreach ($celeb_rankings as $i => $celeb_rankings) {
                $first_name = $celeb_rankings->getFirstName();
                $last_name = $celeb_rankings->getLastName();
                $freq = $celeb_rankings->getFrequency();

                echo "<p><strong>$first_name $last_name:</strong> $freq</p>";
            }
        }
        ?>
        <a href="<?= BASE_URL ?>/celebrity/index">Go to celebrity list</a>
        <?php
    }
//end of display method
}
