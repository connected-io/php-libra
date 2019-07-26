<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proof.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>types.SparseMerkleProof</code>
 */
class SparseMerkleProof extends \Google\Protobuf\Internal\Message
{
    /**
     * This proof can be used to authenticate whether a given leaf exists in the
     * tree or not. In Rust:
     *   - If this is `Some(HashValue, HashValue)`
     *     - If the first `HashValue` equals requested key, this is an inclusion
     *       proof and the second `HashValue` equals the hash of the
     *       corresponding account blob.
     *     - Otherwise this is a non-inclusion proof. The first `HashValue` is
     *       the only key that exists in the subtree and the second `HashValue`
     *       equals the hash of the corresponding account blob.
     *   - If this is `None`, this is also a non-inclusion proof which indicates
     *     the subtree is empty.
     * In protobuf, this leaf field should either be
     *   - empty, which corresponds to None in the Rust structure.
     *   - exactly 64 bytes, which corresponds to Some<(HashValue, HashValue)>
     *     in the Rust structure.
     *
     * Generated from protobuf field <code>bytes leaf = 1;</code>
     */
    private $leaf = '';
    /**
     * The bitmap indicating which siblings are default. 1 means non-default and
     * 0 means default. The MSB of the first byte corresponds to the sibling at
     * the top of the Sparse Merkle Tree. The rightmost 1-bit of the last byte
     * corresponds to the sibling at the bottom, since this one is always
     * non-default.
     *
     * Generated from protobuf field <code>bytes bitmap = 2;</code>
     */
    private $bitmap = '';
    /**
     * The non-default siblings. The ones near the root are at the beginning of
     * the list.
     *
     * Generated from protobuf field <code>repeated bytes non_default_siblings = 3;</code>
     */
    private $non_default_siblings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $leaf
     *           This proof can be used to authenticate whether a given leaf exists in the
     *           tree or not. In Rust:
     *             - If this is `Some(HashValue, HashValue)`
     *               - If the first `HashValue` equals requested key, this is an inclusion
     *                 proof and the second `HashValue` equals the hash of the
     *                 corresponding account blob.
     *               - Otherwise this is a non-inclusion proof. The first `HashValue` is
     *                 the only key that exists in the subtree and the second `HashValue`
     *                 equals the hash of the corresponding account blob.
     *             - If this is `None`, this is also a non-inclusion proof which indicates
     *               the subtree is empty.
     *           In protobuf, this leaf field should either be
     *             - empty, which corresponds to None in the Rust structure.
     *             - exactly 64 bytes, which corresponds to Some<(HashValue, HashValue)>
     *               in the Rust structure.
     *     @type string $bitmap
     *           The bitmap indicating which siblings are default. 1 means non-default and
     *           0 means default. The MSB of the first byte corresponds to the sibling at
     *           the top of the Sparse Merkle Tree. The rightmost 1-bit of the last byte
     *           corresponds to the sibling at the bottom, since this one is always
     *           non-default.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $non_default_siblings
     *           The non-default siblings. The ones near the root are at the beginning of
     *           the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proof::initOnce();
        parent::__construct($data);
    }

    /**
     * This proof can be used to authenticate whether a given leaf exists in the
     * tree or not. In Rust:
     *   - If this is `Some(HashValue, HashValue)`
     *     - If the first `HashValue` equals requested key, this is an inclusion
     *       proof and the second `HashValue` equals the hash of the
     *       corresponding account blob.
     *     - Otherwise this is a non-inclusion proof. The first `HashValue` is
     *       the only key that exists in the subtree and the second `HashValue`
     *       equals the hash of the corresponding account blob.
     *   - If this is `None`, this is also a non-inclusion proof which indicates
     *     the subtree is empty.
     * In protobuf, this leaf field should either be
     *   - empty, which corresponds to None in the Rust structure.
     *   - exactly 64 bytes, which corresponds to Some<(HashValue, HashValue)>
     *     in the Rust structure.
     *
     * Generated from protobuf field <code>bytes leaf = 1;</code>
     * @return string
     */
    public function getLeaf()
    {
        return $this->leaf;
    }

    /**
     * This proof can be used to authenticate whether a given leaf exists in the
     * tree or not. In Rust:
     *   - If this is `Some(HashValue, HashValue)`
     *     - If the first `HashValue` equals requested key, this is an inclusion
     *       proof and the second `HashValue` equals the hash of the
     *       corresponding account blob.
     *     - Otherwise this is a non-inclusion proof. The first `HashValue` is
     *       the only key that exists in the subtree and the second `HashValue`
     *       equals the hash of the corresponding account blob.
     *   - If this is `None`, this is also a non-inclusion proof which indicates
     *     the subtree is empty.
     * In protobuf, this leaf field should either be
     *   - empty, which corresponds to None in the Rust structure.
     *   - exactly 64 bytes, which corresponds to Some<(HashValue, HashValue)>
     *     in the Rust structure.
     *
     * Generated from protobuf field <code>bytes leaf = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLeaf($var)
    {
        GPBUtil::checkString($var, False);
        $this->leaf = $var;

        return $this;
    }

    /**
     * The bitmap indicating which siblings are default. 1 means non-default and
     * 0 means default. The MSB of the first byte corresponds to the sibling at
     * the top of the Sparse Merkle Tree. The rightmost 1-bit of the last byte
     * corresponds to the sibling at the bottom, since this one is always
     * non-default.
     *
     * Generated from protobuf field <code>bytes bitmap = 2;</code>
     * @return string
     */
    public function getBitmap()
    {
        return $this->bitmap;
    }

    /**
     * The bitmap indicating which siblings are default. 1 means non-default and
     * 0 means default. The MSB of the first byte corresponds to the sibling at
     * the top of the Sparse Merkle Tree. The rightmost 1-bit of the last byte
     * corresponds to the sibling at the bottom, since this one is always
     * non-default.
     *
     * Generated from protobuf field <code>bytes bitmap = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBitmap($var)
    {
        GPBUtil::checkString($var, False);
        $this->bitmap = $var;

        return $this;
    }

    /**
     * The non-default siblings. The ones near the root are at the beginning of
     * the list.
     *
     * Generated from protobuf field <code>repeated bytes non_default_siblings = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNonDefaultSiblings()
    {
        return $this->non_default_siblings;
    }

    /**
     * The non-default siblings. The ones near the root are at the beginning of
     * the list.
     *
     * Generated from protobuf field <code>repeated bytes non_default_siblings = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNonDefaultSiblings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->non_default_siblings = $arr;

        return $this;
    }

}

