<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function searchFunction(){

		$zipSearch = Input::get('zip');

		$data = array();

		$zwsid = "X1-ZWz1b1sywwr2ff_6ttia";

		$url = 'http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id='.$zwsid.'&address='.$zipSearch.'&citystatezip='.$zipSearch;
		$xml = simplexml_load_file($url);


		return View::make('home', $data);
	}



	public function showResults(){

		$zipSearch = Input::get('zip');

		$data = array();

		$zwsid = "X1-ZWz1b1sywwr2ff_6ttia";


		$url = 'http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id='.$zwsid.'&address='.$zipSearch.'&citystatezip='.$zipSearch.'';
		$xml = simplexml_load_file($url);
// Search Results
		$data["searchResults"] = $xml->response->results->result;

		foreach ($data["searchResults"] as $place) {
			$place->wholeAddress = $place->address . ' ' . $place->address->street;
			$place->googleStreet = "https://maps.googleapis.com/maps/api/streetview?size=400x400&location=".$place->address->latitude.",".$place->address->longitude."&key=AIzaSyCChESUvSyJpS8FOW5ZBMOMG3rAQ7BRgwM";
		}

// var_dump($data["searchResults"]);

		$data["zpid"] = $xml->response->results->zpid;
// Links
		$data["homedetails"] = $xml->response->results->result->links->homedetails;
		$data["graphsanddata"] = $xml->response->results->result->links->graphsanddata;
		$data["mapthishome"] = $xml->response->results->result->links->mapthishome;
// Address
		$data["streetAddress"] = $xml->response->results->result->address->street;
		$data["zipCode"] = $xml->response->results->result->address->zipcode;
		$data["city"] = $xml->response->results->result->address->city;
		$data["state"] = $xml->response->results->result->address->state;
		$data["latitude"] = $xml->response->results->result->address->latitude;
		$data["longitude"] = $xml->response->results->result->address->longitude;
// Details
		$data["useCode"] = $xml->response->results->result->useCode;
		$data["taxYear"] = $xml->response->results->result->taxAssessmentYear;
		$data["tax"] = $xml->response->results->result->taxAssessment;
		$data["yearBuilt"] = $xml->response->results->result->yearBuilt;
		$data["lotSizeSqFt"] = $xml->response->results->result->lotSizeSqFt;
		$data["FinishedSqFt"] = $xml->response->results->result->finishedSizeSqFt;
		$data["bedrooms"] = $xml->response->results->result->bedrooms;
		$data["bathrooms"] = $xml->response->results->result->bathrooms;
		$data["lastSoldDate"]= $xml->response->results->result->lastSoldDate;

		// return($data["latitude"]);

		// $data["lastUpdated"] = $xml->response->results->result->zestimate->last-updated;
		// $data["askingPrice"] = $xml->response->results->result->zestimate->amount;


		return View::make('results', $data);
	}





	public function propertyResult(){

		$zipSearch = Input::get('zip');

		$data = array();

		$zwsid = "X1-ZWz1b1sywwr2ff_6ttia";

		$url = 'http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id='.$zwsid.'&address='.$zipSearch.'&citystatezip='.$zipSearch.'';
		$xml = simplexml_load_file($url);
// Search Results
		$data["searchResults"] = $xml->response->results;





		}

	}




