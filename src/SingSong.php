<?php
/**
 * This script sings the songs
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Farm
 * @author    Jesse Forrest <jesseforrest@gmail.com>
 * @copyright 2013 Jesse Forrest
 * @license   https://github.com/jesseforrest/Farm License 1.0
 * @link      https://github.com/jesseforrest/Farm/wiki
 */

require_once 'Farm.php';
require_once './french/FrenchFarm.php';

$englishFarm = new Farm();
echo $englishFarm->sing();

$frenchFarm = new FrenchFarm();
echo $frenchFarm->sing();