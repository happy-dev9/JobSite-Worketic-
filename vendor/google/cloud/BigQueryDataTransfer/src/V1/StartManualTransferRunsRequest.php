<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to start manual transfer runs.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequest</code>
 */
class StartManualTransferRunsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Transfer configuration name in the form:
     * `projects/{project_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    protected $time;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Transfer configuration name in the form:
     *           `projects/{project_id}/transferConfigs/{config_id}`.
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest\TimeRange $requested_time_range
     *           Time range for the transfer runs that should be started.
     *     @type \Google\Protobuf\Timestamp $requested_run_time
     *           Specific run_time for a transfer run to be started. The
     *           requested_run_time must not be in the future.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Transfer configuration name in the form:
     * `projects/{project_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Transfer configuration name in the form:
     * `projects/{project_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Time range for the transfer runs that should be started.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequest.TimeRange requested_time_range = 3;</code>
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest\TimeRange
     */
    public function getRequestedTimeRange()
    {
        return $this->readOneof(3);
    }

    /**
     * Time range for the transfer runs that should be started.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequest.TimeRange requested_time_range = 3;</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest\TimeRange $var
     * @return $this
     */
    public function setRequestedTimeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest_TimeRange::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Specific run_time for a transfer run to be started. The
     * requested_run_time must not be in the future.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp requested_run_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getRequestedRunTime()
    {
        return $this->readOneof(4);
    }

    /**
     * Specific run_time for a transfer run to be started. The
     * requested_run_time must not be in the future.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp requested_run_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRequestedRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->whichOneof("time");
    }

}

