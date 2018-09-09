<?php
declare(strict_types=1);
require('./nombreMystere.php');
use PHPUnit\Framework\TestCase;


final class NombreMystereTest extends TestCase
{

  public function setUp(){
    $this->nombreMystere = new NombreMystere;
  }

  public function testNumberIsGreaterThanOrEqualTo0(){
    // $this->markTestSkipped();
    $this->assertGreaterThanOrEqual(0, $this->nombreMystere->getRandomNumber());
  }

  public function testNumberIsLessThanOrEqualTo9(){
    // $this->markTestSkipped();
    $this->assertLessThanOrEqual(9, $this->nombreMystere->getRandomNumber());
  }

  public function testNumberIsInt(){
    // $this->markTestSkipped();
    $this->assertInternalType('integer', $this->nombreMystere->getRandomNumber());
  }

  public function testClassHasAttribute(){
      // $this->markTestSkipped();
      $this->assertClassHasAttribute('tries', NombreMystere::class);
  }
  
  public function testUserInput(){
    //$this->markTestSkipped();
    $this->assertInternalType('boolean', $this->nombreMystere->play(5));
  }

  public function testUserInputIsSmallerThanNumber(){
    $this->markTestSkipped();
    $this->assertContains('Trop petit !', $this->nombreMystere->play(5));
  }

  public function testUserInputIsBiggerThanNumber(){
    $this->markTestSkipped();
    $this->assertContains('Trop grand !', $this->nombreMystere->play(5));
  }

  public function testNumberOfTries(){
    $this->markTestSkipped();
    $this->assertEquals(3, $this->nombreMystere->play(5));
  }
}
?>
