<?php

class HomeController extends BaseController {


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
			$place->wholeAddress = $place->address . ' ' . $place->address->street. '' ;
			$place->googleStreet = "https://maps.googleapis.com/maps/api/streetview?size=400x400&location=".$place->address->latitude.",".$place->address->longitude."&key=AIzaSyCChESUvSyJpS8FOW5ZBMOMG3rAQ7BRgwM";
			$place->googleMap ="https://www.google.com/maps/embed/v1/view?key=AIzaSyCChESUvSyJpS8FOW5ZBMOMG3rAQ7BRgwM&center=".$place->address->latitude.",".$place->address->longitude."&zoom=16&maptype=satellite";
			$place->asking = (string) $place->zestimate->amount;
		}

// var_dump($data["searchResults"]);

		$data["zpid"] = $xml->response->results->zpid;
// Links
		// $data["homedetails"] = $xml->response->results->result->links->homedetails;
		// $data["graphsanddata"] = $xml->response->results->result->links->graphsanddata;
		// $data["mapthishome"] = $xml->response->results->result->links->mapthishome;
// Address
		// $data["streetAddress"] = $xml->response->results->result->address->street;
		$data["zipCode"] = $xml->response->results->result->address->zipcode;
		$data["city"] = $xml->response->results->result->address->city;
		$data["state"] = $xml->response->results->result->address->state;
		// $data["latitude"] = $xml->response->results->result->address->latitude;
		// $data["longitude"] = $xml->response->results->result->address->longitude;
// Details
		// $data["useCode"] = $xml->response->results->result->useCode;
		// $data["taxYear"] = $xml->response->results->result->taxAssessmentYear;
		// $data["tax"] = $xml->response->results->result->taxAssessment;
		// $data["yearBuilt"] = $xml->response->results->result->yearBuilt;
		// $data["lotSizeSqFt"] = $xml->response->results->result->lotSizeSqFt;
		// $data["FinishedSqFt"] = $xml->response->results->result->finishedSizeSqFt;
		// $data["bedrooms"] = $xml->response->results->result->bedrooms;
		// $data["bathrooms"] = $xml->response->results->result->bathrooms;
		// $data["lastSoldDate"] = $xml->response->results->result->lastSoldDate;
		// $data["lastSoldPrice"] = $xml->response->results->result->lastSoldPrice;


// Listing Price
		// $data["lastUpdated"] = $xml->response->results->result->zestimate->last-updated;

		// $data["last-updated"] = $xml->response->results->result->zestimate->last-updated;

		return View::make('results', $data);
	}




	public function propertyResult(){

		$zpid = Input::get('zpid');

		$data = array();

		$zwsid = "X1-ZWz1b1sywwr2ff_6ttia";

		$propertyUrl = 'http://www.zillow.com/webservice/GetUpdatedPropertyDetails.htm?zws-id='.$zwsid.'&zpid='.$zpid.'';

		$xml = simplexml_load_file($propertyUrl);
// Property Result

		$data["PropertyResult"] = $xml->response;

		// foreach ($data["PropertyResult"] as $place) {
		// 	$place->wholeAddress = $place->address . ' ' . $place->address->street. '' ;
		// 	$place->googleStreet = "https://maps.googleapis.com/maps/api/streetview?size=400x400&location=".$place->address->latitude.",".$place->address->longitude."&key=AIzaSyCChESUvSyJpS8FOW5ZBMOMG3rAQ7BRgwM";
		// 	$place->googleMap ="https://www.google.com/maps/embed/v1/view?key=AIzaSyCChESUvSyJpS8FOW5ZBMOMG3rAQ7BRgwM&center=".$place->address->latitude.",".$place->address->longitude."&zoom=16&maptype=satellite";
		// 	$place->asking = (string) $place->zestimate->amount;
		// }

// Address
		$data["streetAddress"] = $xml->response->address->street;
		$data["zipCode"] = $xml->response->address->zipcode;
		$data["city"] = $xml->response->address->city;
		$data["state"] = $xml->response->address->state;
		$data["latitude"] = $xml->response->address->latitude;
		$data["longitude"] = $xml->response->address->longitude;

		$data["bedrooms"] = $xml->response->editedFacts->bedrooms;
		$data["bathrooms"] = $xml->response->editedFacts->bathrooms;
		$data["yearBuilt"] = $xml->response->editedFacts->yearBuilt;
		$data["yearUpdated"] = $xml->response->editedFacts->yearUpdated;
		$data["numFloors"] = $xml->response->editedFacts->numFloors;
		$data["basement"] = $xml->response->editedFacts->basement;
		$data["roof"] = $xml->response->editedFacts->roof;
		$data["view"] = $xml->response->editedFacts->view;
		$data["parkingType"] = $xml->response->editedFacts->parkingType;
		$data["heatingSource"] = $xml->response->editedFacts->heatingSource;
		$data["heatingSystem"] = $xml->response->editedFacts->heatingSystem;

		$data["rooms"] = $xml->response->editedFacts->rooms;

		$data["neighborhood"] = $xml->response->neighborhood;
		$data["schoolDistrict"] = $xml->response->schoolDistrict;
		$data["elementarySchool"] = $xml->response->elementarySchool;
		$data["middleSchool"] = $xml->response->middleSchool;


		$data["googleStreet"] = "https://maps.googleapis.com/maps/api/streetview?size=400x400&location=".$data["latitude"] .",".$data["longitude"]."&key=AIzaSyCChESUvSyJpS8FOW5ZBMOMG3rAQ7BRgwM";
		// $googleMap ="https://www.google.com/maps/embed/v1/view?key=AIzaSyCChESUvSyJpS8FOW5ZBMOMG3rAQ7BRgwM&center=".$data["latitude"] .",".$data["longitude"]."&zoom=16&maptype=satellite";


		return View::make('propertyResult', $data);

	}

}




