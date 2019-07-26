<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright (c) The Libra Core Contributors
// SPDX-License-Identifier: Apache-2.0
//
namespace Admission_control {

  // -----------------------------------------------------------------------------
  // ---------------- Service definition
  // -----------------------------------------------------------------------------
  class AdmissionControlClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Public API to submit transaction to a validator.
     * @param \Admission_control\SubmitTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SubmitTransaction(\Admission_control\SubmitTransactionRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/admission_control.AdmissionControl/SubmitTransaction',
      $argument,
      ['\Admission_control\SubmitTransactionResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * This API is used to update the client to the latest ledger version and
     * optionally also request 1..n other pieces of data.  This allows for batch
     * queries.  All queries return proofs that a client should check to validate
     * the data. Note that if a client only wishes to update to the latest
     * LedgerInfo and receive the proof of this latest version, they can simply
     * omit the requested_items (or pass an empty list)
     * @param \Types\UpdateToLatestLedgerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateToLatestLedger(\Types\UpdateToLatestLedgerRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/admission_control.AdmissionControl/UpdateToLatestLedger',
      $argument,
      ['\Types\UpdateToLatestLedgerResponse', 'decode'],
      $metadata, $options);
    }

  }

}
