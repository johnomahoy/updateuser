<?php
//Test Connection
require_once("isdk.php");	
$app = new iSDK;

if( $app->cfgCon("kf342")){ 
//Get the data
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$WebsiteUserId = $_REQUEST['WebsiteUserId'];
	$TC = $_REQUEST['tc'];
//Other fields
	$street = $_REQUEST['street'];  
	$postalcode = $_REQUEST['postalcode'];
	$country = $_REQUEST['country']; 
	$city = $_REQUEST['city']; 
	$FacebookHandURL = $_REQUEST['FacebookHandURL'];

//Fetch Data
	$returnFields = array('Id');
	$contacts = $app->dsFind('Contact',1,0,'Website',$WebsiteUserId,$returnFields);
	
	foreach($contacts as $contact=>$key){
		foreach($key as $contact_id){
			$contact_id = $contact_id;
		}
	}
	echo $contact_id;

	//-----> Please follow this array format and array name which can be found below --> firstname,lastname,email,phonenumber,websiteuserID,postalcode,country,city,street
	//----> array format-> $store = array("Jerbie","test","email@test.com","092612356","60","9200","singa","citytest","streettesting2");

//Loop the data 
	$counter = 1;
	$arr;
	$counter;
	foreach($store as $stores){
		$arr[$counter] = $stores;
		$counter++;
	}
	$firstname = $arr[1];
	$lastname = $arr[2];
	$email = $arr[3];
	$phone = $arr[4];
	$website = $arr[5];
	$postalcode = $arr[6];
	$country = $arr[7];
	$city = $arr[8];
	$streetaddress = $arr[9];
	
//Update Contact
	$conDat = array('FirstName' => $firstname,
	'LastName' => $lastname,
	'Email' => $email,
	'Phone1' => $phone,
	'Website' => $website,
	'PostalCode' => $postalcode,
	'Country' => $country,
	'City' => $city,
	'StreetAddress1' => $streetaddress);
	

	$conID = $app->updateCon($contact_id, $conDat);
	echo $conID; 
} 
?>