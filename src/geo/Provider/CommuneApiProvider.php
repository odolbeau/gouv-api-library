<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Provider;

use GuzzleHttp\Exception\GuzzleException;
use WBW\Library\GouvApi\Geo\Request\Commune\CommunesRequest;
use WBW\Library\GouvApi\Geo\Response\CommunesResponse;
use WBW\Library\GouvApi\Geo\Serializer\ResponseDeserializer;
use WBW\Library\Provider\Exception\ApiException;

/**
 * Commune API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Geo\Provider
 */
class CommuneApiProvider extends ApiProvider
{

    /**
     * Communes.
     *
     * @param CommunesRequest $request The communes request.
     * @return CommunesResponse Returns the communes response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function communes(CommunesRequest $request): CommunesResponse {

        $rawResponse = $this->callApi($request, []);

        return ResponseDeserializer::deserializeCommunesResponse($rawResponse);
    }
}