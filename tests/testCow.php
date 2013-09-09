<?php
/**
 * This file tests the Cow class
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

require_once dirname(__FILE__) . '/../src/Cow.php';

/**
 * This class handles the tests for a cow
 *
 * @category  PHP
 * @package   Farm
 * @author    Jesse Forrest <jesseforrest@gmail.com>
 * @copyright 2013 Jesse Forrest
 * @license   https://github.com/jesseforrest/Farm License 1.0
 * @link      https://github.com/jesseforrest/Farm/wiki
 */
class TestCow
{
   public function testGetName()
   {
      $cow = new Cow();
      if ($cow->getName() != "Cow")
      {
         return false;
      }
      return true;
   }
   
   public function testGetSound()
   {
      $cow = new Cow();
      if ($cow->getSound() != "Moo")
      {
         return false;
      }
      return true;
   }
}