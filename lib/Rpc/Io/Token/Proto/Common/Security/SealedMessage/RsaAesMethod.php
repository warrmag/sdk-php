<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: security.proto

namespace Io\Token\Proto\Common\Security\SealedMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The message is encrypted with a self-generated symmetric key.
 * That key is encrypted using the public key of the recipient and
 * can only be decrypted with the corresponding private key.
 *
 * Generated from protobuf message <code>io.token.proto.common.security.SealedMessage.RsaAesMethod</code>
 */
class RsaAesMethod extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of the key used for encryption
     *
     * Generated from protobuf field <code>string rsa_key_id = 1;</code>
     */
    private $rsa_key_id = '';
    /**
     * RSA/ECB/OAEPWithSHA-256AndMGF1Padding
     *
     * Generated from protobuf field <code>string rsa_algorithm = 2;</code>
     */
    private $rsa_algorithm = '';
    /**
     * AES/CBC/PKCS5Padding
     *
     * Generated from protobuf field <code>string aes_algorithm = 3;</code>
     */
    private $aes_algorithm = '';
    /**
     * Base64url encoded rsa-encrypted aes key
     *
     * Generated from protobuf field <code>string encrypted_aes_key = 5;</code>
     */
    private $encrypted_aes_key = '';
    /**
     * Base64url encoded ciphertext signature.
     *
     * Generated from protobuf field <code>string signature = 6;</code>
     */
    private $signature = '';
    /**
     * the key-id of the signature
     *
     * Generated from protobuf field <code>string signature_key_id = 7;</code>
     */
    private $signature_key_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rsa_key_id
     *           The id of the key used for encryption
     *     @type string $rsa_algorithm
     *           RSA/ECB/OAEPWithSHA-256AndMGF1Padding
     *     @type string $aes_algorithm
     *           AES/CBC/PKCS5Padding
     *     @type string $encrypted_aes_key
     *           Base64url encoded rsa-encrypted aes key
     *     @type string $signature
     *           Base64url encoded ciphertext signature.
     *     @type string $signature_key_id
     *           the key-id of the signature
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Security::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of the key used for encryption
     *
     * Generated from protobuf field <code>string rsa_key_id = 1;</code>
     * @return string
     */
    public function getRsaKeyId()
    {
        return $this->rsa_key_id;
    }

    /**
     * The id of the key used for encryption
     *
     * Generated from protobuf field <code>string rsa_key_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRsaKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->rsa_key_id = $var;

        return $this;
    }

    /**
     * RSA/ECB/OAEPWithSHA-256AndMGF1Padding
     *
     * Generated from protobuf field <code>string rsa_algorithm = 2;</code>
     * @return string
     */
    public function getRsaAlgorithm()
    {
        return $this->rsa_algorithm;
    }

    /**
     * RSA/ECB/OAEPWithSHA-256AndMGF1Padding
     *
     * Generated from protobuf field <code>string rsa_algorithm = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRsaAlgorithm($var)
    {
        GPBUtil::checkString($var, True);
        $this->rsa_algorithm = $var;

        return $this;
    }

    /**
     * AES/CBC/PKCS5Padding
     *
     * Generated from protobuf field <code>string aes_algorithm = 3;</code>
     * @return string
     */
    public function getAesAlgorithm()
    {
        return $this->aes_algorithm;
    }

    /**
     * AES/CBC/PKCS5Padding
     *
     * Generated from protobuf field <code>string aes_algorithm = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAesAlgorithm($var)
    {
        GPBUtil::checkString($var, True);
        $this->aes_algorithm = $var;

        return $this;
    }

    /**
     * Base64url encoded rsa-encrypted aes key
     *
     * Generated from protobuf field <code>string encrypted_aes_key = 5;</code>
     * @return string
     */
    public function getEncryptedAesKey()
    {
        return $this->encrypted_aes_key;
    }

    /**
     * Base64url encoded rsa-encrypted aes key
     *
     * Generated from protobuf field <code>string encrypted_aes_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptedAesKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->encrypted_aes_key = $var;

        return $this;
    }

    /**
     * Base64url encoded ciphertext signature.
     *
     * Generated from protobuf field <code>string signature = 6;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Base64url encoded ciphertext signature.
     *
     * Generated from protobuf field <code>string signature = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * the key-id of the signature
     *
     * Generated from protobuf field <code>string signature_key_id = 7;</code>
     * @return string
     */
    public function getSignatureKeyId()
    {
        return $this->signature_key_id;
    }

    /**
     * the key-id of the signature
     *
     * Generated from protobuf field <code>string signature_key_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSignatureKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature_key_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RsaAesMethod::class, \Io\Token\Proto\Common\Security\SealedMessage_RsaAesMethod::class);
