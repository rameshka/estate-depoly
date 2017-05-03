<?php
namespace App\Http\Controllers;
use App\Classes\Auction;
use Illuminate\Http\Request;
use App\functions\functions;
use App\Classes\Advisor;
use App\Classes\Person;
use App\Classes\Lender;
use App\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

////////////////////////////////save legal data/////////////////////////////////////////////////////////

    public function savelegal(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'ID' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'des' => 'required'

        ]);

        $name = $request['name'];
        $ID = $request['ID'];
        $telephone = $request['telephone'];
        $des = $request['des'];
        $email = $request['email'];


        $advisor = new Advisor($ID, $name, $email, $telephone, $des);
        $employeeID = "123456";

        $legalsave = new functions();

        $legalsave->saveAdvisor($advisor, $employeeID);

        if($legalsave)

        {
            return redirect()->route('admindashboard')->with('message', 'successfully saved');
        }

        else{

            return redirect()->back()->withErrors(['Data saving Unsuccessful']);

        }

    }

////////////////////////////////save legal data/////////////////////////////////////////////////////////

    public function savelender(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'ID' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'des' => 'required',
            'password' =>'required'

        ]);

        $name = $request['name'];
        $ID = $request['ID'];
        $telephone = $request['telephone'];
        $des = $request['des'];
        $email = $request['email'];
        $password = $request['password'];


        $lender = new Lender($ID, $name, $email, $telephone, $des);

        $user = Auth::user();
        $employeeID = (new functions())->getAdminID($user->email);

        /***
         * save money lender as user
         */
        $user= new User();
        $user->name = $name;
        $user->email= $email;
        $user->password = bcrypt($password);
        $user->emailverified = 0;
        $user->role ="lender";
        $user->save();

        $result = (new functions())->saveMoneyLender($lender, $employeeID->employeeID);

        if($result)

        {
            return redirect()->route('admindashboard')->with('message', 'successfully saved');
        }

        else{

            return redirect()->back()->withErrors(['Data saving Unsuccessful']);

        }

    }

    ////////////////////////////////save City details data/////////////////////////////////////////////////////////

    public function saveCity(Request $request){

        $this->validate($request, [
            'city' => 'required',
            'ID' => 'required'
        ]);

       $result = (new functions())->saveCitydata($request['city'],$request['ID']);

        if($result)

        {
            return redirect()->route('admindashboard')->with('success', ['successfully saved']);
        }

        else{

            return redirect()->back()->withErrors(['Data saving Unsuccessful']);

        }

    }

    ////////////////////////////////save auction details/////////////////////////////////////////////////////////

    public function saveAuction(Request $request){

        $this->validate($request, [

            'place' => 'required',
            'time' => 'required',
            'sDate' => 'required',
            'eDate' => 'required',
            'reg' => 'required'

        ]);

        $createdBy ="123456";
        $auction  = new Auction($createdBy,$request['place'],$request['time'],$request['sDate'],$request['eDate'],$request['reg']);

        $result = (new functions())->saveAuctiondata($auction);

        if($result)

        {
            return redirect()->route('admindashboard')->with('message', 'successfully saved');
        }

        else{

            return redirect()->back()->withErrors(['Data saving Unsuccessful']);

        }

    }

    public function getAdvisor(){

       $result = (new functions())->getAdvisorData();

       return view ('admin/advisorTable',compact('result'));
    }


    public function editUser($id){

        $advisor = (new functions())->editAdvisorData($id);

        return view ('admin/edit',compact('advisor'));
    }

    public function sendEdit(Request $request){
        $name = $request['name'];
        $ID = $request['ID'];
        $telephone = $request['telephone'];
        $des = $request['des'];
        $email = $request['email'];

        $advisor = new Advisor($ID, $name, $email, $telephone, $des);

        (new functions())->updateAdvisor($advisor);

    }


    //////////////////////////////////////////Money Lender///////////////////////////////////////////////////////////////////////

    public function getLender(){

        $result = (new functions())->getLenderData();

        return view ('admin/lenderTable',compact('result'));
    }


    public function editLender($id){

        $lender = (new functions())->editLenderData($id);

        return view ('admin/editLender',compact('lender'));
    }

    public function sendLender(Request $request){
        $name = $request['name'];
        $ID = $request['ID'];
        $telephone = $request['telephone'];
        $des = $request['des'];
        $email = $request['email'];

        $lender = new Lender($ID, $name, $email, $telephone, $des);

        $result=(new functions())->updateLender($lender);

        if($result)

        {
            return redirect()->route('admindashboard')->with('success', ['successfully saved']);
        }

        else{

            return redirect()->back()->withErrors(['Data saving Unsuccessful']);

        }

    }

    public function sendMessage(Request $request){
        $this->validate($request, [
            'role' => 'required',
            'message' => 'required',
        ]);

        (new functions())->saveMessage($request['message'],$request['role']);

    }
}
?>