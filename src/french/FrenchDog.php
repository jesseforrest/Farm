<?php
/**
 * This file holds the French Dog class
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

require_once dirname(__FILE__) . '/../Dog.php';

/**
 * This class handles the functionality for a dog
 *
 * @category  PHP
 * @package   Farm
 * @author    Jesse Forrest <jesseforrest@gmail.com>
 * @copyright 2013 Jesse Forrest
 * @license   https://github.com/jesseforrest/Farm License 1.0
 * @link      https://github.com/jesseforrest/Farm/wiki
 */
class FrenchDog extends Dog
{
   /**
    * Returns the name of the animal
    * 
    * @return string
    */
   public function getName()
   {
      return 'Chien';
   }
   
   /**
    * Returns the sound the animal makes
    *
    * @return string
    */
   public function getSound()
   {
      return 'Ouah';
   }
}
