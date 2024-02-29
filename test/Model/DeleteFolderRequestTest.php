<?php
/**
 * DeleteFolderRequestTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * @bytescale/api
 *
 * Bytescale API
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: hello@bytescale.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Bytescale\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * DeleteFolderRequestTest Class Doc Comment
 *
 * @category    Class
 * @description Request body for DeleteFolder.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.  *When deleting a folder with external storage:* if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#39;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.
 * @package     Bytescale
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class DeleteFolderRequestTest extends TestCase
{

    /**
     * Setup before running any test case
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
     * Test "DeleteFolderRequest"
     */
    public function testDeleteFolderRequest()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "deleteFiles"
     */
    public function testPropertyDeleteFiles()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "deleteVirtualFolders"
     */
    public function testPropertyDeleteVirtualFolders()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "folderPath"
     */
    public function testPropertyFolderPath()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "recursive"
     */
    public function testPropertyRecursive()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
