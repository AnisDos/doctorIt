<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Message;
use App\Medecin;

class MessageController extends Controller
{
    
//========================================================================

function index()
{
 return view('load_more');
}

function load_data(Request $request)
{ 
    
   
 if($request->ajax())
 {
  

     //$request->id
     //$request->type
// get messages where to == id and from == auth OR to== auth and from == id with the type 

/*  $data = DB::table('messages')
->where('to', 2)
->get();
*/
//dd($request->id,Auth::user()->medecin->id,$request->type);

if($request->type == "medecin" )
{  
    
    $data1 = DB::table('messages')
    ->select('messages.*')
    ->where(function ($query)  use ($request) {
        $uopm = $request->id;
      $query->where('to', $uopm)
            ->where('from', Auth::user()->medecin->id)
            ->where('typeTo',"medecin")
            ->where('typeFrom',"medecin");
                              })
   ->orWhere(function($query)  use ($request) {
    $uopm = $request->id;
      $query->where('to', Auth::user()->medecin->id)
          ->where('from', $uopm)
          ->where('typeTo',"medecin")
          ->where('typeFrom',"medecin");	
                               })
  ->orderBy('messages.created_at', 'ASC')
  ->get();
  
  

  if ($request->vu == "innovartech") {
    $data12 = DB::table('messages')
    ->select('messages.*')
    ->where('to', Auth::user()->medecin->id)
    ->where('from', $request->id)
    ->where('typeTo',"medecin")
    ->where('typeFrom',"medecin")
    ->orderBy('messages.created_at', 'ASC')
    ->update(['messages.vu' => true ]);
  }



}

else{


    $data1 = DB::table('messages')
    ->select('messages.*')
    ->where(function ($query)  use ($request) {
        $uopm = $request->id;
      $query->where('to', $uopm)
            ->where('from', Auth::user()->medecin->id)
            ->where('typeTo',"admin")
            ->where('typeFrom',"medecin");
                              })
   ->orWhere(function($query)  use ($request) {
    $uopm = $request->id;
      $query->where('to', Auth::user()->medecin->id)
          ->where('from', $uopm)
          ->where('typeTo',"medecin")
          ->where('typeFrom',"admin");	
                               })
  
  ->orderBy('messages.created_at', 'ASC')
  ->get();

  //dd($data1);

}


 
  $output = '';
  $last_id = '';
 // dd($data,$request->ajax());
  if(!$data1->isEmpty())
  {
      $output .= '	
    
          <ul class="list-unstyled">
          ';

          
   foreach($data1 as $row)
   {

    if($row->from == Auth::user()->medecin->id){
        $output.='<li class="media sent">
    
        <div class="media-body">
            <div class="msg-box">
                <div>
                    <p>'.$row->text.'</p>
                    <ul class="chat-msg-info">
                        <li>
                            <div class="chat-time">
                                <span>'.$row->created_at.'</span>
                            </div>
                        </li>
                         
                    </ul>
                </div>
            </div>
        </div>
    </li>';
    $idsendmsg = $row->to;
 
    }else{
        $output.='<li class="media received">
       
        <div class="media-body">
            <div class="msg-box">
                <div>
                    <p>'.$row->text.'</p>
                    <ul class="chat-msg-info">
                        <li>
                            <div class="chat-time">
                                <span>'.$row->created_at.'</span>
                            </div>
                        </li>
                         
                    </ul>
                </div>
            </div>
        </div>
    </li>';
    $idsendmsg = $row->from;
   
    }
 
    
   }


   $msgtype = $request->type;
   $output .= '	</ul>
  


';


 
  }
  else
  {
   
  }
  echo $output;
 }
}



//=========================================





public function sendMessage(Request $request)
{
//  dd($request->ajax());

  /*   from
    typeFrom
    to
    typeTo
    text */

 if($request->ajax())
 {

    $msg = Message::create([
     
        'from' => Auth::user()->medecin->id,
        'typeFrom' => "medecin",
        'to' => $request->id,
        'typeTo' => $request->type,
        'text' => $request->inputMessage,


    ]);
  
 }




}






}
