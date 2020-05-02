<?php

/*
 * Author: Christopher Schilling
 * Date:  4, 20, 2020
 * File: personality_error.class.php
 *
 */

class PersonalityError extends PersonalityIndexView
{

    public function display($message)
    {

        //display page header
        parent::displayHeader("Error");
        ?>

        <div id="main-header">Error</div>
        <hr>
        <table style="width: 100%; border: none">
            <tr>
                <td style="vertical-align: middle; text-align: center; width:100px">
                    <img src='<?= BASE_URL ?>/www/img/error.jpg' style="width: 80px; border: none"/>
                </td>
                <td style="text-align: left; vertical-align: top;">
                    <h3> Sorry, but an error has occurred.</h3>
                    <div style="color: red">
                        <?= urldecode($message) ?>
                    </div>
                    <br>
                </td>
            </tr>
        </table>
        <br><br><br><br>
        <hr>
        <a href="<?= BASE_URL ?>/personality/index">Back to Personality Dimension List</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

}
