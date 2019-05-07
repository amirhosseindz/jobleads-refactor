<?php

class StringTool
{
    /**
     *  Concatenate two strings (Alias for the "concatenate" method)
     *
     * @param string $a First string to concatenate
     * @param string $b Second string to concatenate
     * @return string
     */
    public static function concat(string $a, string $b)
    {
        return self::concatenate($a, $b);
    }

    /**
     * Add line break to the end of the string
     *
     * @param string $a String to add line break at the end of it
     * @return string
     */
    public static function writeLn(string $a)
    {
        return $a . "\n";
    }

    /**
     * Make a string uppercase
     *
     * @param string $string String to be uppercase
     * @return string
     */
    public static function toUppercase(string $string) {
        return strtoupper($string);
    }

    /**
     * Make a string lowercase
     *
     * @param string $input String to be lowercase
     * @return string
     */
    public static function toLowercase(string $input) {
        return strtolower($input);
    }

    /**
     * Calculate the hash value of the input string
     *
     * @param string $input String to be hashed
     * @param string $algorithm Algorithm to use for hashing
     * @return string
     */
    public static function hash(string $input, string $algorithm = 'md5') {
        return hash($algorithm, $input);
    }

    /**
     * Calculate the md5 hash of the input string
     *
     * @param string $input String to calculate the md5 hash of it
     * @return string
     */
    public static function md5(string $input)
    {
        return md5($input);
    }


    /**
     *  Calculate sha512 hash of a string
     *
     * @param $input String to calculate the sha512 hash of it
     * @return string
     */
    public static function sha512($input)   {
        return static::hash($input, 'sha512');
    }

    /**
     *  Concatenate two strings
     *
     * @param string $a First string to concatenate
     * @param string $b Second string to concatenate
     * @return string
     */
	public static function concatenate($a, $b)
    {
        return $a. $b;
    }

    /**
     * @param string $a Needle to search for
     * @param string $b Replace - value to replace the needle
     * @param string $c Haystack - string to search the needle in
     * @return mixed
     */
    public static function replace($a, $b, $c)
    {
        return str_replace($a, $b, $c);
    }

    /**
     * Stripe whitespaces from the beginning and end of a string
     *
     * @param $input String to be trimmed
     * @return string
     */
    public static function trim($input)
    {
        return trim($input);
    }
}
