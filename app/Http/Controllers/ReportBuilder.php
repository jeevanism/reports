<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;
use DB;



class ReportBuilder extends Controller
{
    /**
     * Process the report 
     *
     * example : list of photos in the database - 'lockerss'
     * @return $this to chain the method 
     */
        public function build(){
            // $this->req = DB::select('select * from lockerss'); // use DB directly
            // any number of data can be pulled for report building, such as number of public images, latest images etc
             $this->req = Report::all(); // use the Eloquent
             return $this;
        }


       /**
     *  
     * @param $format - the Export report type || JSON, Collection, array etc
     * example : JSON format or just collection 
     * @return $data with requested format
     */
    public function export($format) {
        // take a 
        if($format!='json'){

            
            $listOfPhotos = $this->req;
             return  $listOfPhotos;
            
          
        }
        else {

              return response()->json(['data'=>$listOfPhotos]);
         
 
        }

    }


    
     
}

