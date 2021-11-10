<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Tests\Request\Departement;

use WBW\Library\GeoAPI\Request\Departement\DepartementsRequest;
use WBW\Library\GeoAPI\Tests\AbstractTestCase;

/**
 * Départements request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Tests\Request\Departement
 */
class DepartementsRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/departements", DepartementsRequest::RESOURCE_PATH);

        $obj = new DepartementsRequest();

        $this->assertEquals(DepartementsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}