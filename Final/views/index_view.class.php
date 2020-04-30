<?php
/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: index_view.class.php
 * Description: the parent class for all view classes. The two functions display page header and footer.
 */

class IndexView {

    //this method displays the page header
    static public function displayHeader($pageTitle) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title> <?php echo $pageTitle ?> </title>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <link rel='shortcut icon' href='<?= BASE_URL ?>/www/img/favicon.ico' type='image/x-icon' />
                <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css' />
                <script>
                    //create the JavaScript variable for the base url
                    var base_url = "<?= BASE_URL ?>";
                </script>
            </head>
            <body>
                <!-- <div id="top"></div> -->
                <div id='wrapper'>
                    <div id="banner">
                        <a href="<?= BASE_URL ?>/index.php" style="text-decoration: none" title="Celebrity Web Presence Data">
                            <div align="center" style="padding-top: 25px;">
                                <!-- <img src='<?= BASE_URL ?>/www/img/logo.png' style="width: 180px; border: none" /> -->
                                <span style='color: antiquewhite; font-size: 30pt; font-family: "Trebuchet MS", Helvetica, sans-serif'>
                                    🌟 Celebrity Web Data Showcase 🌟
                                </span>
                            </div>
                        </a>
                    </div>
                    <?php
                }//end of displayHeader function

                //this method displays the page footer
                public static function displayFooter() {
                    ?>
                    <br><br><br>
                    <div id="push"></div>
                </div>
                <!-- <div id="footer"><br>I211 Final Project Spring 2020</div> -->
                <script type="text/javascript" src="<?= BASE_URL ?>/www/js/ajax_autosuggestion.js"></script>
            </body>
        </html>
        <?php
    } //end of displayFooter function
}
