<?php
/*
 * Author: Ashley, Chris, Bryce, Maimouna
 * Date: April 19 2020
 * File: celebrity_edit.class.php
 * Description: the display method in the class displays celebrity details in a form.
 *
 */
class CelebrityEdit extends CelebrityIndexView {

    public function display($celebrity) {
        //display page header
        parent::displayHeader("Edit Celebrity");

        //get celebrity personality_dimension from a session variable
        if (isset($_SESSION['personality_dimension'])) {
            $ratings = $_SESSION['personality_dimension'];
        }

        //retrieve celebrity details by calling get methods
        $firstname= $celebrity->getFirstname();
        $title = $celebrity->getLastname();
        $rating = $movie->getRating();
        $release_date = $movie->getRelease_date();
        $director = $movie->getDirector();
        $image = $movie->getImage();
        $description = $movie->getDescription();
        ?>

        <div id="main-header">Edit Celebrity Details</div>

        <!-- display movie details in a form -->
        <form class="new-media"  action='<?= BASE_URL . "/movie/update/" . $id ?>' method="post" style="border: 1px solid #bbb; margin-top: 10px; padding: 10px;">
          <input type="hidden" name="id" value="<?= $id ?>">
            <p><strong>Title</strong><br>
                <input name="title" type="text" size="100" value="<?= $title ?>" required autofocus></p>
            <p><strong>Personality Dimension</strong>:
                <?php
                foreach ($personality_dimension as $p_dimension => $m_id) {
                    $checked = ($rating == $m_rating ) ? "checked" : "";
                    echo "<input type='radio' name='rating' value='$m_id' $checked> $m_rating &nbsp;&nbsp;";
                }
                ?>
            </p>
            <p><strong>Release Date</strong>: <input name="release_date" type="date" value="<?= $release_date ?>" required=""></p>
            <p><strong>Directors</strong>: Separate directors with commas<br>
                <input name="director" type="text" size="40" value="<?= $director ?>" required=""></p>
            <p><strong>Image</strong>: url (http:// or https://) or local file including path and file extension<br>
                <input name="image" type="text" size="100" required value="<?= $image ?>"></p>
            <p><strong>Description</strong>:<br>
                <textarea name="description" rows="8" cols="100"><?= $description ?></textarea></p>
            <input type="submit" name="action" value="Update Movie">
            <input type="button" value="Cancel" onclick='window.location.href = "<?= BASE_URL . "/movie/detail/" . $id ?>"'>
        </form>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}
