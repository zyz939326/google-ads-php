<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/asset_types.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Structured Snippet asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.StructuredSnippetAsset</code>
 */
class StructuredSnippetAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The header of the snippet.
     * This string should be one of the predefined values at
     * https://developers.google.com/google-ads/api/reference/data/structured-snippet-headers
     *
     * Generated from protobuf field <code>string header = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $header = '';
    /**
     * Required. The values in the snippet.
     * The size of this collection should be between 3 and 10, inclusive.
     * The length of each value should be between 1 and 25 characters, inclusive.
     *
     * Generated from protobuf field <code>repeated string values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $header
     *           Required. The header of the snippet.
     *           This string should be one of the predefined values at
     *           https://developers.google.com/google-ads/api/reference/data/structured-snippet-headers
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $values
     *           Required. The values in the snippet.
     *           The size of this collection should be between 3 and 10, inclusive.
     *           The length of each value should be between 1 and 25 characters, inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The header of the snippet.
     * This string should be one of the predefined values at
     * https://developers.google.com/google-ads/api/reference/data/structured-snippet-headers
     *
     * Generated from protobuf field <code>string header = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Required. The header of the snippet.
     * This string should be one of the predefined values at
     * https://developers.google.com/google-ads/api/reference/data/structured-snippet-headers
     *
     * Generated from protobuf field <code>string header = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->header = $var;

        return $this;
    }

    /**
     * Required. The values in the snippet.
     * The size of this collection should be between 3 and 10, inclusive.
     * The length of each value should be between 1 and 25 characters, inclusive.
     *
     * Generated from protobuf field <code>repeated string values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Required. The values in the snippet.
     * The size of this collection should be between 3 and 10, inclusive.
     * The length of each value should be between 1 and 25 characters, inclusive.
     *
     * Generated from protobuf field <code>repeated string values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

}
