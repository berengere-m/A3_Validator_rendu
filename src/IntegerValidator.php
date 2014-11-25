<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/11/2014
 * Time: 19:10
 */

namespace baybi\Validator;

/**
 * Class IntegerValidator
 * @package baybi\Validator
 */
class IntegerValidator
{

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($a, $b)
    {
        if(!is_int($a) || !is_int($b))
            throw new \Exception('The two parameters need to be an integer');

        return ($a == $b) ? true : false;
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($a, $b)
    {
        if(!is_int($a) || !is_int($b))
            throw new \Exception('The two parameters need to be an integer');

        return ($a > $b) ? true : false;
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function inferior($a, $b)
    {
        if(!is_int($a) || !is_int($b))
            throw new \Exception('The two parameters need to be an integer');

        return ($a < $b) ? true : false;
    }

    /**
     * @param int $int
     * @param int $min
     * @param int $max
     *
     * @return bool
     * @throws \Exception<
     */
    public static function between($int, $min, $max)
    {
        if(!is_int($int) || !is_int($min) || !is_int($max))
            throw new \Exception('The three parameters need to be integer');

        return ($int <= $max && $int >= $min) ?  true : false;
    }

    /**
     * @param int $int
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($int)
    {
        if(!is_int($int))
            throw new \Exception('The parameter need to be an integer');

        return ($int <= 0) ? true : false;
    }

    /**
     * @param int $int
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($int)
    {
        if(!is_int($int))
            throw new \Exception('The parameter need to be an integer');

        return ($int >= 0) ?  true : false;
    }

}
