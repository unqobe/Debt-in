<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribers;
use Illuminate\Support\Str;
use Session;
use Mail;


class MyMobileAPI
{

  public function __construct() {
      $this->url = 'http://www.mymobileapi.com/api5/http5.aspx';
      $this->username = 'rosp'; //your login username
      $this->password = '1Bongumusa/.1'; //your login password
  }

  public function checkCredits() {
      $data = array(
          'Type' => 'credits',
          'Username' => $this->username,
          'Password' => $this->password
      );
      $response = $this->querySmsServer($data);
      // NULL response only if connection to sms server failed or timed out
      if ($response == NULL) {
          return '???';
      } elseif ($response->call_result->result) {
    echo '</br>Credits: ' .  $response->data->credits;
          return $response->data->credits;
      }
  }

 public function sendSms($mobile_number, $msg) {
      $data = array(
          'Type' => 'sendparam',
          'Username' => $this->username,
          'Password' => $this->password,
          'numto' => $mobile_number, //phone numbers (can be comma seperated)
          'data1' => $msg, //your sms message

      );
      $response = $this->querySmsServer($data);

  }

  // query API server and return response in object format
  private function querySmsServer($data, $optional_headers = null) {

      $ch = curl_init($this->url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // prevent large delays in PHP execution by setting timeouts while connecting and querying the 3rd party server
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 2000); // response wait time
      curl_setopt($ch, CURLOPT_TIMEOUT_MS, 2000); // output response time
      $response = curl_exec($ch);
      if (!$response) return NULL;
      else return 'null';
  }


}




class EmailController extends Controller
{
    public function send_mail(Request $request){

           $data = array('messages' =>$request->actual_message, 'email' =>$request->email, 'name' => $request->fname, 'surname' => $request->lname);

           Mail::send('Emails/no-reply', $data, function($message) use ($data)
           {
          $message->to($data['email'], '')->subject
             ('We have recieved your message');
          $message->from('info@capabilityhr.co.za','Debt-in');
          });

          return response()->json("success");
    }

    public function subscribe(Request $request){
            $this->validate($request, [

              'email_subscribe' => 'required|unique:subscribers'
            ]);

            $create = Subscribers::create([
              'fullname' => '',
              'email_subscribe' => $request->email_subscribe
            ]);

            $data = array('email' =>$request->email_subscribe);

            Mail::send('Emails/subscribe', $data, function($message) use ($data)
            {
           $message->to($data['email'], '')->subject
              ('Successfully subscribed');
           $message->from('info@capabilityhr.co.za','Debt-in');
           });

            return back()->with('success_message','Subscribed');
    }


    public function sendSmsTest(Request $request){
      $phone = $request->ID;
      $rand = mt_rand(10000,100000);
      $message = 'Debt-in: Your online one time pin to login to your portal is '.$rand;
      $test = new MyMobileAPI();
      $test->sendSms($phone,$message); //Send SMS

      session::put('random',$rand);
      session::put('number',$phone);


      Session::save();
       return response()->json($rand);
    }

    public function resend(){
      if(session::has('random')){
       $rand = Session::get('random');
       $phone = Session::get('number');
       $message = 'Debt-in: Your online one time pin to login to your portal is '.$rand;
       $test = new MyMobileAPI();
       $test->sendSms($phone,$message); //Send SMS
       return back()->with('msg','success');
      }else{
        return '404';
      }
    }


}