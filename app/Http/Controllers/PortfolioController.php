<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    protected $portfolio; // Declare a property to hold the Portfolio instance

    public function __construct() 
    {
        $this->portfolio = new Portfolio(); // Initialize the property
    }

    public function index()
    {  
       $details = [];
       $details['username'] = $this->portfolio->portfolioUserName;
       $details['oneliner'] = $this->portfolio->portfolioOneliner;
       $details['greeting'] = $this->portfolio->portFolioGreeting;
       $details['line1']    = $this->portfolio->introductoryLineOne;
       $details['line2']    = $this->portfolio->welcomeMessage;
       $details['aboutLine1'] = $this->portfolio->aboutMeLine1;
       $details['aboutLine2'] = $this->portfolio->aboutMeLine2;
       $details['fblink'] = $this->portfolio->fblink;
       $details['twlink'] = $this->portfolio->twlink;
       $details['instalink'] = $this->portfolio->instalink;
       $details['linkedinlink'] = $this->portfolio->linkedinlink;
       $details['exp'] = $this->portfolio->calculateExp();
       $details['techintro'] = $this->portfolio->techIntro;
       $details['techArray'] = $this->portfolio->techArray;
       $details['phpText'] = $this->portfolio->phpText;
       $details['education'] = $this->portfolio->education;
       $details['experience'] = $this->portfolio->expArray;
       $details['portfolioUserEmail'] = $this->portfolio->portfolioUserEmail;
       $portFolioData = (object) $details;
       return view('portfolio',compact('portFolioData'));
    }

}
