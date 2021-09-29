<?php

require '../functions.php';

use PHPUNIT\Framework\TestCase;

class functions extends TestCase
{
    public function testGetImagePathReturnsPlaceholderGivenEmptyString() {
        //arrange
        $input = "";
        $expected = 'https://hotemoji.com/images/dl/n/roller-coaster-emoji-by-google.png';

        //act
        $result = getImagePath($input);

        //assert
        $this->assertEquals($expected, $result);
    }

    public function testGetImagePathReturnsPlaceholderGivenImageFilename() {
        //arrange
        $input = "nemesis.jpeg";
        $expected = 'images/nemesis.jpeg';

        //act
        $result = getImagePath($input);

        //assert
        $this->assertEquals($expected, $result);
    }

    public function testGetImagePathReturnsPlaceholderGivenImageLink() {
        //arrange
        $input = "https://images.emojiterra.com/google/android-pie/512px/1f3a2.png";
        $expected = "https://images.emojiterra.com/google/android-pie/512px/1f3a2.png";

        //act
        $result = getImagePath($input);

        //assert
        $this->assertEquals($expected, $result);
    }

    public function testDisplayCoasterNemesis() {
        //arrange
        $input = ['name'=>'Nemesis', 'park'=>'Alton', 'img'=>'nemesis.jpeg', 'height'=>3.5, 'inversions'=>1];
        $expected = "<div class='coasterCard'>";
        $expected .= "<div class='namelocation'><h3>Nemesis</h3>";
        $expected .= "<p class='parkname'>Alton</p></div>";
        $expected .= '<img class="coasterimg" src="images/nemesis.jpeg" alt="Picture of Nemesis">';
        $expected .= "<div class='heightinversion'><p>Ride height: 3.5m</p>";
        $expected .= "<p>Total inversions: 1</p></div>";
        $expected .= "</div>";;

        //act
        $result = displayCoaster([$input]);

        //assert
        $this->assertEquals($expected, $result);
    }

    public function testDisplayCoasterEmptyArray() {
        //arrange
        $input = [];
        $expected = "";

        //act
        $result = displayCoaster($input);

        //assert
        $this->assertEquals($expected, $result);
    }

    public function testDisplayCoasterMalformed() {
        //arrange
        $input = 746648.837;
        $this->expectException(TypeError::class);

        //act
        $result = displayCoaster($input);

        //assert
    }
}