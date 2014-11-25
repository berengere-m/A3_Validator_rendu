<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/11/2014
 * Time: 19:10
 */

namespace baybi\Validator;

/**
 * Class StringValidator
 * @package baybi\Validator
 */
class StringValidator
{

    /**
     * @param string $string
     * @param int    $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthEqual($string, $length) {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('The two parameters need to be in a correct format');

        return (mb_strlen($string) === $length) ? true : false;
    }

    /**
     * @param string $string
     * @param int    $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthSuperior($string, $length) {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('The two parameters need to be in a correct format');

        return (mb_strlen($string) > $length) ? true : false;
    }

    /**
     * @param string $string
     * @param int    $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthInferior($string, $length) {
        if(!is_string($string) || !is_int($length))
            throw new \Exception('The two parameters need to be in a correct format');

        return (mb_strlen($string) < $length) ? true : false;
    }

    /**
     * @param string $string
     * @param int    $min
     * @param int    $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthBetween($string, $min, $max) {
        if(!is_string($string) || !is_int($min) || !is_int($max) )
            throw new \Exception('The two parameters need to be in a correct format');

        return (mb_strlen($string) >= $min && mb_strlen($string) <= $max) ? true : false;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function hasWhiteSpaceBeforeEnd($string) {
        if(!is_string($string))
            throw new \Exception('The parameter need  to be a string');

       return (trim($string) != $string) ? true : false;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function hasWhiteSpace($string) {
        if(!is_string($string))
            throw new \Exception('The parameter need  to be a string');

        return (count(explode(' ', $string)) > 2) ? true : false;
    }
}
