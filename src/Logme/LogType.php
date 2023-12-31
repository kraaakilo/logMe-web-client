<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: LogME.proto

namespace Logme;

use UnexpectedValueException;

/**
 * Protobuf type <code>logme.LogType</code>
 */
class LogType
{
    /**
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Generated from protobuf enum <code>SUCCESS = 1;</code>
     */
    const SUCCESS = 1;
    /**
     * Generated from protobuf enum <code>FAILED = 2;</code>
     */
    const FAILED = 2;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::SUCCESS => 'SUCCESS',
        self::FAILED => 'FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

