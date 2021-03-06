<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vm_errors.proto

namespace Types\ArithmeticError;

use UnexpectedValueException;

/**
 * Protobuf type <code>types.ArithmeticError.ArithmeticErrorType</code>
 */
class ArithmeticErrorType
{
    /**
     * Generated from protobuf enum <code>UnknownArithmeticError = 0;</code>
     */
    const UnknownArithmeticError = 0;
    /**
     * Generated from protobuf enum <code>Underflow = 1;</code>
     */
    const Underflow = 1;
    /**
     * Generated from protobuf enum <code>Overflow = 2;</code>
     */
    const Overflow = 2;
    /**
     * Fill with more later
     *
     * Generated from protobuf enum <code>DivisionByZero = 3;</code>
     */
    const DivisionByZero = 3;

    private static $valueToName = [
        self::UnknownArithmeticError => 'UnknownArithmeticError',
        self::Underflow => 'Underflow',
        self::Overflow => 'Overflow',
        self::DivisionByZero => 'DivisionByZero',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ArithmeticErrorType::class, \Types\ArithmeticError_ArithmeticErrorType::class);

