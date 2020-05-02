<?php
/**
 * Author: "Christopher Schilling"
 * Date: $(date)
 * File: $(FILE_NAME)
 * Descritption:
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
