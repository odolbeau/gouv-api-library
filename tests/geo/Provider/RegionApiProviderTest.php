<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Tests\Provider;

use Exception;
use WBW\Library\GouvAPI\Geo\Provider\RegionApiProvider;
use WBW\Library\GouvAPI\Geo\Request\Region\CommunesRequest;
use WBW\Library\GouvAPI\Geo\Request\Region\DepartementsRequest;
use WBW\Library\GouvAPI\Geo\Request\Region\RegionsRequest;
use WBW\Library\GouvAPI\Geo\Response\CommunesResponse;
use WBW\Library\GouvAPI\Geo\Response\DepartementsResponse;
use WBW\Library\GouvAPI\Geo\Response\RegionsResponse;
use WBW\Library\GouvAPI\Geo\Tests\AbstractTestCase;
use WBW\Library\Provider\Exception\ApiException;

/**
 * Région API provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Provider
 */
class RegionApiProviderTest extends AbstractTestCase {

    /**
     * Tests the communes() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCommunes(): void {

        // Set a Communes request mock.
        $request = new CommunesRequest();
        $request->setCode("11");

        $obj = new RegionApiProvider($this->logger);

        try {

            $res = $obj->communes($request);
            $this->assertInstanceOf(CommunesResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
            $this->assertEquals(500, $ex->getCode());
            $this->assertEquals("Call API provider failed", $ex->getMessage());
        }
    }

    /**
     * Tests the departements() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDepartements(): void {

        // Set a Départements request mock.
        $request = new DepartementsRequest();
        $request->setCode("11");

        $obj = new RegionApiProvider($this->logger);

        $res = $obj->departements($request);
        $this->assertInstanceOf(DepartementsResponse::class, $res);
    }

    /**
     * Tests the regions() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRegions(): void {

        // Set a Régions request mock.
        $request = new RegionsRequest();

        $obj = new RegionApiProvider($this->logger);

        $res = $obj->regions($request);
        $this->assertInstanceOf(RegionsResponse::class, $res);
    }
}