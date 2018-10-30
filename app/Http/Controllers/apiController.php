<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Careerjet_API;
class apiController extends Controller
{
    public function getdata() 
    {
        $careers = new Careerjet_API('en_CA');
      
    
        // Then call the search methods (see below for parameters)
        $result = $careers->search( array(
                                         
                                         'keywords' => 'developer',
                                         'location' => 'Calgary',
                                         'affid'    => 'd9c8f942114d73022683107e1fd8d6c4',
                                       )
                                 );
                               
                                //  dd($result);
                                // return response()->json($result);
                                
                                if ($result->type == 'JOBS') {
                                    echo "Got ".$result->hits." jobs: \n";
                                    echo " On ".$result->pages." pages \n";
                                    $jobs = $result->jobs;
                                }
                              
                                //     foreach ($jobs as $job) {
                                //         echo " URL: ".$job->url."\n";
                                //         echo " TITLE: ".$job->title."\n";
                                //         // echo " LOC:   ".$job->locations."\n";
                                //         // echo " COMPANY: ".$job->company."\n";
                                //         // echo " SALARY: ".$job->salary."\n";
                                //         // echo " DATE:   ".$job->date."\n";
                                //         // echo " DESC:   ".$job->description."\n";
                                //         // echo " SITE:   ".$job->site."\n";
                                //         // echo "\n" ;
                                //      }

    return view('feed',compact('jobs'));
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