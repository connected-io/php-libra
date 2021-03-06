<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: get_with_proof.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Individual response items to the queries posed by the requests
 *
 * Generated from protobuf message <code>types.ResponseItem</code>
 */
class ResponseItem extends \Google\Protobuf\Internal\Message
{
    protected $response_items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Types\GetAccountStateResponse $get_account_state_response
     *     @type \Types\GetAccountTransactionBySequenceNumberResponse $get_account_transaction_by_sequence_number_response
     *     @type \Types\GetEventsByEventAccessPathResponse $get_events_by_event_access_path_response
     *     @type \Types\GetTransactionsResponse $get_transactions_response
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GetWithProof::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.types.GetAccountStateResponse get_account_state_response = 3;</code>
     * @return \Types\GetAccountStateResponse
     */
    public function getGetAccountStateResponse()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.types.GetAccountStateResponse get_account_state_response = 3;</code>
     * @param \Types\GetAccountStateResponse $var
     * @return $this
     */
    public function setGetAccountStateResponse($var)
    {
        GPBUtil::checkMessage($var, \Types\GetAccountStateResponse::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.GetAccountTransactionBySequenceNumberResponse get_account_transaction_by_sequence_number_response = 4;</code>
     * @return \Types\GetAccountTransactionBySequenceNumberResponse
     */
    public function getGetAccountTransactionBySequenceNumberResponse()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.types.GetAccountTransactionBySequenceNumberResponse get_account_transaction_by_sequence_number_response = 4;</code>
     * @param \Types\GetAccountTransactionBySequenceNumberResponse $var
     * @return $this
     */
    public function setGetAccountTransactionBySequenceNumberResponse($var)
    {
        GPBUtil::checkMessage($var, \Types\GetAccountTransactionBySequenceNumberResponse::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.GetEventsByEventAccessPathResponse get_events_by_event_access_path_response = 5;</code>
     * @return \Types\GetEventsByEventAccessPathResponse
     */
    public function getGetEventsByEventAccessPathResponse()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.types.GetEventsByEventAccessPathResponse get_events_by_event_access_path_response = 5;</code>
     * @param \Types\GetEventsByEventAccessPathResponse $var
     * @return $this
     */
    public function setGetEventsByEventAccessPathResponse($var)
    {
        GPBUtil::checkMessage($var, \Types\GetEventsByEventAccessPathResponse::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.types.GetTransactionsResponse get_transactions_response = 6;</code>
     * @return \Types\GetTransactionsResponse
     */
    public function getGetTransactionsResponse()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.types.GetTransactionsResponse get_transactions_response = 6;</code>
     * @param \Types\GetTransactionsResponse $var
     * @return $this
     */
    public function setGetTransactionsResponse($var)
    {
        GPBUtil::checkMessage($var, \Types\GetTransactionsResponse::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResponseItems()
    {
        return $this->whichOneof("response_items");
    }

}

