<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A server-stored registry credential used to validate device credentials.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.RegistryCredential</code>
 */
class RegistryCredential extends \Google\Protobuf\Internal\Message
{
    protected $credential;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iot\V1\PublicKeyCertificate $public_key_certificate
     *           A public key certificate used to verify the device credentials.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A public key certificate used to verify the device credentials.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.PublicKeyCertificate public_key_certificate = 1;</code>
     * @return \Google\Cloud\Iot\V1\PublicKeyCertificate
     */
    public function getPublicKeyCertificate()
    {
        return $this->readOneof(1);
    }

    /**
     * A public key certificate used to verify the device credentials.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.PublicKeyCertificate public_key_certificate = 1;</code>
     * @param \Google\Cloud\Iot\V1\PublicKeyCertificate $var
     * @return $this
     */
    public function setPublicKeyCertificate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iot\V1\PublicKeyCertificate::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCredential()
    {
        return $this->whichOneof("credential");
    }

}

