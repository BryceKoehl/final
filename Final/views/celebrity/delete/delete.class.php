<?php
/**
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: 5/1/2020
 * File: delete.class.php
 * Descritption: confirms the deletion of a celebrity
 */

class Delete extends CelebrityIndexView
{
//object, array
    public function display($delete)
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <link rel='shortcut icon' href='<?= BASE_URL ?>/www/img/favicon.ico' type='image/x-icon'/>
            <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css'/>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                  crossorigin="anonymous">
            <script>
                //create the JavaScript variable for the base url
                var base_url = "<?= BASE_URL ?>";
            </script>
            <script type="text/javascript" src="<?= BASE_URL ?>/www/js/ajax_autosuggestion.js"></script>
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

        <br><br><br>
        <a class="btn btn-secondary" href="<?= BASE_URL ?>/celebrity/index" style="margin-left: 40%">Go to celebrity list</a>

        <?php
    }
//end of display method
}
