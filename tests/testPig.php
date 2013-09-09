<?php
/**
 * This file tests the Pig class
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

require_once dirname(__FILE__) . '/../src/Pig.php';

/**
 * This class handles the tests for a pig
 *
 * @category  PHP
 * @package   Farm
 * @author    Jesse Forrest <jesseforrest@gmail.com>
 * @copyright 2013 Jesse Forrest
 * @license   https://github.com/jesseforrest/Farm License 1.0
 * @link      https://github.com/jesseforrest/Farm/wiki
 */
class TestPig
{
   public function testGetName()
   {
      $pig = new Pig();
      if ($pig->getName() != "Pig")
      {
         return false;
      }
      return true;
   }
   
   public function testGetSound()
   {
      $pig = new Pig();
      if ($pig->getSound() != "Oink")
      {
         return false;
      }
      return true;
   }
}