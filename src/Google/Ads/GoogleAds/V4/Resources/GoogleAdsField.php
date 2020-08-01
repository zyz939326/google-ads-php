<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/google_ads_field.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A field or resource (artifact) used by GoogleAdsService.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.GoogleAdsField</code>
 */
class GoogleAdsField extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the artifact.
     * Artifact resource names have the form:
     * `googleAdsFields/{name}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The name of the artifact.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The category of the artifact.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory category = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $category = 0;
    /**
     * Output only. Whether the artifact can be used in a SELECT clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue selectable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $selectable = null;
    /**
     * Output only. Whether the artifact can be used in a WHERE clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue filterable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $filterable = null;
    /**
     * Output only. Whether the artifact can be used in a ORDER BY clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue sortable = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $sortable = null;
    /**
     * Output only. The names of all resources, segments, and metrics that are selectable with
     * the described artifact.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue selectable_with = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $selectable_with;
    /**
     * Output only. The names of all resources that are selectable with the described
     * artifact. Fields from these resources do not segment metrics when included
     * in search queries.
     * This field is only set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue attribute_resources = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $attribute_resources;
    /**
     * Output only. At and beyond version V1 this field lists the names of all metrics that are
     * selectable with the described artifact when it is used in the FROM clause.
     * It is only set for artifacts whose category is RESOURCE.
     * Before version V1 this field lists the names of all metrics that are
     * selectable with the described artifact. It is only set for artifacts whose
     * category is either RESOURCE or SEGMENT
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue metrics = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $metrics;
    /**
     * Output only. At and beyond version V1 this field lists the names of all artifacts,
     * whether a segment or another resource, that segment metrics when included
     * in search queries and when the described artifact is used in the FROM
     * clause. It is only set for artifacts whose category is RESOURCE.
     * Before version V1 this field lists the names of all artifacts, whether a
     * segment or another resource, that segment metrics when included in search
     * queries. It is only set for artifacts of category RESOURCE, SEGMENT or
     * METRIC.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue segments = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $segments;
    /**
     * Output only. Values the artifact can assume if it is a field of type ENUM.
     * This field is only set for artifacts of category SEGMENT or ATTRIBUTE.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue enum_values = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $enum_values;
    /**
     * Output only. This field determines the operators that can be used with the artifact
     * in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GoogleAdsFieldDataTypeEnum.GoogleAdsFieldDataType data_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $data_type = 0;
    /**
     * Output only. The URL of proto describing the artifact's data type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue type_url = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type_url = null;
    /**
     * Output only. Whether the field artifact is repeated.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_repeated = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $is_repeated = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the artifact.
     *           Artifact resource names have the form:
     *           `googleAdsFields/{name}`
     *     @type \Google\Protobuf\StringValue $name
     *           Output only. The name of the artifact.
     *     @type int $category
     *           Output only. The category of the artifact.
     *     @type \Google\Protobuf\BoolValue $selectable
     *           Output only. Whether the artifact can be used in a SELECT clause in search
     *           queries.
     *     @type \Google\Protobuf\BoolValue $filterable
     *           Output only. Whether the artifact can be used in a WHERE clause in search
     *           queries.
     *     @type \Google\Protobuf\BoolValue $sortable
     *           Output only. Whether the artifact can be used in a ORDER BY clause in search
     *           queries.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $selectable_with
     *           Output only. The names of all resources, segments, and metrics that are selectable with
     *           the described artifact.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $attribute_resources
     *           Output only. The names of all resources that are selectable with the described
     *           artifact. Fields from these resources do not segment metrics when included
     *           in search queries.
     *           This field is only set for artifacts whose category is RESOURCE.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Output only. At and beyond version V1 this field lists the names of all metrics that are
     *           selectable with the described artifact when it is used in the FROM clause.
     *           It is only set for artifacts whose category is RESOURCE.
     *           Before version V1 this field lists the names of all metrics that are
     *           selectable with the described artifact. It is only set for artifacts whose
     *           category is either RESOURCE or SEGMENT
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $segments
     *           Output only. At and beyond version V1 this field lists the names of all artifacts,
     *           whether a segment or another resource, that segment metrics when included
     *           in search queries and when the described artifact is used in the FROM
     *           clause. It is only set for artifacts whose category is RESOURCE.
     *           Before version V1 this field lists the names of all artifacts, whether a
     *           segment or another resource, that segment metrics when included in search
     *           queries. It is only set for artifacts of category RESOURCE, SEGMENT or
     *           METRIC.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $enum_values
     *           Output only. Values the artifact can assume if it is a field of type ENUM.
     *           This field is only set for artifacts of category SEGMENT or ATTRIBUTE.
     *     @type int $data_type
     *           Output only. This field determines the operators that can be used with the artifact
     *           in WHERE clauses.
     *     @type \Google\Protobuf\StringValue $type_url
     *           Output only. The URL of proto describing the artifact's data type.
     *     @type \Google\Protobuf\BoolValue $is_repeated
     *           Output only. Whether the field artifact is repeated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\GoogleAdsField::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the artifact.
     * Artifact resource names have the form:
     * `googleAdsFields/{name}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the artifact.
     * Artifact resource names have the form:
     * `googleAdsFields/{name}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The name of the artifact.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Output only. The name of the artifact.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Output only. The name of the artifact.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The name of the artifact.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. The category of the artifact.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory category = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Output only. The category of the artifact.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory category = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\GoogleAdsFieldCategoryEnum_GoogleAdsFieldCategory::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Output only. Whether the artifact can be used in a SELECT clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue selectable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getSelectable()
    {
        return $this->selectable;
    }

    /**
     * Returns the unboxed value from <code>getSelectable()</code>

     * Output only. Whether the artifact can be used in a SELECT clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue selectable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getSelectableUnwrapped()
    {
        return $this->readWrapperValue("selectable");
    }

    /**
     * Output only. Whether the artifact can be used in a SELECT clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue selectable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setSelectable($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->selectable = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Whether the artifact can be used in a SELECT clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue selectable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setSelectableUnwrapped($var)
    {
        $this->writeWrapperValue("selectable", $var);
        return $this;}

    /**
     * Output only. Whether the artifact can be used in a WHERE clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue filterable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getFilterable()
    {
        return $this->filterable;
    }

    /**
     * Returns the unboxed value from <code>getFilterable()</code>

     * Output only. Whether the artifact can be used in a WHERE clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue filterable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getFilterableUnwrapped()
    {
        return $this->readWrapperValue("filterable");
    }

    /**
     * Output only. Whether the artifact can be used in a WHERE clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue filterable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setFilterable($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->filterable = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Whether the artifact can be used in a WHERE clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue filterable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setFilterableUnwrapped($var)
    {
        $this->writeWrapperValue("filterable", $var);
        return $this;}

    /**
     * Output only. Whether the artifact can be used in a ORDER BY clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue sortable = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getSortable()
    {
        return $this->sortable;
    }

    /**
     * Returns the unboxed value from <code>getSortable()</code>

     * Output only. Whether the artifact can be used in a ORDER BY clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue sortable = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getSortableUnwrapped()
    {
        return $this->readWrapperValue("sortable");
    }

    /**
     * Output only. Whether the artifact can be used in a ORDER BY clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue sortable = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setSortable($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->sortable = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Whether the artifact can be used in a ORDER BY clause in search
     * queries.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue sortable = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setSortableUnwrapped($var)
    {
        $this->writeWrapperValue("sortable", $var);
        return $this;}

    /**
     * Output only. The names of all resources, segments, and metrics that are selectable with
     * the described artifact.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue selectable_with = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectableWith()
    {
        return $this->selectable_with;
    }

    /**
     * Output only. The names of all resources, segments, and metrics that are selectable with
     * the described artifact.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue selectable_with = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectableWith($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->selectable_with = $arr;

        return $this;
    }

    /**
     * Output only. The names of all resources that are selectable with the described
     * artifact. Fields from these resources do not segment metrics when included
     * in search queries.
     * This field is only set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue attribute_resources = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeResources()
    {
        return $this->attribute_resources;
    }

    /**
     * Output only. The names of all resources that are selectable with the described
     * artifact. Fields from these resources do not segment metrics when included
     * in search queries.
     * This field is only set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue attribute_resources = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->attribute_resources = $arr;

        return $this;
    }

    /**
     * Output only. At and beyond version V1 this field lists the names of all metrics that are
     * selectable with the described artifact when it is used in the FROM clause.
     * It is only set for artifacts whose category is RESOURCE.
     * Before version V1 this field lists the names of all metrics that are
     * selectable with the described artifact. It is only set for artifacts whose
     * category is either RESOURCE or SEGMENT
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue metrics = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Output only. At and beyond version V1 this field lists the names of all metrics that are
     * selectable with the described artifact when it is used in the FROM clause.
     * It is only set for artifacts whose category is RESOURCE.
     * Before version V1 this field lists the names of all metrics that are
     * selectable with the described artifact. It is only set for artifacts whose
     * category is either RESOURCE or SEGMENT
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue metrics = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Output only. At and beyond version V1 this field lists the names of all artifacts,
     * whether a segment or another resource, that segment metrics when included
     * in search queries and when the described artifact is used in the FROM
     * clause. It is only set for artifacts whose category is RESOURCE.
     * Before version V1 this field lists the names of all artifacts, whether a
     * segment or another resource, that segment metrics when included in search
     * queries. It is only set for artifacts of category RESOURCE, SEGMENT or
     * METRIC.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue segments = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Output only. At and beyond version V1 this field lists the names of all artifacts,
     * whether a segment or another resource, that segment metrics when included
     * in search queries and when the described artifact is used in the FROM
     * clause. It is only set for artifacts whose category is RESOURCE.
     * Before version V1 this field lists the names of all artifacts, whether a
     * segment or another resource, that segment metrics when included in search
     * queries. It is only set for artifacts of category RESOURCE, SEGMENT or
     * METRIC.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue segments = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->segments = $arr;

        return $this;
    }

    /**
     * Output only. Values the artifact can assume if it is a field of type ENUM.
     * This field is only set for artifacts of category SEGMENT or ATTRIBUTE.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue enum_values = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnumValues()
    {
        return $this->enum_values;
    }

    /**
     * Output only. Values the artifact can assume if it is a field of type ENUM.
     * This field is only set for artifacts of category SEGMENT or ATTRIBUTE.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue enum_values = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnumValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->enum_values = $arr;

        return $this;
    }

    /**
     * Output only. This field determines the operators that can be used with the artifact
     * in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GoogleAdsFieldDataTypeEnum.GoogleAdsFieldDataType data_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * Output only. This field determines the operators that can be used with the artifact
     * in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GoogleAdsFieldDataTypeEnum.GoogleAdsFieldDataType data_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\GoogleAdsFieldDataTypeEnum_GoogleAdsFieldDataType::class);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Output only. The URL of proto describing the artifact's data type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue type_url = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTypeUrl()
    {
        return $this->type_url;
    }

    /**
     * Returns the unboxed value from <code>getTypeUrl()</code>

     * Output only. The URL of proto describing the artifact's data type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue type_url = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getTypeUrlUnwrapped()
    {
        return $this->readWrapperValue("type_url");
    }

    /**
     * Output only. The URL of proto describing the artifact's data type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue type_url = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTypeUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->type_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The URL of proto describing the artifact's data type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue type_url = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setTypeUrlUnwrapped($var)
    {
        $this->writeWrapperValue("type_url", $var);
        return $this;}

    /**
     * Output only. Whether the field artifact is repeated.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_repeated = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIsRepeated()
    {
        return $this->is_repeated;
    }

    /**
     * Returns the unboxed value from <code>getIsRepeated()</code>

     * Output only. Whether the field artifact is repeated.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_repeated = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getIsRepeatedUnwrapped()
    {
        return $this->readWrapperValue("is_repeated");
    }

    /**
     * Output only. Whether the field artifact is repeated.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_repeated = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIsRepeated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->is_repeated = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Whether the field artifact is repeated.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_repeated = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIsRepeatedUnwrapped($var)
    {
        $this->writeWrapperValue("is_repeated", $var);
        return $this;}

}
