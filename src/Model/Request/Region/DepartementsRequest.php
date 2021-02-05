<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Request\Region;

use WBW\Library\GeoAPI\Model\AbstractRequest;

/**
 * Départements request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Request\Region
 */
class DepartementsRequest extends AbstractRequest {

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/regions/%s/departements";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        if (null !== $this->getCode()) {
            return sprintf(static::RESOURCE_PATH, $this->getCode());
        }
        return static::RESOURCE_PATH;
    }
}