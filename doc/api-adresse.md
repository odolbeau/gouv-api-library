API Adresse
===========

The API Adresse is available [here](https://geo.api.gouv.fr/adresse)

Search

```php
use WBW\Library\GouvPI\Adresse\Provider\ApiProvider;
use WBW\Library\GouvPI\Adresse\Request\SearchRequest;

// Create an API provider.
$provider = new ApiProvider();

// Create a Search request.
$request = new SearchRequest("address");

// Call the API and get the response.
$response = $provider->search($request);

// Handle the response.
// ...
```

> IMPORTANT NOTICE: $response is a [FeatureCollection](https://github.com/webeweb/geo-json-library/blob/master/doc/index.md).

Reverse

```php
use WBW\Library\GouvPI\Adresse\Provider\ApiProvider;
use WBW\Library\GouvPI\Adresse\Request\ReverseRequest;

// Create an API provider.
$provider = new ApiProvider();

// Create a Reverse request.
$request = new ReverseRequest(49.897443, 2.290084);

// Call the API and get the response.
$response = $provider->reverse($request);

// Handle the response.
// ...
```

> IMPORTANT NOTICE: $response is a [FeatureCollection](https://github.com/webeweb/geo-json-library/blob/master/doc/index.md).

Search CSV

```php
use WBW\Library\GouvPI\Adresse\Provider\ApiProvider;
use WBW\Library\GouvPI\Adresse\Request\SearchCsvRequest;

// Create an API provider.
$provider = new ApiProvider();

// Create a Search CSV request.
$request = new SearchCsvRequest("/path/to/file.csv");

// Call the API and get the response.
$response = $provider->searchCsv($request);

// Handle the response.
foreach($response->getAdresses() as $current) {

	foreach($current->getColumns() as $k => $v) {
		// ...
	}

	$current->getCity();
	$current->getCityCode();
	$current->getContext();
	$current->getDistance();
	$current->getDistrict();
	$current->getHouseNumber();
	$current->getId();
	$current->getLabel();
	$current->getLatitude();
	$current->getLongitude();
	$current->getName();
	$current->getOldCity();
	$current->getOldCityCode();
	$current->getPostcode();
	$current->getScore();
	$current->getStreet();
	$current->getType();
}
```

Reverse CSV

```php
use WBW\Library\GouvPI\Adresse\Provider\ApiProvider;
use WBW\Library\GouvPI\Adresse\Request\ReverseCsvRequest;

// Create an API provider.
$provider = new ApiProvider();

// Create a Reverse CSV request.
$request = new ReverseCsvRequest("/path/to/file.csv");

// Call the API and get the response.
$response = $provider->reverseCsv($request);

// Handle the response.
foreach($response->getAdresses() as $current) {

	foreach($current->getColumns() as $k => $v) {
		// ...
	}

	$current->getCity();
	$current->getCityCode();
	$current->getContext();
	$current->getDistance();
	$current->getDistrict();
	$current->getHouseNumber();
	$current->getId();
	$current->getLabel();
	$current->getLatitude();
	$current->getLongitude();
	$current->getName();
	$current->getOldCity();
	$current->getOldCityCode();
	$current->getPostcode();
	$current->getScore();
	$current->getStreet();
	$current->getType();
}
```
