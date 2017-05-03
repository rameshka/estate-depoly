<?php

namespace App\Http\Controllers;

use App\Classes\Buyer;
use App\Classes\Seller;
use App\Classes\Eproperty;
use App\Classes\Financial;
use Illuminate\Http\Request;
use App\functions\functions;
use Illuminate\Support\Facades\Auth;
use App\User;


class LenderController extends Controller
{

 public function savePlan(Request $request){
     $this->validate($request, [
         'pname' => 'required',

     ]);

     $name = $request['pname'];
     $amount =$request['amount'];
     $years = $request['years'];
     $interest = $request['interest'];
     $frequency = $request['frequency'];
     $type = $request['type'];



     $user = Auth::user();
     $lender = (new functions())->getLenderID($user->email);

    $result = (new functions())->saveFinancialPlan($name,$amount,$years,$interest,$lender->lenderID, $frequency,$type);



     if ($result) {
         return redirect()->route('lenderdashboard')->with('message', 'successfully saved');
     } else {

         return redirect()->back()->withErrors(['Data saving Unsuccessful']);

     }

 }


 /*get Plan Data and View */

 public function myPlans(){

     $user = Auth::user();
     $lender = (new functions())->getLenderID($user->email);

     $result = (new functions())->getPlanData($lender->lenderID);

     $temparray = array();

     foreach ($result as $r) {




         $plan = new Financial($lender->name, $r->name, $r->amount, $r->years,$r->frequency, $r->interest,$r->type);

         $plan->setDate($r->date);
         $plan->setId($r->id);
         $plan->setLenderID($lender->lenderID);
         array_push($temparray, $plan);
     }


     return view('lender/myplans', compact('temparray'));

 }

 public function FinancialDetails($id){

     $plan = (new functions())->getPlan($id);

     return view('lender.plan',compact('plan'));

 }


}
?>