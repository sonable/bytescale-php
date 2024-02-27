<?php
/**
 * UploadApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * @bytescale/api
 *
 * Bytescale API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: hello@bytescale.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Swagger\Client\Configuration;
use Swagger\Client\ApiException;
use Swagger\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * UploadApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for beginMultipartUpload
     *
     * Begins a new multipart file upload process..
     *
     */
    public function testBeginMultipartUpload()
    {
    }

    /**
     * Test case for completeUploadPart
     *
     * Marks an upload part as uploaded.  You must call this endpoint after you have successfully issued a `PUT` request to the `uploadUrl` on the corresponding UploadPart..
     *
     */
    public function testCompleteUploadPart()
    {
    }

    /**
     * Test case for getUploadPart
     *
     * Gets a remaining upload part for a multipart file upload..
     *
     */
    public function testGetUploadPart()
    {
    }

    /**
     * Test case for listUploadParts
     *
     * Lists the remaining upload parts for a multipart file upload.  An empty array is returned when the upload is complete..
     *
     */
    public function testListUploadParts()
    {
    }

    /**
     * Test case for uploadFromUrl
     *
     * Upload from a URL with a single HTTP request:.
     *
     */
    public function testUploadFromUrl()
    {
    }
}
