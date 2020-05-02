<?php
/*
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: 5/1/2020
 * Name: personality_index_view.class.php
 * Description: the parent class that displays a search box. The search form is commented out here since the search feature is not implemented.
 */

class PersonalityIndexView extends IndexView
{

    public static function displayHeader($dimension)
    {
        parent::displayHeader($dimension)
        ?>
        <script>
            //the media type
            var media = "personality";
        </script>

        <?php
    }

    public static function displayFooter()
    {
        parent::displayFooter();
    }
}
