<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Config;

/**
 * 설정 조회 서비스
 */
class ConfigStoreClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Config\ConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Config\ConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/config.ConfigStore/Get',
        $argument,
        ['\Config\ConfigResponse', 'decode'],
        $metadata, $options);
    }

}
