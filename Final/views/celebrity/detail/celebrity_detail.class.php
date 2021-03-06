<?php
/*
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: 5/1/2020
 * Name: celebrity_view.class.php
 * Description: This class defines a method "display".
 *              The method accepts a Celebrity object and displays the details of the celebrity in a table.
 */

class CelebrityDetail extends CelebrityIndexView
{
    //object, array
    public function display($celebrity, $celebrity_dimensions)
    {
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

        ?>

        <div id="main-header"><h2 class="align-middle"><?= $first_name, " ", $last_name ?></h2>Web Presence Details
        </div>
        <hr>
        <div>

            <!-- display celebrity details in a table -->
            <table id="detail" style="margin-left: 1%">

                <div class="col-10 pr-0">
                    <div class="card-body">
                        <table class="staff-details-table" align='left' cellspacing="15" cellpadding="3">
                            <tr>
                                <td><h2>Celebrity Details</h2></td>
                            </tr>
                            <tr>
                                <td><b>Name:</td>
                                <td><?= $first_name, " ", $last_name ?></td>
                            </tr>
                            <tr>
                                <td><b>Gender:</td>
                                <td><?= $gender ?></td>
                            </tr>
                            <tr>
                                <td><b>Age:</td>
                                <td><?= $age ?></td>
                            </tr>
                            <tr>
                                <td><b>Web Presence:</td>
                                <td><?= $web_presence ?></td>
                            </tr>
                            <tr>
                                <td><b>Most Active:</td>
                                <td><?= $most_active ?></td>
                            </tr>
                            <tr>
                                <td><b>Post Frequency:</td>
                                <td><?= $post_frequency ?></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td><h2>Personality Details</h2></td>
                            </tr>
                            <?php
                            if ($celebrity_dimensions === 0) {
                                echo "No personality info avaliable!";
                            } else {
                                //key => value
                                foreach ($celebrity_dimensions as $i => $celebrity_dimension) {
                                    if ($celebrity_dimension == "0.00") {
                                        echo "<tr><td><strong>$i:</strong></td><td><strong></strong>N/A</td></tr>";
                                    } else {
                                        echo "<tr><td><strong>$i:</strong></td><td><strong></strong>$celebrity_dimension</td></tr>";
                                    }
                                }
                            }
                            ?>
                            <div id="button-group">
                                <button class="btn btn-primary" id="edit-button"
                                        onclick="window.location.href = '<?= BASE_URL ?>/celebrity/edit/<?= $celeb_id ?>'">
                                    Edit
                                </button>
                                <button class="btn btn-secondary"
                                        onclick="window.location.href= '<?= BASE_URL ?>/celebrity/index'">Go to
                                    celebrity list
                                </button>
                                <button class="btn btn-danger" id="delete-button"
                                        onclick="window.location.href = '<?= BASE_URL ?>/celebrity/delete/<?= $celeb_id ?>'">
                                    Delete
                                </button>
                            </div>
                        </table>
                    </div>
                </div>

                </td>
                </tr>
            </table>
        </div>
        <?php
    }
//end of display method
}
