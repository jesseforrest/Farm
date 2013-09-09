<?php
/**
 * This file tests the Dog class
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

require_once dirname(__FILE__) . '/../src/Dog.php';

/**
 * This class handles the tests for a dog
 *
 * @category  PHP
 * @package   Farm
 * @author    Jesse Forrest <jesseforrest@gmail.com>
 * @copyright 2013 Jesse Forrest
 * @license   https://github.com/jesseforrest/Farm License 1.0
 * @link      https://github.com/jesseforrest/Farm/wiki
 */
class TestDog
{
   public function testGetName()
   {
      $dog = new Dog();
      if ($dog->getName() != "Dog")
      {
         return false;
      }
      return true;
   }
   
   public function testGetSound()
   {
      $dog = new Dog();
      if ($dog->getSound() != "Woof")
      {
         return false;
      }
      return true;
   }
}