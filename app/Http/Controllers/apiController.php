<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Careerjet_API;
use App\User;
use App\Favorites;
use DB;
use Profile;


class apiController extends Controller

{
  
//     //using guzzle to call meetup api//
  public function getMeetup(){
  
  $client = new Client(['verify'=> false]);
      //meetup api request with key and params
  $meetups = $client->get('https://api.meetup.com/find/groups?sign=true&text=technology&country=CA&location=Calgary&category=34&page=30&key=23117573164795e671d266e5962281a');
      //decode response into managable fille
  $meetup = json_decode($meetups->getBody()->getContents());

// dd($meetup);
        //return json data to blade through variable meetup
  return view('meetup',compact('meetup'));

}

    public function getdata() 
    {
       //get profile query search data//

          //store auth user in variable
        $user = User::find(auth()->id());

          //store auth user profile params//
        $choices = $user->technologies;
     
          //loop through each user params
        foreach ($choices as $choice) {
          // dd($choices);


          //store users choices in keyword variable
        $keywords = $choice->description;
       }
                  
          // search carreerjet api for results
        $careers = new Careerjet_API('en_CA');
        $user = User::find(auth()->id());
        // $faves=Favorites::orderBy('created_at', 'desc')->simplePaginate(3);
        
      
     
        // filter api response with user choices (see below for parameters)
        $result = $careers->search( array(
                                         
                                         'keywords' => $keywords,
                                         'location' => 'Calgary',
                                         'affid'    => 'd9c8f942114d73022683107e1fd8d6c4',
                                       )
                                 );
                               
        //  dd($result);
        
        // loop through results
                                
        if ($result->type == 'JOBS') {
          
            $jobs = $result->jobs;
            
        }
                              
                                   
                                   
    return view('feed',compact('jobs'));
      }
      
  }
  
  
 
   








 