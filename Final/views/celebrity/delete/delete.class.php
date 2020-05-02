<?php
/**
 * Author: Christopher Schilling, Ashley Nguyen, Bryce Koehl
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

        <a href="<?= BASE_URL ?>/celebrity/index" style="margin-left: 40%">Go to celebrity list</a>

        <?php
    }
//end of display method
}
