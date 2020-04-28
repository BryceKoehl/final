<?php
/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: movie_view.class.php
 * Description: This class defines a method "display".
 *              The method accepts a Movie object and displays the details of the movie in a table.
 */

class CelebrityDetail extends CelebrityIndexView {

    public function display($celebrity, $celebrity_dimension) { //$pers
        //display page header
        parent::displayHeader("Celebrity Details");

        //retrieve celebrity details by calling get methods
        $celeb_id = $celebrity->getCelebId();
        $first_name = $celebrity->getFirstName();
        $last_name = $celebrity->getLastName();
        $gender = $celebrity->getGender();
        $age = $celebrity->getAge();
        $web_presence = $celebrity->getWebPresence();
        $most_active = $celebrity->getMostActive();
        $post_frequency = $celebrity->getPostFrequency();

  /*      if (strpos($celeb_id, "http://") === false AND strpos($celeb_id, "https://") === false) {
            $celeb_id = BASE_URL . '/' . CELEB_IMG . $celeb_id;
        }*/
        ?>

        <div id="main-header"><?=$first_name, " ", $last_name, " "; ?>Web Presence Details</div>
        <hr>
        <!-- display movie details in a table -->
        <table id="detail">
            <tr>
<!--                <td style="width: 150px;">
                    <img src="<?/*= $first_name */?>" alt="<?/*= $first_name */?>" />
                </td>-->
                <td style="width: 130px;">
                    <p><strong>Name:</strong></p>
                    <p><strong>Gender:</strong></p>
                    <p><strong>Age:</strong></p>
                    <p><strong>Web Presence:</strong></p>
                    <p><strong>Most Active:</strong></p>
                    <p><strong>Post Frequency:</strong></p>
                    <br>
                    <p><strong>Personality Info:</strong></p>
                    <br>
                    <div id="button-group">
                        <input type="button" id="edit-button" value="   Edit   "
                               onclick="window.location.href = '<?=BASE_URL ?>/celebrity/edit/<?= $celeb_id?>'">&nbsp;
                    </div>
                </td>
                <td>
                    <p><?= $first_name, " ", $last_name ?>
                    <p><?= $gender ?></p>
                    <p><?= $age ?></p>
                    <p><?= $web_presence ?></p>
                    <p><?= $most_active ?></p>
                    <p><?= $post_frequency ?></p>
                    <?php
                    if ($celebrity_dimension === 0) {
                        echo "No personality info avaliable!";
                    } else {
                        //display movies in a grid; six movies per row
                        foreach ($celebrity_dimension as $i => $celebrity_dimension) {
                            $dim = $celebrity_dimension->getDimension();
                            $freq = $celebrity_dimension->getFrequency();

                            echo "<p><strong>$dim:</strong> $freq</p>";
                        }
                    }
                    ?>
                    <br><br>
                </td>
            </tr>
        </table>

<!--        <table id="personality_detail">
            <tr>
                <h3>Personality Details</h3><br>
                <td style="width: 130px;">
                    <p><strong>Extroversion:<?/*/*= $dimension, $frequency */?></strong></p>
                    <p><strong>Agreeableness: <?/*/*= $dimension, $frequency */?></strong></p>
                    <p><strong>Conscientiousness: <?/*/*= $dimension, $frequency */?></strong></p>
                    <p><strong>Neuroticism: <?/*/*= $dimension, $frequency */?></strong></p>
                    <p><strong>Openness: <?/*/*= $dimension, $frequency */?></strong></p>
                </td>
                <td>
                    <p><?/*/* */?></p>
                    <p><?/*/* */?></p>
                    <p><?/*/* */?></p>
                    <p><?/*/* */?></p>
                    <p><?/*/* */?></p>
                    <p><?/*/* */?></p><br><br>
                </td>
            </tr>
        </table>-->

        <br>
        <a href="<?= BASE_URL ?>/celebrity/index">Go to celebrity list</a>

        <?php
    }
//end of display method
}
