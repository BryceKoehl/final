<?php
/*
 * Author: Louie Zhu
 * Date: Mar. 30, 2016
 * Name: personality_index_view.class.php
 * Description: the parent class that displays a search box. The search form is commented out here since the search feature is not implemented.
 */

class PersonalityIndexView extends IndexView {

    public static function displayHeader($dimension) {
        parent::displayHeader($dimension)
        ?>
        <script>
            //the media type
            var media = "personality";
        </script>
        <!--create the search bar -->
        <!--
        <div id="searchbar">
            <form method="get" action="<?= BASE_URL ?>/personality/search">
                <input type="text" name="query-terms" id="searchtextbox" placeholder="Search personalitys by title" autocomplete="off">
                <input type="submit" value="Go"/>
            </form>
            <div id="suggestionDiv"></div>
        </div> -->
        <?php
    }

    public static function displayFooter() {
        parent::displayFooter();
    }
}
