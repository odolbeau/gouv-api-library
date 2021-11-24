<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Tests\Model\Attribute;

use WBW\Library\GouvApi\Geo\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Geo\Tests\Fixtures\Model\Attribute\TestArrayFieldsTrait;

/**
 * Array fields trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Geo\Tests\Model\Attribute
 */
class ArrayFieldsTraitTest extends AbstractTestCase {

    /**
     * Tests the aadField() method.
     *
     * @return void
     */
    public function testAddField(): void {

        $obj = new TestArrayFieldsTrait();

        $obj->addField("field");
        $this->assertEquals("field", $obj->getFields()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayFieldsTrait();

        $this->assertEquals([], $obj->getFields());
    }
}