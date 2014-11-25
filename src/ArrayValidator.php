<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/11/2014
 * Time: 19:10
 */

namespace baybi\Validator;

/**
 * Class ArrayValidator
 * @package baybi\Validator
 */
class ArrayValidator
{

    const LENGTH_EQUAL = 1;
    const LENGTH_INFERIOR = 2;
    const LENGTH_SUPERIOR = 3;
    const LENGTH_INFERIOR_OR_EQUAL = 4;
    const LENGTH_SUPERIOR_OR_EQUAL = 5;

    /**
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if(!is_array($array))
            throw new \Exception('The parameter need to be a array');

        return (count($array) == 0) ? true : false;
    }

    /**
     * @param array $array
     * @param       $comparator
     * @param int   $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function compare($array, $comparator, $integer)
    {
        if(!is_array($array) || !is_int($integer))
            throw new \Exception('Invalid format');

        if (!in_array($comparator, [
            self::LENGTH_EQUAL,
            self::LENGTH_INFERIOR,
            self::LENGTH_SUPERIOR,
            self::LENGTH_SUPERIOR_OR_EQUAL,
            self::LENGTH_INFERIOR_OR_EQUAL,
        ])) {
            throw new \InvalidArgumentException('The second parameter need to be a valid comparator');
        }

        $arrayLength = count($array);

        $result = 0;

        switch ($comparator) {
            case self::LENGTH_EQUAL:
                $result = $arrayLength === $integer;
                break;

            case self::LENGTH_INFERIOR:
                $result = $arrayLength < $integer;
                break;

            case self::LENGTH_SUPERIOR:
                $result = $arrayLength > $integer;
                break;

            case self::LENGTH_INFERIOR_OR_EQUAL:
                $result = $arrayLength <= $integer;
                break;

            case self::LENGTH_SUPERIOR_OR_EQUAL:
                $result = $arrayLength >= $integer;
                break;
        }

        return $result;
    }

    /**
     * @param array $array
     * @param int   $min
     * @param int   $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function numberElementsBetween($array, $min, $max)
    {
        if(!is_array($array) || !is_int($min) || !is_int($max))
            throw new \Exception('The first parameter need to be a array');

        return ( count($array) >= $min &&  count($array) <= $max) ? true : false;
    }

    /**
     * @param array  $array
     * @param string $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array, $key)
    {
        if(!is_array($array) || !is_string($key))
            throw new \Exception('Invalid parameter');

        return (array_key_exists($key, $array)) ? true : false;
    }

    /**
     * @param array  $array
     * @param string $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function valueExists($array, $value)
    {
        if(!is_array($array) || !is_string($value))
            throw new \Exception('Invalid parameter');

        return (in_array($value, $array)) ? true : false;
    }

}
