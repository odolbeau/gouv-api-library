<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Tests\Model\Attribute;

use WBW\Library\GouvAPI\Geo\Tests\AbstractTestCase;
use WBW\Library\GouvAPI\Geo\Tests\Fixtures\Model\Attribute\TestStringGeometryTrait;

/**
 * String geometry trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Model\Attribute
 */
class StringGeometryTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeometry() method.
     *
     * @return void
     */
    public function testSetGeometry(): void {

        $obj = new TestStringGeometryTrait();

        $obj->setGeometry("geometry");
        $this->assertEquals("geometry", $obj->getGeometry());
    }
}