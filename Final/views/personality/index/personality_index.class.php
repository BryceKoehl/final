<?php

/*
 * Author: Christopher Schilling
 * Date: 4 20, 2020
 * Name: personality_index.class.php
 * Description: This class defines a method called "display", which displays all personalitys.
 */

class PersonalityIndex extends PersonalityIndexView
{
    /*
     * the display method accepts an array of personality objects and displays
     * them in a grid.
     */

    public function display($personalities)
    {
        //display page header
        parent::displayHeader("List All Personality Dimensions");
        ?>
        <div id="main-header"> Click to learn about each Personality Dimension!</div>

        <div class="grid-container">
        <?php
        if ($personalities === 0) {
            echo "No personality dimension was found.<br><br><br><br><br>";
        } else {
            //display personalities in a grid; six personalitys per row
            foreach ($personalities as $i => $personality) {
                $dim_id = $personality->getDimId();
                $dimension = $personality->getDimension();
                $qualities = $personality->getQualities();
                $description = $personality->getDescription();
                $image = $personality->getImage();
                if (strpos($dim_id, "http://") === false and strpos($dim_id, "https://") === false) {
                    $dim_id = $i + 1;
                }
                if ($i % 6 == 0) {
                    echo "<div class='row'>";
                }

                echo "<div class='col'><p><a href='", BASE_URL, "/personality/detail/$dim_id'><img src='" . $image . $dim_id .
                    "'></a><span>$dimension</span></p></div>";
                ?>
                <?php
                if ($i % 6 == 5 || $i == count($personalities) - 1) {
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
}
