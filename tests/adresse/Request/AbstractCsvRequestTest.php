<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Adresse\Tests\Request;

use WBW\Library\GouvAPI\Adresse\Tests\AbstractTestCase;
use WBW\Library\GouvAPI\Adresse\Tests\Fixtures\Request\TestCsvRequest;

/**
 * Abstract CSV request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Adresse\Tests\Request
 */
class AbstractCsvRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestCsvRequest("data");

        $this->assertEquals("data", $obj->getData());
    }
}