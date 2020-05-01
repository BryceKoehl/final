<?php

/*
 * Author:
 * Date:
 * File: config.php
 * Description: set application settings
 *
 */

//error reporting level: 0 to turn off all error reporting; E_ALL to report all
error_reporting(E_ALL);

//local time zone
date_default_timezone_set('America/New_York');

//base url of the application
define("BASE_URL", "http://localhost/i211_Group3/Final");

/*************************************************************************************
 *                       settings for celebritys                                         *
 ************************************************************************************/

//define default path for media images
define("CELEB_IMG", "www/img/celebrity/");


/*************************************************************************************
 *                       settings for personality's                                         *
 ************************************************************************************/

//define default path for media images
define("PERS_IMG", "www/img/personality/");