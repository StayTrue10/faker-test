<?php

namespace App\Traits;

trait FakerTrait {
    public static function letterify($string = '') {
        try {
            $pattern ='/'.'\?'.'/';
            $string = 'a'.$string;
            while (strpos($string, '?')) {
                $string = preg_replace($pattern, chr(rand(97, 122)), $string, 1);
            }
            $string = substr($string, 1);
            return $string;
        }
        catch (Exception $e) {
            report($e);
        }
    }
    public static function numerify($string = '') {
        try {
            $pattern ='/'.'\#'.'/';
            $string = 'a'.$string;
            while (strpos($string, '#')) {
                $string = preg_replace($pattern, rand(0,9), $string, 1);
            }
            $string = substr($string, 1);
            return $string;
        }
        catch (Exception $e) {
            report($e);
        }
    }
    public static function bothify($string = '') {
        try {
            $string = self::letterify($string);
            $string = self::numerify($string);
            return $string;
        }
        catch (Exception $e) {
            report($e);
        }
    }
}