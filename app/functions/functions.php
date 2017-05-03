<?php

namespace App\functions;

use GuzzleHttp\Psr7\Request;
use View, Input, Redirect;
use DB;
use App\ForgotPass;
use App\Classes\Advisor;
use App\Classes\Lender;
use App\Classes\Buyer;
use App\Classes\Seller;

class functions
{


    function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    function checkUserVerification($mail)
    {
        if ((DB::table('users')->where('email', $mail)->value('emailverified')) === 0) {


            return true;
        } else {
            return false;
        }
    }

    function verification($mail)
    {
        DB::table('users')
            ->where('email', $mail)
            ->update(['emailverified' => 1]);
        return true;
    }

    function addNewPass($email, $pass)
    {

        DB::table('users')
            ->where('email', $email)
            ->update(['password' => $pass]);
        return true;

    }

    function changeName($email, $username)
    {
        DB::table('users')
            ->where('email', $email)
            ->update(['name' => $username]);
        return true;


    }

    function getID($email)
    {
        $user = DB::table('users')->where('email', $email)->pluck('id');

        return $user[0];


    }


    function checkEmail($email)
    {

        $user = DB::table('users')->where('email', $email)->pluck('id');

        if ($user[0] > 0) {

            /////////////valide user to send email//////////////////

            return true;

        } else {

            return false;

        }

    }


    function checkRandom($value)
    {

        $user = DB::table('forgot')->where('random', $value)->pluck('id');

        if ($user[0] > 0) {

            /////////////valide user to send email//////////////////

            return true;

        } else {

            return false;

        }

    }

    function addRandom($email, $value)
    {

        DB::table('forgot')->insert(
            ['email' => $email, 'random' => $value]
        );

    }

    function getEmail($value)
    {

        $user = DB::table('forgot')->where('random', $value)->pluck('email');

        return $user[0];
    }

    /////////////select login view, return role //////////////////

    function getLoginView($email)
    {

        $role = DB::table('users')->where('email', $email)->value('role');

        return $role;
    }

    /////////////save advisor details//////////////////
    function saveAdvisor($advisor, $employeeID)
    {

        $result = DB::table('legaladvising')->insert([
            ['legalID' => $advisor->getLegalID(), 'name' => $advisor->getName(), 'email' => $advisor->getEmail(), 'description' => $advisor->getDescription(), 'telephone' => $advisor->getTelephone(), 'createdBy' => $employeeID]
        ]);

        if ($result) {
            return true;
        } else {
            return false;

        }


    }

    /////////////save Money Lender/////////////////////////////////////

    function saveMoneyLender($lender, $employeeID)
    {

        $result = DB::table('lender')->insert([
            ['lenderID' => $lender->getLenderID(), 'name' => $lender->getName(), 'email' => $lender->getEmail(), 'description' => $lender->getDescription(), 'telephone' => $lender->getTelephone(), 'createdBy' => $employeeID]
        ]);

        DB::table('LenderReview')->insert([['lenderID' => $lender->getLenderID()]]);
        if ($result) {

            return true;
        } else {

            return false;
        }

    }

    /*  function saveBuyer($buyer){

          $result = DB::table('buyer')->insert([
              ['name' => $buyer->getName(), 'email' => $buyer->getEmail()]
          ]);

      }


  */

    /////////////////////////save city details to the database/////////////////////////////////////////////////
    function saveCitydata($city, $id)
    {

        $result = DB::table('city')->insert([['cityID' => $id, 'city' => $city]]);

        if ($result) {
            return true;

        } else {

            return false;
        }

    }


    /////////////////////////save auction details to the database/////////////////////////////////////////////////
    function saveAuctiondata($auction)
    {

        $result = DB::table('auction')->insert([
            ['place' => $auction->getPlace(), 'time' => $auction->getTime(), 'startDate' => $auction->getSDate(), 'endDate' => $auction->getEDate(), 'createdBy' => $auction->getCreatedBy(),'fee'=>$auction->getReg()]
        ]);
        $this->saveMessage("New Auction Available","AL");

        if ($result) {

            return true;

        } else {

            return false;
        }



    }

    /////////////////////////////send Advisor details to the front////////////////////////////////////////////////

    function getAdvisorData()
    {

        $advisors = DB::table('legaladvising')->select('legalID', 'name', 'email', 'telephone', 'createdBy', 'description')->get();


        $result = array();

        foreach ($advisors as $user) {

            $tadvisor = new Advisor($user->legalID, $user->name, $user->email, $user->telephone, $user->description);


            $tadvisor->setCreatedBy($user->createdBy);

            array_push($result, $tadvisor);
        }

        return $result;

    }

    ///////////////////////////return editing advisor data to the form/////////////////////////////////////
    function editAdvisorData($id)
    {

        $users = DB::table('legaladvising')->where('legalID', '=', $id)->get();


        foreach ($users as $user) {
            $tadvisor = new Advisor($user->legalID, $user->name, $user->email, $user->telephone, $user->description);

        }


        return $tadvisor;
    }


    ///////////////////////////update advisor data/////////////////////////////////////
    function updateAdvisor($advisor)
    {

        DB::table('legaladvising')->where('legalID', $advisor->getLegalID())->update(['name' => $advisor->getName(), 'email' => $advisor->getEmail(), 'telephone' => $advisor->getTelephone(), 'description' => $advisor->getDescription()]);


    }

    /////////////////////////////////////////Get Lender Data///////////////////////////////////////////////////////

    function getLenderData()
    {

        $lenders = DB::table('lender')->select('lenderID', 'name', 'email', 'telephone', 'createdBy')->get();


        $result = array();

        foreach ($lenders as $user) {

            $tlender = new Lender($user->lenderID, $user->name, $user->email, $user->telephone, "");


            $tlender->setCreatedBy($user->createdBy);

            array_push($result, $tlender);
        }

        return $result;

    }

    function editLenderData($id)
    {

        $users = DB::table('lender')->where('lenderID', '=', $id)->get();


        foreach ($users as $user) {
            $tlender = new Lender($user->lenderID, $user->name, $user->email, $user->telephone, $user->description);

        }


        return $tlender;
    }

    function updateLender($lender)
    {

       $result= DB::table('lender')->where('lenderID', $lender->getLenderID())->update(['name' => $lender->getName(), 'email' => $lender->getEmail(), 'telephone' => $lender->getTelephone(), 'description' => $lender->getDescription()]);

        if ($result) {

            return true;

        } else {

            return false;
        }

    }


    ///////////////////////////////////save Message in the database//////////////////////////////////////

    function saveMessage($message ,$role)
    {

        DB::table('message')->insert([
            ['content' => $message, 'createdBy' => 123456,'audience'=>$role]
        ]);
    }

    /**
     * *******************************Seller Function
     */


    /**
     * save seller as buyer first
     */
    function saveBuyer($buyer)
    {

        DB::table('buyer')->insert(['name' => $buyer->getName(), 'email' => $buyer->getEmail()]);

        return DB::table('buyer')->where('email', $buyer->getEmail())->value('buyerID');
    }

    /**
     * save seller as seller
     */

    function saveSeller($seller)
    {


        DB::table('seller')->insert(['name' => $seller->getName(), 'email' => $seller->getEmail(), 'telephone' => $seller->getTelephone(), 'buyerID' => $seller->getBuyerID()]);


    }

    /**
     * save property details in the database
     **/
    function savePropertyDetail($property)
    {
        return DB::table('property')->insertGetId(['sellerID' => $property->getSellerID(), 'bedrooms' => $property->getBeds(), 'bathrooms' => $property->getBaths(),
            'floorarea' => $property->getFloorarea(),
            'landarea' => $property->getLandarea(), 'price' => $property->getPrice(),
            'telephone' => $property->getTelephone(), 'description' => $property->getDes(), 'plan' => $property->getPlan()

        ]);

    }

    /*
    get sellerID
    * */

    function getSellerID($email)
    {
        return DB::table('seller')->where('email', $email)->value('sellerID');

    }

    /*get Details*/
    function getLenderID($email)
    {
        return DB::table('lender')->where('email', $email)->get()->first();

    }


    /*
     * save Location of the property
     * */
    function saveLocation($id, $cID, $property)
    {
        $temp = DB::table('location')->insert(['propertyID' => $id, 'cityID' => $cID, 'number' => $property->getHnumber(),
            'street' => $property->getStreet(),
            'closecity' => $property->getClosecity(), 'longitude' => $property->getLongitude(),
            'latitude' => $property->getLatitude()]);

        if ($temp) {

            return true;
        } else {
            return false;
        }
    }

    /*
     * get CityID
     * */

    function getCityID($city)
    {
        return DB::table('city')->where('city', $city)->value('cityID');
    }

    /*
     * get city name*/

    function getCityName($id)
    {
        return DB::table('city')->where('cityID', $id)->value('city');
    }


    /*
     * get all the property data
     * */

    function getPropertiesData($id)
    {

        $property = DB::table('property')->select('propertyID', 'bedrooms', 'bathrooms', 'floorarea', 'landarea', 'price', 'telephone', 'description', 'date', 'plan')->where('sellerID', $id)->get();

        return $property;


    }

    /*get location data of specific property*/
    function getLocationData($id)
    {
        return DB::table('location')->select('cityID', 'number', 'street', 'closecity', 'longitude', 'latitude')->where('propertyID', $id)->get()->first();

    }

    /*get single property data*/
    function getPropertyData($id)
    {

        return $property = DB::table('property')->select('propertyID', 'sellerID', 'bedrooms', 'bathrooms', 'floorarea', 'landarea', 'price', 'telephone', 'description', 'plan', 'date')->where('propertyID', $id)->get()->first();
    }

    /*update property data*/

    function UpdatePropertyData($propertyID, $beds, $baths, $tele, $des, $land, $floor, $price)
    {

        $result = DB::table('property')->where('propertyID', $propertyID)->update(['bedrooms' => $beds, 'bathrooms' => $baths, 'floorarea' => $floor, 'landarea' => $land, 'price' => $price, 'telephone' => $tele, 'description' => $des]);

        return $result;
    }

    function ajaxCity($q)
    {

        $result = DB::table('city')->select('city', 'id', 'cityID')->where('city', 'like', $q . '%')->get();


        foreach ($result as $r) {

            $name = $r->city;


            $b_username = '<strong>' . $q . '</strong>';
            $final_username = str_ireplace($q, $b_username, $name);

            ?>
            <div class="show" align="left">
                <span><?php echo $final_username; ?></span><br/>
            </div>
            <?php

        }
    }

    function getCityProperty($city)
    {

        $result = $this->getCityID($city);

        return DB::table('location')->select('propertyID', 'cityID')->where('cityID', $result)->get();

    }

    function getSeller_name($id)
    {

        return DB::table('seller')->select('name')->where('sellerID', $id)->get()->first();


    }

    /*return seller name from email*/

    function getSellerNameAuction($email){
        return DB::table('seller')->select('name')->where('email', $email)->get()->first();

    }

    /*return employee id of the admin*/

    function getAdminID($email)
    {

        return DB::table('admin')->select('employeeID')->where('email', $email)->get()->first();
    }

    /*save financial plan*/

    function saveFinancialPlan($name, $amount, $years, $interest, $lenderID, $frequency, $type)
    {

        $result = DB::table('financialplan')->insert(['name' => $name, 'lenderID' => $lenderID, 'amount' => $amount, 'years' => $years, 'frequency' => $frequency,
            'interest' => $interest, 'type' => $type]);


        if ($result) {
            return true;
        } else {
            return false;

        }


    }

    /*Get Plan data from the database of a Lender*/

    function getPlanData($id)
    {

        $plan = DB::table('financialplan')->select('id', 'name', 'lenderID', 'amount', 'years', 'frequency', 'interest', 'date', 'type')->where('lenderID', $id)->get();

        return $plan;

    }

    /*Get Plan data from the database when the id is given*/

    function getPlan($id)
    {

        $plan = DB::table('financialplan')->select('id', 'name', 'lenderID', 'amount', 'years', 'frequency', 'interest', 'date', 'type')->where('id', $id)->get();

        return $plan;

    }

    /*get all the financial plans*/
    function getAllPlans()
    {
        $plans = DB::table('financialplan')->select('id', 'name', 'lenderID', 'amount', 'years', 'frequency', 'interest', 'date', 'type')->get();

        return $plans;

    }

    /*get Lender Name*/

    function getLenderName($id)
    {
        return DB::table('lender')->where('lenderID', $id)->value('name');

    }

    /*update lender reviews*/

    function rateLender($lenderID, $rate)
    {
        $plans = DB::table('lenderReview')->select('rate', 'count')->where('lenderID', $lenderID)->get()->first();

        $irate = (int)$plans->rate;
        $count = (int)$plans->count;

        $trate = $irate + (int)$rate;
        $tcount = $count + 1;

        DB::table('lenderReview')->where('lenderID', $lenderID)->update(['rate' => $trate, 'count' => $tcount]);


        return true;


    }


    /*function getMessageCount($email){
      return  DB::table('users')->where('email', $email)->value('msgID');
    }*/

    /*Get messages to the view*/
    function getMessages( $role, $count)
    {


        if ($role == "seller") {
           return  DB::table('message')->where('msgID','>', $count)->where(function($query)
            {
                $query->where('audience','AL')
                    ->orWhere('audience','S')
                    ->orWhere('audience','SB');
            })->orderBy('msgID', 'desc')->get();


        } elseif ($role == "buyer") {

          return  DB::table('message')->where('msgID','>', $count)->where(function($query)
            {
                $query->where('audience','AL')
                    ->orWhere('audience','B')
                    ->orWhere('audience','SB');
            })->orderBy('msgID', 'desc')->get();


        } else if ($role == "lender") {

          return  DB::table('message')->where('msgID','>', $count)->where(function($query)
            {
                $query->where('audience','AL')
                    ->orWhere('audience','M');
            })->orderBy('msgID', 'desc')->get();

        }
    }

    /*get auctions*/
    function getAuctions(){

        return DB::table('auction')->select('auctionID','place','startDate','endDate','time','createdBy','status')->orderBy('auctionID', 'desc')->get();
    }

    /*get auction data*/

    function getAuctionData($id){
        return DB::table('auction')->select('fee')->where('auctionID',$id)->get()->first();
    }

    /*save to invoice*/
     function saveInvoice($invoiceID,$type,$email,$fee,$auctionID){
         DB::table('bill')->insert(
             ['invoiceID' => $invoiceID, 'type' => $type,'useremail'=>$email,'fee'=>$fee,'auctionID'=>$auctionID]
         );
     }

     function getSuccessAuctionRegistratoin($email,$auctionID){


         $result = DB::table('bill')->select('invoiceID')->where('useremail',$email)->where('auctionID',$auctionID )->get()->first();

         if($result!= null){
             return "success";
         }

         else{
             return "not success";
         }
     }

     /*get buyer details for auction*/
     function getSellerNameAuctionBuyer($email){

             return DB::table('buyer')->select('name')->where('email', $email)->get()->first();


     }

}

?>