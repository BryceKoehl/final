<?php
/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: index.class.php
 * Description: This class defines the method "display" that displays the home page.
 */

class WelcomeIndex extends IndexView {

    public function display() {
        //display page header
        parent::displayHeader("Celebrity Web Presence Data Home");
        ?>
        <br><br>
        <div align = "center">
        <p style="font-size: 16px; font-family: 'Trebuchet MS', Helvetica, sans-serif; width: 80%">
            Welcome! For our INFO 211 final project, we want to showcase data collected and analyzed
            by students in INFO I202 Social Informatics and INFO I421 Applications of Data Mining. In
            INFO I202, students studied web presence data through web crawling and scanning for digital
            footprints. After collecting social media posts and web presence data of around 50 famous
            people, students in INFO I421 applied data mining techniques and tools to analyze this
            digital footprint data and to discover patterns related to their behaviors as digital citizens.
            I421 students are using this data to find the frequencies of certain words in famous people’s
            posts in order to categorize each person’s personality by dimensions including extraversion,
            agreeableness, conscientiousness, neuroticism, and openness. Currently, the three courses -
            INFO 202, INFO 211, and INFO 421 - run separately and independently with seemingly no connections.
            Therefore, our intention with our final project is to bridge the learning of the three courses
            with signature projects. Our role in I211 is to create a MVC system that easily displays this
            collection of data in a format that is accessible and easy for the users to understand. Since a
            program like this designed for these specific classes doesn’t exist, we will be filling the niche
            with our application. Click the links below to explore our research data for celebrities and their
            personality dimensions!
        </p> </div>

        <div id="thumbnails" style="text-align: center;">
            <a href="<?= BASE_URL ?>/celebrity/index">
                <img src="<?= BASE_URL ?>/www/img/download1.jpg" title="Celebrity Data" height="150px" width="150px"/>
            </a>
            <a href="<?= BASE_URL ?>/personality/index">
                <img src="<?= BASE_URL ?>/www/img/download.jpg" title="Personality Data" height="150px" width="150px"/>
            </a>
        </div>
        <?php
        //display page footer
        parent::displayFooter();
    }

}
