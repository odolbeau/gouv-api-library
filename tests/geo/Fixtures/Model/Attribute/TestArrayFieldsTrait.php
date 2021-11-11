<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Tests\Fixtures\Model\Attribute;

use WBW\Library\GouvAPI\Geo\Model\Attribute\ArrayFieldsTrait;

/**
 * Test array fields trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Tests\Fixtures\Model\Attribute
 */
class TestArrayFieldsTrait {

    use ArrayFieldsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setFields([]);
    }
}