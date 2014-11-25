<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/11/2014
 * Time: 19:10
 */

namespace baybi\Validator;

/**
 * Class BooleanValidator
 * @package Steingate\Validator
 */
class BooleanValidator
{

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('The parameter need to be a boolean');

        return ($boolean) ? true : false;

    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean)
    {
        if(!is_bool($boolean))
            throw new \Exception('The parameter need to be a boolean');

        return (!$boolean) ? true : false;
    }

}
