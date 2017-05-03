<?php
namespace App\Http\Controllers;
use App\Classes\Buyer;
use App\Classes\Seller;
use App\Classes\Eproperty;
use Illuminate\Http\Request;
use App\functions\functions;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;


class BuyerController extends Controller
{

    public function viewlegaladviosrs()
    {
        $result = (new functions())->getAdvisorData();

        return view('buyer/legaladvisors', compact('result'));

    }

    public function getAdvisorData($id)
    {
        $advisor = (new functions())->editAdvisorData($id);

        return view('buyer/advisor', compact('advisor'));

    }

    /*view all the auctions*/

    public function addAuctions(){


        $temparray= (new functions())->getAuctions();
        return view('buyer/auction',compact('temparray'));

    }

    public function getAnAuction($id){
        $user = Auth::user();
        $auctionID = $id;

        $email = $user->email;

        $name= (new functions())->getSellerNameAuctionBuyer($email)->name;
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
        return view('buyer/paywithpaypal',compact('send'));
    }


}