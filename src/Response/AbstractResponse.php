<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Response;

use WBW\Library\Traits\Strings\StringRawResponseTrait;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Response
 * @abstract
 */
abstract class AbstractResponse {

    use StringRawResponseTrait;
}