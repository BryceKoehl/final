<?php
/*
 * Author: Christopher Schilling
 * Date: 4 20, 2020
 * Name: personality_detail.class.php
 * Description: This class defines a method "display".
 * The method accepts a Personality object and displays the details of the celebrity in a table.
 */

class PersonalityDetail extends PesonalityIndexView {

    public function display($personality, $confirm = "") {
        //display page header
        parent::displayHeader("Personality Details");

        //retrieve personality details by calling get methods
       // $id = $personality->getId();
        $dim_id= $personality->getDimID();
        $dimension = $personality->getDimension();
        $qualities = $personality->getQualities();
        $description = $personality->getDescription();
        $keywords = $personality->getKeywords();

        if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
            $image = BASE_URL . '/' . Personality_IMG . $image;
        }
        ?>

        <div id="main-header">Personality Details</div>
        <hr>
        <!-- display personality details in a table -->
        <table id="detail">
            <tr>
                <td style="width: 150px;">
                    <img src="<?= $image ?>" alt="<?= $title ?>" />
                </td>
                <td style="width: 130px;">
                    <p><strong>ID:</strong></p>
                    <p><strong>Dimension:</strong></p>
                    <p><strong>Qualities:</strong></p>
                    <p><strong>Description:</strong></p>
                    <p><strong>Keywords:</strong></p>
                </td>
                <td>
                    <p><?= $dim_id ?></p>
                    <p><?= $dimension ?></p>
                    <p><?= $qualities ?></p>
                    <p><?= $description ?></p>
                    <p><?= $keywords ?></p>
                </td>
            </tr>
        </table>
        <a href="<?= BASE_URL ?>/personality/index">Go to Personality List</a>

        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}
