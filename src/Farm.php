<?php
/**
 * This file holds the Farm class
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

require_once 'Cow.php';
require_once 'Dog.php';
require_once 'Pig.php';

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
class Farm
{
   /**
    * Newline character
    * 
    * @var string
    */
   const NL = "\n";
   
   /**
    * Holds an array of animals on the farm
    * 
    * @var array|null
    */
   protected $animals;
   
   /**
    * Class constructor
    * 
    * @return void
    */
   public function __construct()
   {
      $this->animals = array(
         new Cow(),
         new Dog(),
         new Pig()
      );
   }
   
   /**
    * Returns name of the farm owner
    *  
    * @return string
    */
   protected function getOwner()
   {
      return 'Old MacDonald';
   }
   
   /**
    * Returns a verse of the song based on the passed in parameters
    * 
    * @param string $animalName  The name of the animal (e.g. Dog)
    * @param string $animalSound The sound the animal makes (e.g. Woof)
    * 
    * @return string Returns the verse
    */
   protected function getVerse($animalName, $animalSound)
   {
      $nl = self::NL;
      $owner = $this->getOwner();
      return ''
         . $owner . ' had a farm, Ee-i-ee-i-oh' . $nl
         . 'And on that farm he had a ' . $animalName . ', Ee-i-ee-i-oh' . $nl
         . 'With a ' . $animalSound . '-' . $animalSound . ' here,' . $nl
         . 'And a ' . $animalSound . '-' . $animalSound . ' there' . $nl
         . 'Here a ' . $animalSound . ', there a ' . $animalSound . ',' . $nl
         . 'Everywhere a ' . $animalSound . '-' . $animalSound . $nl . $nl;
   }
   
   /**
    * Returns song for the farm
    * 
    * @return string Returns a string with the song
    */
   public function sing()
   {
      $song = '';
      foreach ($this->animals as $animal)
      {
         $song .= $this->getVerse($animal->getName(), $animal->getSound());
      }
      return $song;
   }
}
