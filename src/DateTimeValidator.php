<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/11/2014
 * Time: 19:10
 */

namespace baybi\Validator;

/**
 * Class DateTimeValidator
 * @package baybi\Validator
 */
class DateTimeValidator
{

    /**
     * @param \Datetime $birthday
     *
     * @return bool
     */
    public static function isMajor(\Datetime $birthday) {
        $dateNow = new \DateTime();

        $diffBetween = $birthday->diff($dateNow);

        return ($diffBetween->y >= 18) ? true : false;
    }

    /**
     * @param \Datetime $date
     *
     * @return bool
     */
    public static function isPassed(\Datetime $date) {
        $dateNow = new \DateTime();

        return ($date < $dateNow) ? true : false;
    }

    /**
     * @param \Datetime $date
     *
     * @return bool
     */
    public static function isFuture(\Datetime $date) {
        $dateNow = new \DateTime();

        return ($date > $dateNow) ? true : false;
    }

    /**
     * @param \Datetime $date
     * @param int       $year
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isYear(\Datetime $date, $year) {
        if(!is_int($year))
            throw new \Exception('The second parameter need to be a string');

        return ((int) $date->format('Y') === $year) ? true : false;
    }

    /**
     * @param \Datetime $date
     * @param int       $month
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isMonth(\Datetime $date, $month) {
        if(!is_int($month))
            throw new \Exception('The second parameter need to be a integer');

        return ((int) $date->format('m') === $month) ? true : false;
    }

    /**
     * @param \Datetime $date
     * @param int       $day
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isDay(\Datetime $date, $day) {
        if(!is_int($day))
            throw new \Exception('The second parameter need to be a integer');

        return ((int) $date->format('d') === $day) ? true : false;
    }
}
