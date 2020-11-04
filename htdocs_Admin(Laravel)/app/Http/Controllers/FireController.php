<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class FireController extends Controller
{
     public function index()
    {
        
    }

    public function sendHoursData()
    {                
        $hours = $_POST["hours"];
        $admission = $_POST["admission"];

        if($hours != null && $admission != null)
        {
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('Hours')
        ->push([        
        $hours
        ]);

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('Admission')
        ->push([        
        $admission
        ]);
        }        
        
        return redirect()->back();
    }    

    public function sendAboutData()
    {
        
        $about = $_POST["about"];

        if($about != null)
        {
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('About')
        ->push([        
        $about
        ]);
        }
        
        return redirect()->back();
    }

    public function sendTicketData()
    {
        
        $ticket = $_POST["ticket"];
        $ticket_url = $_POST["ticket_url"];

        if($ticket != null && $ticket_url != null)
        {
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
            $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
            ->create();
    
            $database = $firebase->getDatabase();
    
            $newPost = $database
            ->getReference('Ticket')
            ->push([        
            $ticket
            ]);

            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
            $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
            ->create();
    
            $database = $firebase->getDatabase();
    
            $newPost = $database
            ->getReference('Ticket_URL')
            ->push([        
            $ticket_url
            ]);
        }
       
        return redirect()->back();
    }

    public function sendDirectionData()
    {
        
        $direction = $_POST["direction"];
        
        if($direction != null)
        {
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('Direction')
        ->push([        
        $direction
        ]);
        }
        
        return redirect()->back();
    }    

    public function sendActivityData()
    {
        
        $activity_img = $_POST["activity_img"];
        $activity_title = $_POST["activity_title"];

        if($activity_img != null && $activity_title != null)
        {
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('Activity_Img')
        ->push([        
        $activity_img
        ]);

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('Activity_Title')
        ->push([        
        $activity_title
        ]);
        }
        

        return redirect()->back();
    }

    public function sendProductData()
    {
        
        $product_img = $_POST["product_img"];
        $product_title = $_POST["product_title"];
        $product_price = $_POST["product_price"];

        if($product_img != null && $product_price != null && $product_title != null)
        {
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('Product_Img')
        ->push([        
        $product_img
        ]);

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('Product_Title')
        ->push([        
        $product_title
        ]);

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('Product_Price')
        ->push([        
        $product_price
        ]);
        }
        
        return redirect()->back();
    }

    public function sendGPSData($data)
    {
                
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/corn-maze-3fbdc-firebase-adminsdk-cvs4h-0ed864156d.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://corn-maze-3fbdc.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('GPS')
        ->push([        
        $data
        ]);
        return redirect()->back();
    }
}
