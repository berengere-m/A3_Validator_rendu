<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/11/2014
 * Time: 22:49
 */

namespace Tests\baybi\Validator;

use \baybi\Validator\IntegerValidator;

/**
 * Class IntegerValidatorTest
 * @package Tests\Steingate\Validator
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the generated integer is equal
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsEqual()
    {
        $int = mt_rand(0, 10);

        $bool = IntegerValidator::equal($int, $int);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated integer is  not equal
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsNotEqual()
    {
        $int = mt_rand(0, 10);

        $bool = IntegerValidator::equal($int, $int + 2);

        $this->assertFalse($bool);
    }
    /**
     * Test if the generated integer is superior
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsSuperior()
    {
        $high = mt_rand(10, 20);
        $low = mt_rand(1, 9);

        $bool = IntegerValidator::superior($high, $low);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated integer is not superior
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsNotSuperior()
    {
        $high = mt_rand(10, 20);
        $low = mt_rand(20, 30);

        $bool = IntegerValidator::superior($high, $low);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated integer is inferior
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsInferior()
    {
        $high = mt_rand(10, 20);
        $low = mt_rand(1, 9);

        $bool = IntegerValidator::inferior($low, $high);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated integer is not inferior
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsNotInferior()
    {
        $high = mt_rand(10, 20);
        $low = mt_rand(25, 30);

        $bool = IntegerValidator::inferior($low, $high);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated integer is inferior
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsBetween()
    {
        $int = mt_rand(10, 20);

        $bool = IntegerValidator::between($int, 1, 30);

        $this->assertTrue($bool);
    }

    /**
     * Test if the generated integer is inferior
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsNotBetween()
    {
        $int = mt_rand(10, 20);

        $bool = IntegerValidator::between($int, 25, 30);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated integer is negative
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsNegative()
    {
        $int = mt_rand(-20, -10);

        $bool = IntegerValidator::negative($int);

        $this->assertEquals($bool, true);
    }

    /**
     * Test if the generated integer is  not negative
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsNotNegative()
    {
        $int = mt_rand(20, 30);

        $bool = IntegerValidator::negative($int);

        $this->assertFalse($bool);
    }

    /**
     * Test if the generated integer is positive
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsPositive()
    {
        $int = mt_rand(10, 20);

        $bool = IntegerValidator::positive($int);

        $this->assertEquals($bool, true);
    }

    /**
     * Test if the generated integer is positive
     *
     * @throws \Exception
     */
    public function testGenerateLengthIsNotPositive()
    {
        $int = mt_rand(-10, -2);

        $bool = IntegerValidator::positive($int);

        $this->assertFalse($bool);
    }
}