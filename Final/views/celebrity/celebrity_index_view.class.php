<?php
/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: celebrity_index_view.class.php
 * Description: the parent class that displays a search box.
 * The javascript varaiable media specifies the media type. This variable is needed for auto suggestion.
 */

class CelebrityIndexView extends IndexView {

    public static function displayHeader($pageTitle) {
        parent::displayHeader("Celebrities");
        ?>
        <script>
            //the media type
            var media = "celebrity";
        </script>
      <!--
        <div id="searchbar" style="align-content left">
            <form method="get" action="<?/*= BASE_URL */?>/celebrity/search">
                <input type="text" name="query-terms" id="searchtextbox" placeholder="Search by first and last name" autocomplete="off" onkeyup="handleKeyUp(event)">
                <input type="submit" value="Go" />
            </form>
            <div id="suggestionDiv"></div>
        </div>-->
        <?php
    }

    public static function displayFooter() {
        parent::displayFooter();
    }

}
