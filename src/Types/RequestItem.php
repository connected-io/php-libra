<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: get_with_proof.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>types.RequestItem</code>
 */
class RequestItem extends \Google\Protobuf\Internal\Message
{
    protected $requested_items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Types\GetAccountStateRequest $get_account_state_request
     *     @type \Types\GetAccountTransactionBySequenceNumberRequest $get_account_transaction_by_sequence_number_request
     *     @type \Types\GetEventsByEventAccessPathRequest $get_events_by_event_access_path_request
     *     @type \Types\GetTransactionsRequest $get_transactions_request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GetWithProof::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.types.GetAccountStateRequest get_account_state_request = 1;</code>
     * @return \Types\GetAccountStateRequest
     */
    public function getGetAccountStateRequest()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.types.GetAccountStateRequest get_account_state_request = 1;</code>
     * @param \Types\GetAccountStateRequest $var
     * @return $this
     */
    public function setGetAccountStateRequest($var)
    {
        GPBUtil::checkMessage($var, \Types\GetAccountStateRequest::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.GetAccountTransactionBySequenceNumberRequest get_account_transaction_by_sequence_number_request = 2;</code>
     * @return \Types\GetAccountTransactionBySequenceNumberRequest
     */
    public function getGetAccountTransactionBySequenceNumberRequest()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.types.GetAccountTransactionBySequenceNumberRequest get_account_transaction_by_sequence_number_request = 2;</code>
     * @param \Types\GetAccountTransactionBySequenceNumberRequest $var
     * @return $this
     */
    public function setGetAccountTransactionBySequenceNumberRequest($var)
    {
        GPBUtil::checkMessage($var, \Types\GetAccountTransactionBySequenceNumberRequest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.GetEventsByEventAccessPathRequest get_events_by_event_access_path_request = 3;</code>
     * @return \Types\GetEventsByEventAccessPathRequest
     */
    public function getGetEventsByEventAccessPathRequest()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.types.GetEventsByEventAccessPathRequest get_events_by_event_access_path_request = 3;</code>
     * @param \Types\GetEventsByEventAccessPathRequest $var
     * @return $this
     */
    public function setGetEventsByEventAccessPathRequest($var)
    {
        GPBUtil::checkMessage($var, \Types\GetEventsByEventAccessPathRequest::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.GetTransactionsRequest get_transactions_request = 4;</code>
     * @return \Types\GetTransactionsRequest
     */
    public function getGetTransactionsRequest()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.types.GetTransactionsRequest get_transactions_request = 4;</code>
     * @param \Types\GetTransactionsRequest $var
     * @return $this
     */
    public function setGetTransactionsRequest($var)
    {
        GPBUtil::checkMessage($var, \Types\GetTransactionsRequest::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedItems()
    {
        return $this->whichOneof("requested_items");
    }

}
