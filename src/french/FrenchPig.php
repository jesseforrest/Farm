<?php
/**
 * This file holds the French Pig class
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

require_once dirname(__FILE__) . '/../Pig.php';

/**
 * This class handles the functionality for a pig
 *
 * @category  PHP
 * @package   Farm
 * @author    Jesse Forrest <jesseforrest@gmail.com>
 * @copyright 2013 Jesse Forrest
 * @license   https://github.com/jesseforrest/Farm License 1.0
 * @link      https://github.com/jesseforrest/Farm/wiki
 */
class FrenchPig extends Pig
{
   /**
    * Returns the name of the animal
    * 
    * @return string
    */
   public function getName()
   {
      return 'Cochon';
   }
   
   /**
    * Returns the sound the animal makes
    *
    * @return string
    */
   public function getSound()
   {
      return 'Groin';
   }
}
