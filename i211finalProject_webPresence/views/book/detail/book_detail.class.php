<?php
/**
 * Author: "Ashley Nguyen"
 * Date: 4/12/2020
 * File: book_detail.class.php
 * Description: This class defines a method "display".
 *              The method accepts a Movie object and displays the details of the movie in a table.
 */

class BookDetail extends BookIndexView
{
    public function display($book, $confirm = "") {
        //display page header
        parent::displayHeader("Book Details");

        //retrieve book details by calling get methods
        $id = $book->getId();
        $title = $book->getTitle();
        $isbn = $book->getIsbn();
        $category = $book->getCategory();
        $publish_date = new \DateTime($book->getPublish_date());
        $publisher = $book->getPublisher();
        $description = $book->getDescription();
        $image = $book->getImage();

        if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
            $image = BASE_URL . '/' . BOOK_IMG . $image;
        }
        ?>

        <div id="main-header">Book Details</div>
        <hr>
        <!-- display book details in a table -->
        <table id="detail">
            <tr>
                <td style="width: 150px;">
                    <img src="<?= $image ?>" alt="<?= $title ?>" />
                </td>
                <td style="width: 130px;">
                    <p><strong>Title:</strong></p>
                    <p><strong>ISBN:</strong></p>
                    <p><strong>Category:</strong></p>
                    <p><strong>Publish Date:</strong></p>
                    <p><strong>Publisher:</strong></p>
                    <p><strong>Description:</strong></p>
 <!--                   <div id="button-group">
                        <input type="button" id="edit-button" value="   Edit   "
                               onclick="window.location.href = '<?/*= BASE_URL */?>/book/edit/<?/*= $id */?>'">&nbsp;
                    </div>-->
                </td>
                <td>
                    <p><?= $title ?></p>
                    <p><?= $isbn ?></p>
                    <p><?= $category ?></p>
                    <p><?= $publish_date->format('m-d-Y') ?></p>
                    <p><?= $publisher ?></p>
                    <p class="media-description"><?= $description ?></p>
                    <div id="confirm-message"><?= $confirm ?></div>
                </td>
            </tr>
        </table>
        <a href="<?= BASE_URL ?>/book/index">Go to book list</a>

        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method

}