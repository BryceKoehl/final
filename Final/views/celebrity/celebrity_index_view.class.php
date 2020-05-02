<?php
/*
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: 5/1/2020
 * Name: celebrity_index_view.class.php
 * Description: the parent class that displays a search box.
 * The javascript varaiable media specifies the media type. This variable is needed for auto suggestion.
 */

class CelebrityIndexView extends IndexView
{

    public static function displayHeader($pageTitle)
    {
        parent::displayHeader("Celebrities");
        ?>
        <script>
            //the media type
            var media = "celebrity";
        </script>

        <?php
    }

    public static function displayFooter()
    {
        parent::displayFooter();
    }

}
