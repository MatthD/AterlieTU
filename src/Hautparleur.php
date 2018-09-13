<?php 

namespace SampleTest;
/**
 * This class is a muste have at covivo 🤓
 */
class HautParleur
{
  private $sentence = '';

  // HP is waiting for a sentence when instanciate .. there is a default one too
  public function __construct($argument='biiiiiiip')
  {
    $this->sentence = strtoupper($argument);
  }

  public function __get($property)
  {
    if($property === 'sentence') {
      return $this->sentence;
    } else {
      throw new Exception('property not existing');
    }
  }
}

 ?>