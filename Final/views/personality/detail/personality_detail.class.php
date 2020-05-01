<?php
/*
 * Author: Christopher Schilling
 * Date: 4 20, 2020
 * Name: personality_detail.class.php
 * Description: This class defines a method "display".
 * The method accepts a Personality object and displays the details of the celebrity in a table.
 */

class PersonalityDetail extends PersonalityIndexView
{

    public function display($personality, $confirm = "")
    {
        //display page header
        parent::displayHeader("Personality Details");

        //retrieve personality details by calling get methods
        $dim_id = $personality->getDimID();
        $dimension = $personality->getDimension();
        $qualities = $personality->getQualities();
        $description = $personality->getDescription();
        $keywords = $personality->getKeywords();

        if (strpos($dim_id, "http://") === false AND strpos($dim_id, "https://") === false) {
            $image = BASE_URL . '/' . $dim_id;
        }
        ?>


        <div id="main-header"><h2 class="align-middle"></h2><?= $dimension ?> Personality Details</div>
        <hr>

        <div class="col-10 pr-0">
            <div class="card-body">
                <table class="staff-details-table" align='left' cellspacing="15" cellpadding="3">
                    <tr>
                        <td><b>Dimension:</td>
                        <td><?= $dimension ?></td>
                    </tr>
                    <tr>
                        <td><b>Qualities:</td>
                        <td><?= $qualities ?></td>
                    </tr>
                    <tr>
                        <td><b>Description:</td>
                        <td><?= $description ?></td>
                    </tr>
                    <tr>
                        <td><b>Keywords:</td>
                        <td><?= $keywords ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <br>

        <div>
            <a class="btn btn-secondary" href="<?= BASE_URL ?>/personality/index">Go to Personality List</a>
        </div>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}
