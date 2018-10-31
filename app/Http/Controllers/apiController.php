<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Careerjet_API;
use App\User;
use App\Favorites;
use DB;


class apiController extends Controller

{

//     //using guzzle to call meetup api//
  public function getMeetup(){
  $client = new Client();
  $info = $client->post('https://api.meetup.com1/find/groups2?zip=11211&radius=1&category=253&order=members4',[
    'form_params' => [
      'key'=>'23117573164795e671d266e5962281a'
    ]
  ]);
dd($info);

  return view('meetup',compact('meetup'));

}

    public function getdata() 


    {

                //get profile query search data//
                // $id= auth()->user()->id;
                // $user = User::find($id);
        $user = User::find(auth()->id());
        
        $choices = $user->technologies;
         
        foreach ($choices as $choice) {
          // echo " URL: ".$choice->description;
          // dd($choices);

          $keywords = $choice->description;
       }
       
      
        
        // ->leftjoin('technologies','description','=', 'user_id')
        // ->get(); 
        // dd($choices);
                    
        $careers = new Careerjet_API('en_CA');
        $user = User::find(auth()->id());
        $faves=Favorites::orderBy('created_at', 'desc')->simplePaginate(3);
        
      
    
        // Then call the search methods (see below for parameters)
        $result = $careers->search( array(
                                         
                                         'keywords' => $keywords,
                                         'location' => 'Calgary',
                                         'affid'    => 'd9c8f942114d73022683107e1fd8d6c4',
                                       )
                                 );
                               
                                //  dd($result);
                                // return response()->json($result);
                                
                                if ($result->type == 'JOBS') {
                                 
                                    $jobs = $result->jobs;
                                   
                                }
                              
                                   
                                   
    return view('feed',compact('jobs', 'faves'));
      }
      
  }
  
  
 
   







    // $client = new Client();

    // $result = $client->post('http://public.api.careerjet.net/', [
    //     'headers' =>
    //     [
    //         'locale_code' => 'CA',
    //         'location' =>'Calgary',
    //         'keywords' =>'developer',
    //         'affid' => 'd9c8f942114d73022683107e1fd8d6c4',
            
    //     ]

    // ]);
    
    // $data = $result;
    // echo json_encode($data);
    // dd($data);

    //     }
    

      // Create a new instance of the interface for UK job offers
    


// function call($fname , $args)
// {
//   $url = 'http://public.api.careerjet.net/'.$fname.'?locale_code='.$this->locale;

//   if (empty($args['affid'])) {
//     return (object) array(
//       'type' => 'ERROR',
//       'error' => "Your Careerjet affiliate ID needs to be supplied. If you don't " .
//                  "have one, open a free Careerjet partner account."
//     );
//   }