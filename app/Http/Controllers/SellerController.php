<?php

namespace App\Http\Controllers;

use App\Classes\Buyer;
use App\Classes\Financial;
use App\Classes\Seller;
use App\Classes\Eproperty;
use Illuminate\Http\Request;
use App\functions\functions;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;


class SellerController extends Controller
{


    public function sellerRegister(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'password' => 'required',
            'passwordreenter' => 'required|same:password',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $username = $request['username'];
        $email = $request['email'];
        $telephone = $request['telephone'];
        $password = $request['password'];

        $user = new User();
        $user->name = $username;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->emailverified = 0;
        $user->role = "seller";
        $user->save();


        $buyer = new Buyer($username, $email);

        $buyerID = (new functions())->saveBuyer($buyer);

        $seller = new Seller($username, $email, $telephone, $buyerID);
        //echo $seller->getTelephone();

        (new functions())->saveSeller($seller);

        //authenticating the user
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {

            return redirect()->route('sellerdashboard');
        } else {
            return redirect()->back()->withErrors(['authenticationFailed', 'Please re-enter your password']);
        }


    }

    public function saveProperty(Request $request)
    {
        $this->validate($request, [
            'city' => 'required',
            'beds' => 'required',
            'baths' => 'required',
            'landarea' => 'required',
            'floorarea' => 'required',
            'telephone' => 'required',
            'price' => 'required',
            'hnumber' => 'required',
            'street' => 'required',
            'closecity' => 'required',
            'des' => 'required',
            'plans'=>'required'

        ]);


        $user = Auth::user();
        $sellerID = (new functions())->getSellerID($user->email);

        $property = new Eproperty($request['city'], $request['beds'], $request['baths'], $request['landarea'], $request['floorarea'], $request['telephone'], $request['price'],
            $request['hnumber'], $request['street'], $request['closecity'], $sellerID, $request['longitude'], $request['latitude'], $request['des'],$request['plans']);

        $id = (new functions())->savePropertyDetail($property);

        $cID = (new functions)->getCityID($request['city']);

        $state = (new functions())->saveLocation($id, $cID, $property);

        if ($state) {
            return redirect()->route('sellerdashboard')->with('message', 'successfully saved');
        } else {

            return redirect()->back()->withErrors(['Data saving Unsuccessful']);

        }
    }

    /*
     * to retrieve details of advisors from database
     * */

    public function viewlegaladvisors()
    {
        $result = (new functions())->getAdvisorData();

        return view('seller/legaladvisors', compact('result'));

    }

    public function getAdvisorData($id)
    {
        $advisor = (new functions())->editAdvisorData($id);

        return view('seller/advisor', compact('advisor'));

    }

    /*
     * to retreive myadvertisements from the database
     * */


    public function viewadvertisements()
    {
        $user = Auth::user();
        $sellerID = (new functions())->getSellerID($user->email);

        $result = (new functions())->getPropertiesData($sellerID);

        $temparray = array();

        foreach ($result as $r) {

            $location = (new functions())->getLocationData($r->propertyID);
            $city = (new functions())->getCityName($location->cityID);

            $property = new Eproperty($city, $r->bedrooms, $r->bathrooms, $r->landarea, $r->floorarea, $r->telephone, $r->price, $location->number,
                $location->street, $location->closecity, $sellerID, $location->longitude, $location->latitude, $r->description,$r->plan);

            $property->setPropertyID($r->propertyID);
            $property->setDate($r->date);
            array_push($temparray, $property);
        }


        return view('seller/advertisements', compact('temparray'));
    }

/*
 * get specific house detail to view*/

    public function getHouseData($propertyid)
    {


        $property = $this->retrievePropertyData($propertyid);


        return view('seller/house',compact('property'));

    }

    /*retrieve data to view property for editing*/

    public function editProperty($id){

      $property =  $this->retrievePropertyData($id);

      return view('seller/editproperty',compact('property'));


    }
    /*common function retrive property data*/


    public function retrievePropertyData($propertyid){
        $user = Auth::user();
        $sellerID = (new functions())->getSellerID($user->email);

        $r = (new functions())->getPropertyData($propertyid);


        $location = (new functions())->getLocationData($r->propertyID);
        $city = (new functions())->getCityName($location->cityID);
        $property = new Eproperty($city, $r->bedrooms, $r->bathrooms, $r->landarea, $r->floorarea, $r->telephone, $r->price, $location->number,
            $location->street, $location->closecity, $sellerID, $location->longitude, $location->latitude, $r->description,$r->plan);

        $property->setPropertyID($r->propertyID);
        $property->setDate($r->date);

        return $property;


    }

    /*
     * update property details*/

    public function updateProperty(Request $request){
        $this->validate($request, [
            'beds' => 'required',
            'baths' => 'required',
            'landarea' => 'required',
            'floorarea' => 'required',
            'telephone' => 'required',
            'price' => 'required',
            'des' => 'required'

        ]);

        $propertyID =$request['propertyID'];
        $beds =$request['beds'];
        $baths=$request['baths'];
        $tele=$request['telephone'];
        $des=$request['des'];
        $land=$request['landarea'];
        $floor=$request['floorarea'];
        $price=$request['price'];

        $result =(new functions())->UpdatePropertyData($propertyID,$beds,$baths,$tele,$des,$land,$floor,$price);
        $property = $this->retrievePropertyData($propertyID);

        if ($result >0) {

            return redirect()->route('myadvertisement', $propertyID)->with('message', 'successfully Updated');

        }
        else if($result ==0){
            return redirect()->route('sellerdashboard')->with('message', 'Nothing Updated');
        }

        else {

            return redirect()->route('sellerdashboard')->withErrors(['Data saving Unsuccessful']);

        }

    }

    public function Plans()
    {



        $result = (new functions())->getAllPlans();

        $temparray = array();

        foreach ($result as $r) {

            $name = (new functions())->getLenderName($r->lenderID);

            $plan = new Financial($name, $r->name, $r->amount, $r->years, $r->frequency, $r->interest, $r->type);

            $plan->setDate($r->date);
            $plan->setId($r->id);
            array_push($temparray, $plan);
        }



            return view('seller/property', compact('temparray'));


    }

    public function messageRequest(){

        $user = Auth::user();

        // $email = $user->email;
        $role =$user->role;
        $count = $user->msgID;

       $result = (new functions())->getMessages($role,$count);

        echo $result;

    }

    public function messageAll(){
        $user = Auth::user();

        // $email = $user->email;
        $role =$user->role;
         $val = 0;
         $count = $user->msgID;


        $result = (new functions())->getMessages($role,$val);

        if ($val<$count)
        {

        }

        echo $result;
    }

    /*add and view auction*/
    public function addAuctions(){


        $temparray= (new functions())->getAuctions();
        return view('seller/auction',compact('temparray'));




    }

    public function getAnAuction($id){
        $user = Auth::user();
        $auctionID = $id;

        $email = $user->email;

        $name= (new functions())->getSellerNameAuction($email)->name;
        $fee = (int)(new functions()) -> getAuctionData($auctionID)->fee;

        $sizeofID=4;
        $Id_part='';
        $count=0;

        while ( $count < $sizeofID) {
            $random_digit = mt_rand(0, 9);

            $Id_part .= $random_digit;
            $count++;
        }

        $stamp = date("Ymdhis");
        $key = "$stamp.$Id_part";
        $key = str_replace(".", "", "$key");

        $invoiceID =$key;
        $date =  date("Y-m-d");

        $result = (new functions())->getSuccessAuctionRegistratoin($email,$auctionID);



        $send = array($name, $email,$fee,$invoiceID,$date,$auctionID,$result);
        return view('seller/paywithpaypal',compact('send'));
    }



}