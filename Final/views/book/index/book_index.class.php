<?php

/*
 * Author: Christopher Schilling
 * Date: 4, 15, 2020
 * Name: book_index.class.php
 * Description: This class defines a method called "display", which displays all books.
 */

class BookIndex extends BookIndexView
{
    /*
     * the display method accepts an array of book objects and displays
     * them in a grid.
     */

    public function display($books)
    {
        //display page header
        parent::displayHeader("List All books");
        ?>
        <div id="main-header"> Books in the Library</div>

        <div class="grid-container">
            <?php
            if ($books === 0) {
                echo "No book was found.<br><br><br><br><br>";
            } else {
                //display books in a grid; six books per row
                foreach ($books as $i => $book) {
                    $id = $book->getId();
                    $title = $book->getTitle();
                    $category = $book->getCategory();
                    $publish_date = new \DateTime($book->getPublish_date());
                    $image = $book->getImage();
                    if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                        $image = BASE_URL . "/" . BOOK_IMG . $image;
                    }
                    if ($i % 6 == 0) {
                        echo "<div class='row'>";
                    }

                    echo "<div class='col'><p><a href='", BASE_URL, "/book/detail/$id'><img src='" . $image .
                        "'></a><span>$title<br>Category $category<br>" . $publish_date->format('m-d-Y') . "</span></p></div>";
                    ?>
                    <?php
                    if ($i % 6 == 5 || $i == count($books) - 1) {
                        echo "</div>";
                    }
                }
            }
            ?>
        </div>

        <?php
        //display page footer
        parent::displayFooter();
    } //end of display method
}
