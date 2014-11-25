<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/11/2014
 * Time: 22:49
 */

namespace Tests\baybi\Validator;

use \baybi\Validator\StringValidator;

/**
 * Class StringValidatorTest
 * @package Tests\Steingate\Validator
 */
class StringValidatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the generated string is equal to a specific length
     *
     * @throws \Exception
     */
    public function testGenerateStringIsEqual()
    {
        $string = str_shuffle("4azdaazdqsdqéqsd78cdfpliok");
        $length = mb_strlen($string);

        $bool = StringValidator::lengthEqual($string, $length);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string is not equal to a specific length
     *
     * @throws \Exception
     */
    public function testGenerateStringIsNotEqual()
    {
        $string = str_shuffle("4azdaazdqsdqéqsd78cdfpliok");
        $length = mb_strlen($string);

        $bool = StringValidator::lengthEqual($string, $length - 10);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string is superior to a specific int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsSuperior()
    {
        $string = str_shuffle("4azdaazdqsdqéqsd78cdfpliok");

        $bool = StringValidator::lengthSuperior($string , 1);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string is not superior to a specific int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsNotSuperior()
    {
        $string = str_shuffle("4azdaazdqsdqéqsd78cdfpliok");

        $bool = StringValidator::lengthSuperior($string , 9999);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string is inferior to a specific int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsInferior()
    {
        $string = str_shuffle("4azdaazdqsdqéqsd78cdfpliok");
        $length = mb_strlen($string) + 10;

        $bool = StringValidator::lengthInferior($string , $length);

        $this->assertEquals($bool, true);
    }

    /**
     * Test if the generated string is not inferior to a specific int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsNotInferior()
    {
        $string = str_shuffle("4azdaazdqsdqéqsd78cdfpliok");
        $length = mb_strlen($string);

        $bool = StringValidator::lengthInferior($string , $length - 10);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string is between two specific int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsBetween()
    {
        $string = str_shuffle("4azdaazdqsdqéqsd78cdfpliok");
        $length = mb_strlen($string);

        $bool = StringValidator::lengthBetween($string , $length - 10, $length + 10);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string is not between two specific int
     *
     * @throws \Exception
     */
    public function testGenerateStringIsNotBetween()
    {
        $string = str_shuffle("4azdaazdqsdqéqsd78cdfpliok");
        $length = mb_strlen($string);

        $bool = StringValidator::lengthBetween($string , $length + 10, $length - 10);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string has white space ar the start or the end
     *
     * @throws \Exception
     */
    public function testGenerateStrignHasWhiteSpaceStartEnd()
    {
        $string = " 4azdaazdqsdqéqsd78cdfpliok ";

        $bool = StringValidator::hasWhiteSpaceBeforeEnd($string);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string has no white space ar the start or the end
     *
     * @throws \Exception
     */
    public function testGenerateStringHasNoWhiteSpaceStartEnd()
    {
        $string = "4azdaazdqsdqéqsd78cdfpliok";

        $bool = StringValidator::hasWhiteSpaceBeforeEnd($string);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated string has no whitespace
     *
     * @throws \Exception
     */
    public function testGenerateStringHasWhiteSpace()
    {
        $string = "4azdaazdq sdqé qsd78cdfp liok";

        $bool = StringValidator::hasWhiteSpace($string);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated string has no whitespace
     *
     * @throws \Exception
     */
    public function testGenerateStringHasNoWhiteSpace()
    {
        $string = "4azdaazdqsdqéqsd78cdfpiok";

        $bool = StringValidator::hasWhiteSpace($string);

        $this->assertFalse($bool);
    }
}