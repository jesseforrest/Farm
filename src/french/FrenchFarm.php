<?php
/**
 * This file holds the French Farm class
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


require_once dirname(__FILE__) . '/../Farm.php';
require_once 'FrenchCow.php';
require_once 'FrenchDog.php';
require_once 'FrenchPig.php';

/**
 * This class handles the functionality for the Farm
 *
 * @category  PHP
 * @package   Farm
 * @author    Jesse Forrest <jesseforrest@gmail.com>
 * @copyright 2013 Jesse Forrest
 * @license   https://github.com/jesseforrest/Farm License 1.0
 * @link      https://github.com/jesseforrest/Farm/wiki
 */
class FrenchFarm extends Farm
{
   /**
    * Class constructor
    * 
    * @return void
    */
   public function __construct()
   {
      $this->animals = array(
         new FrenchCow(),
         new FrenchDog(),
         new FrenchPig()
      );
   }
   
   /**
    * Returns name of the farm owner
    *  
    * @return string
    */
   protected function getOwner()
   {
      return 'Vieux Maturin';
   }
}
