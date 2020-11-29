<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Smsprice;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use App\User;
use App\Bulkmessage;

use DB;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.message.index');
    }
public function UploadFile()
{ 
 
 $bulk =Bulkmessage::groupBy('listname')->get();
                
 
return view('admin.message.uploadnumberlist')->with('bulk',$bulk);

}
    /**
     * Display to all list of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendsmstoalluser()
    {
        $msgsub = Message::where('sms_type','Rates')->pluck('message');
     
        $msg = str_replace('\r\n', "\r\n", $msgsub);

        $msg= str_replace (array('"','"','[', ']'), '' ,  $msg);
        $user=User::All()->pluck('contact_no')->take(5);

      $notification = Message::where('sms_type','Offers')->pluck('message');
       $notification = str_replace (array('"','"','[', ']'), '' , $notification);
        return view('admin.message.sendsmstoalluser')->with('msg',$msg)->with('user',$user)->with('notification',$notification);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
          
        $user = "wish"; 
       
        $sender_id ="STKTRD"; // optional (compulsory in transactional sms) 
        $msg = $request['message']; 
        $to=$request['number'];
        
        $key="C51B0623-05F1-419E-B192-1A80EF2E149F";
        $smstype="TextSMS";
         $route ="Transactional";
        // $api = "http://sms.wishsolution.com/api/sms/SendSMS.aspx?usr=wish&key=C51B0623-05F1-419E-B192-1A80EF2E149F&smstype=TextSMS&to=7503020572&msg=hi&rout=Transactional&from=STKTRD"  ;
 
        $URL = 'http://sms.wishsolution.com/api/sms/SendSMS.aspx?'; 
        $ch = curl_init($URL);
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');        
        curl_setopt($ch, CURLOPT_POSTFIELDS, "usr=$user&key=$key&to=$to&msg=$msg&rout=$route&smstype=$smstype&from=STKTRD");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
       
         curl_close($ch);
         $history = new Smsprice;
         $history->message =$request['message'];
         $history->user_type=$request['number'];
         $dt = Carbon::now();
            $newDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $dt)
                ->format('d-m-Y'); 
         
          $history->date= $newDate; 
        
          $history->time =$dt->toTimeString();
          $history->save();
        
        return back()->with('success','Send SMS successfully');    
    
    }

   /**
    * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendtoalluser(Request $request)
    {
      
          

        $ar = ['7503020572', '7836860011', '8630211580'];

            for ($i=0, $len=count($ar); $i<$len; $i++) {
                
                 $user = "wish"; 
       
                $sender_id ="STKTRD"; // optional (compulsory in transactional sms) 
                $msg = $request['message']; 
                 $to=$ar[$i];

                
                $key="C51B0623-05F1-419E-B192-1A80EF2E149F";
                $smstype="TextSMS";
                 $route ="Transactional";
                // $api = "http://sms.wishsolution.com/api/sms/SendSMS.aspx?usr=wish&key=C51B0623-05F1-419E-B192-1A80EF2E149F&smstype=TextSMS&to=7503020572&msg=hi&rout=Transactional&from=STKTRD"  ;
         
                $URL = 'http://sms.wishsolution.com/api/sms/SendSMS.aspx?'; 
                $ch = curl_init($URL);
                
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');        
                curl_setopt($ch, CURLOPT_POSTFIELDS, "usr=$user&key=$key&to=$to&msg=$msg&rout=$route&smstype=$smstype&from=STKTRD");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
               
                curl_close($ch);



            }
         $history = new Smsprice;
         $history->message =$request['message'];
         $history->user_type='All Users';
         $dt = Carbon::now();
            $newDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $dt)
                ->format('d-m-Y'); 
         
          $history->date= $newDate; 
       
         
        
          $history->time =$dt->toTimeString();
          $history->save();

        // print_r($output);
        
        return back()->with('success','Send SMS successfully');    
    
    }
    public function SmstoSubcriber(Request $request)
    {
      $ar=User::All()->where('is_subcribe',1)->pluck('contact_no');
       
     
    // $ar = ['7503020572', '7836860011', '8630211580'];

            for ($i=0, $len=count($ar); $i<$len; $i++) {
                
                 $user = "wish"; 
       
                $sender_id ="STKTRD"; // optional (compulsory in transactional sms) 
                $msg = $request['message']; 
                 $to=$ar[$i];
                
                $key="C51B0623-05F1-419E-B192-1A80EF2E149F";
                $smstype="TextSMS";
                 $route ="Transactional";
                // $api = "http://sms.wishsolution.com/api/sms/SendSMS.aspx?usr=wish&key=C51B0623-05F1-419E-B192-1A80EF2E149F&smstype=TextSMS&to=7503020572&msg=hi&rout=Transactional&from=STKTRD"  ;
         
                $URL = 'http://sms.wishsolution.com/api/sms/SendSMS.aspx?'; 
                $ch = curl_init($URL);
                
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');        
                curl_setopt($ch, CURLOPT_POSTFIELDS, "usr=$user&key=$key&to=$to&msg=$msg&rout=$route&smstype=$smstype&from=STKTRD");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
               
                curl_close($ch);

   
            }

        $history = new Smsprice;
         $history->message =$request['message'];
         $history->user_type='Subscriber';
         $dt = Carbon::now();
            $newDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $dt)
                ->format('d-m-Y'); 
         
          $history->date= $newDate; 
         
          
        
          $history->time =$dt->toTimeString();
          $history->save();
        return back()->with('success','Send SMS successfully');  

    }
     public function SmstoNonSubcriber(Request $request)
    {
      $ar=User::All()->where('is_subcribe',0)->pluck('contact_no');
        

    // $ar = ['7503020572', '7836860011', '8630211580'];

            for ($i=0, $len=count($ar); $i<$len; $i++) {
                
                 $user = "wish"; 
       
                $sender_id ="STKTRD"; // optional (compulsory in transactional sms) 
                 $msg = $request['message'];  
                 $to=$ar[$i];
                
                $key="C51B0623-05F1-419E-B192-1A80EF2E149F";
                $smstype="TextSMS";
                 $route ="Transactional";
                // $api = "http://sms.wishsolution.com/api/sms/SendSMS.aspx?usr=wish&key=C51B0623-05F1-419E-B192-1A80EF2E149F&smstype=TextSMS&to=7503020572&msg=hi&rout=Transactional&from=STKTRD"  ;
         
                $URL = 'http://sms.wishsolution.com/api/sms/SendSMS.aspx?'; 
                $ch = curl_init($URL);
                
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');        
                curl_setopt($ch, CURLOPT_POSTFIELDS, "usr=$user&key=$key&to=$to&msg=$msg&rout=$route&smstype=$smstype&from=STKTRD");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
               
                curl_close($ch);

   
            }

        $history = new Smsprice;
         $history->message =$request['message'];
         $history->user_type='Non Subscriber';
        $dt = Carbon::now();
            $newDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $dt)
                ->format('d-m-Y'); 
         
          $history->date= $newDate; 
        
          $history->time =$dt->toTimeString();
          $history->save();
        return back()->with('success','Send SMS successfully');  

    }
 public function InputManually(Request $request)
    {
      $ar=$request['number'];
     
       
       

    // $ar = ['7503020572', '7836860011', '8630211580'];

            for ($i=0, $len=count($ar); $i<$len; $i++) {
                
                 $user = "wish"; 
       
                $sender_id ="STKTRD"; // optional (compulsory in transactional sms) 
                $msg = $request['message'];  
                 $to=$ar[$i];
                
                $key="C51B0623-05F1-419E-B192-1A80EF2E149F";
                $smstype="TextSMS";
                 $route ="Transactional";
                // $api = "http://sms.wishsolution.com/api/sms/SendSMS.aspx?usr=wish&key=C51B0623-05F1-419E-B192-1A80EF2E149F&smstype=TextSMS&to=7503020572&msg=hi&rout=Transactional&from=STKTRD"  ;
         
                $URL = 'http://sms.wishsolution.com/api/sms/SendSMS.aspx?'; 
                $ch = curl_init($URL);
                
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');        
                curl_setopt($ch, CURLOPT_POSTFIELDS, "usr=$user&key=$key&to=$to&msg=$msg&rout=$route&smstype=$smstype&from=STKTRD");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
               
                curl_close($ch);

   
            }
        return back()->with('success','Send SMS successfully');  

    }
public function Notification(Request $request)
{
     $ar=User::All()->where('is_subcribe',0)->where('subscription_plan',1)->pluck('contact_no');
        

    // $ar = ['7503020572', '7836860011', '8630211580'];

            for ($i=0, $len=count($ar); $i<$len; $i++) {
                
                 $user = "wish"; 
       
                $sender_id ="STKTRD"; // optional (compulsory in transactional sms) 
                 $msg = $request['message'];  
                 $to=$ar[$i];
                
                $key="C51B0623-05F1-419E-B192-1A80EF2E149F";
                $smstype="TextSMS";
                 $route ="Transactional";
                // $api = "http://sms.wishsolution.com/api/sms/SendSMS.aspx?usr=wish&key=C51B0623-05F1-419E-B192-1A80EF2E149F&smstype=TextSMS&to=7503020572&msg=hi&rout=Transactional&from=STKTRD"  ;
         
                $URL = 'http://sms.wishsolution.com/api/sms/SendSMS.aspx?'; 
                $ch = curl_init($URL);
                
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');        
                curl_setopt($ch, CURLOPT_POSTFIELDS, "usr=$user&key=$key&to=$to&msg=$msg&rout=$route&smstype=$smstype&from=STKTRD");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
               
                curl_close($ch);

   
            }
        return back()->with('success','No User Found');  
          }
     public function SendtoAll( Request $request)
      {

$ar=User::All()->pluck('contact_no');
        

    // $ar = ['7503020572', '7836860011', '8630211580'];

            for ($i=0, $len=count($ar); $i<$len; $i++) {
                
                 $user = "wish"; 
       
                $sender_id ="STKTRD"; // optional (compulsory in transactional sms) 
                 $msg = $request['message'];  
                 $to=$ar[$i];
                
                $key="C51B0623-05F1-419E-B192-1A80EF2E149F";
                $smstype="TextSMS";
                 $route ="Transactional";
                // $api = "http://sms.wishsolution.com/api/sms/SendSMS.aspx?usr=wish&key=C51B0623-05F1-419E-B192-1A80EF2E149F&smstype=TextSMS&to=7503020572&msg=hi&rout=Transactional&from=STKTRD"  ;
         
                $URL = 'http://sms.wishsolution.com/api/sms/SendSMS.aspx?'; 
                $ch = curl_init($URL);
                
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');        
                curl_setopt($ch, CURLOPT_POSTFIELDS, "usr=$user&key=$key&to=$to&msg=$msg&rout=$route&smstype=$smstype&from=STKTRD");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
               
                curl_close($ch);

        
            }
        return back()->with('success','Send SMS successfully');  

       }




    public function SaveSms(Request $request)
    {
     
     $msz =new Message;
     $msz->sms_type = $request['sms_type'];
     $msz->message = $request['message'];
     $msz->save();
     return back()->with('success','Message save successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ViewSms()
    { 
         $users = DB::table('messages')->get();
       
        return view('admin.message.viewsms');

    }

    public function ViewSmslist()
    {
     $users = DB::table('messages')->get();
 
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="admin/edit/sms/'.$user->id.'"><i class="feather icon-edit"></i> </a>  <a href="admin/delete/sms/'.$user->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

            ->removeColumn('password')
            ->make(true);
    
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditSms($id)
    {
        $msg=Message::find($id);
        return view('admin.message.editsms')->with('msg',$msg);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $msz=Message::find($id);
         $msz->sms_type = $request['sms_type'];
         $msz->message = $request['message'];
         $msz->save();
       return back()->with('success','Message edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DeleteSms($id)
    {
         $msg=Message::find($id);
         $msg->destroy($id);
         return back()->with('success','Message delete successfully');
    }

    public function History()
    {
        return view('admin.message.smshistory');
    }
  
   public function GetSMSHistory()
   {
    $plan =Smsprice::select(['id', 'message', 'user_type', 'date',  'time']);
 
        return Datatables::of($plan)
            ->addColumn('action', function ($plan) {
                return '<a href="/plan/edit/'.$plan->id.'"><i class="feather icon-edit"></i> </a>  <a href="/plan/view/'.$plan->id.'" ><i class="fa fa-eye"></i></a><a href="/plan/delete/'.$plan->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

         
            ->make(true);
     }
    

}
