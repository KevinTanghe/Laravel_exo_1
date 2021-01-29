<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function store() {

        $main = [
            (object)["Titreh1"=> "A Free Bootstrap 4 Business Theme", "mainTitre"=>"Business Casual"]
        ];

        $footer = [
            (object)["copyright"=> "Copyright © Your Website 2019"]
        ];

        $store = [
            (object)["titreHaut" => "Come On In",
             "titreBas" => "We're Open",
             "fermer" => "Closed",
             "semaine" => "7:00 AM to 8:00 PM",
             "week" => "9:00 AM to 5:00 PM",
             "lundi" => "Monday",
             "mardi" => "Tuesday",
             "mercredi" => "Wednesday",
             "jeudi" => "Thursday",
             "vendredi" => "Friday",
             "samedi" => "Saturday",
             "dimanche" => "Sunday"
             ]
        ];

        $storeInfo = [
            (object)["info1" => "1116 Orchard Street",
            "info2" => "Golden Valley, Minnesota",
            "info3" => "Call Anytime",
            "info4" => "(317) 585-8468"
            ]
        ];

        $histoire = [
            (object)["titreHaut" => "Strong Coffee, Strong Roots", "titreBas" => "About Our Cafe"]
        ];

        $histoireText = [
            (object)["firstText" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
            sourced from artisan farmers in various regions of South and Central America. We are
            dedicated to travelling the world, finding the best coffee, and bringing back to you here in
            our cafe.", "secondText" => "We guarantee that you will fall in lust with our decadent blends the
            moment you walk inside until you finish your last sip. Join us for your daily routine, an
            outing with friends, or simply just to enjoy some alone time."]
        ];

        return view('pages/store', compact('main', 'footer', 'store', 'histoire', 'histoireText', 'storeInfo'));
    }
}
