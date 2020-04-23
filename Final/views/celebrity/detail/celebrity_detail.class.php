<?php
/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: movie_view.class.php
 * Description: This class defines a method "display".
 *              The method accepts a Movie object and displays the details of the movie in a table.
 */

class CelebrityDetail extends CelebrityIndexView {

    public function display($celebrity, $confirm = "") {
        //display page header
        parent::displayHeader("Celebrity Details");

        //retrieve movie details by calling get methods
        $celeb_id = $celebrity->getCelebId();
        $first_name = $celebrity->getFirstName();
        $last_name = $celebrity->getLastName();

        if (strpos($celeb_id, "http://") === false AND strpos($celeb_id, "https://") === false) {
            $celeb_id = BASE_URL . '/' . CELEB_IMG . $celeb_id;
        }
        ?>

        <div id="main-header">Celebrity Details</div>
        <hr>
        <!-- display movie details in a table -->
        <table id="detail">
            <tr>
                <td style="width: 150px;">
                    <img src="<?= $first_name ?>" alt="<?= $first_name ?>" />
                </td>
                <td style="width: 130px;">
                    <p><strong>Name:</strong></p>
<!--                    <div id="button-group">
                        <input type="button" id="edit-button" value="   Edit   "
                               onclick="window.location.href = '<?/*= BASE_URL */?>/celebrity/edit/<?/*= $celeb_id */?>'">&nbsp;
                    </div>-->
                </td>
                <td>
                    <p><?= $first_name, $last_name ?></p>
                    <div id="confirm-message"><?= $confirm ?></div>
                </td>
            </tr>
        </table>
        <a href="<?= BASE_URL ?>/celebrity/index">Go to movie list</a>

        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}
