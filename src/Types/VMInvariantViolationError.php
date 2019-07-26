<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vm_errors.proto

namespace Types;

use UnexpectedValueException;

/**
 * These are errors that the VM might raise if a violation of internal
 * invariants takes place.
 *
 * Protobuf type <code>types.VMInvariantViolationError</code>
 */
class VMInvariantViolationError
{
    /**
     * Generated from protobuf enum <code>UnknownInvariantViolationError = 0;</code>
     */
    const UnknownInvariantViolationError = 0;
    /**
     * Generated from protobuf enum <code>OutOfBoundsIndex = 1;</code>
     */
    const OutOfBoundsIndex = 1;
    /**
     * Generated from protobuf enum <code>OutOfBoundsRange = 2;</code>
     */
    const OutOfBoundsRange = 2;
    /**
     * Generated from protobuf enum <code>EmptyValueStack = 3;</code>
     */
    const EmptyValueStack = 3;
    /**
     * Generated from protobuf enum <code>EmptyCallStack = 4;</code>
     */
    const EmptyCallStack = 4;
    /**
     * Generated from protobuf enum <code>PCOverflow = 5;</code>
     */
    const PCOverflow = 5;
    /**
     * Generated from protobuf enum <code>LinkerError = 6;</code>
     */
    const LinkerError = 6;
    /**
     * Generated from protobuf enum <code>LocalReferenceError = 7;</code>
     */
    const LocalReferenceError = 7;
    /**
     * Generated from protobuf enum <code>StorageError = 8;</code>
     */
    const StorageError = 8;

    private static $valueToName = [
        self::UnknownInvariantViolationError => 'UnknownInvariantViolationError',
        self::OutOfBoundsIndex => 'OutOfBoundsIndex',
        self::OutOfBoundsRange => 'OutOfBoundsRange',
        self::EmptyValueStack => 'EmptyValueStack',
        self::EmptyCallStack => 'EmptyCallStack',
        self::PCOverflow => 'PCOverflow',
        self::LinkerError => 'LinkerError',
        self::LocalReferenceError => 'LocalReferenceError',
        self::StorageError => 'StorageError',
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

