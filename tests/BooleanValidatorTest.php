<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/11/2014
 * Time: 22:49
 */

namespace Tests\baybi\Validator;

use baybi\Validator\BooleanValidator;

/**
 * Class BooleanValidatorTest
 * @package Tests\baybi\Validator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the boolean is true
     *
     * @throws \Exception
     */
    public function testIsTrue()
    {
        $bool = BooleanValidator::isTrue(true);

        $this->assertTrue($bool);
    }

    /**
     * Test if the boolean is not true
     *
     * @throws \Exception
     */
    public function testIsNotTrue()
    {
        $bool = BooleanValidator::isTrue(false);

        $this->assertFalse($bool);
    }

    /**
     * Test if the boolean is false
     *
     * @throws \Exception
     */
    public function testIsFalse()
    {
        $bool = BooleanValidator::isFalse(false);

        $this->assertTrue($bool);
    }

    /**
     * Test if the boolean is not false
     *
     * @throws \Exception
     */
    public function testIsNotFalse()
    {
        $bool = BooleanValidator::isFalse(true);

        $this->assertFalse($bool);
    }
}