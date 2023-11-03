<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Logme;

/**
 */
class LogMEClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Logme\AddLogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddLog(\Logme\AddLogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/logme.LogME/AddLog',
        $argument,
        ['\Logme\AddLogResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Logme\GetLogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLog(\Logme\GetLogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/logme.LogME/GetLog',
        $argument,
        ['\Logme\GetLogResponse', 'decode'],
        $metadata, $options);
    }

}
