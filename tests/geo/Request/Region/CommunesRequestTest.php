<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Tests\Request\Region;

use WBW\Library\GouvAPI\Geo\Request\Region\CommunesRequest;
use WBW\Library\GouvAPI\Geo\Tests\AbstractTestCase;

/**
 * Communes request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Request\Region
 */
class CommunesRequestTest extends AbstractTestCase {

    /**
     * Tests the getResourcePath() method.
     *
     * @return void
     */
    public function testGetResourcePath(): void {

        $obj = new CommunesRequest();
        $this->assertEquals(CommunesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $obj->setCode("code");
        $this->assertEquals("/regions/code/communes", $obj->getResourcePath());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/regions/%s/communes", CommunesRequest::RESOURCE_PATH);

        $obj = new CommunesRequest();

        $this->assertEquals(CommunesRequest::RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getFormat());
        $this->assertNull($obj->getGeometry());
    }
}