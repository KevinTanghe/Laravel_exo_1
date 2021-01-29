<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index() {
        
        $main = [
        (object)["Titreh1" => "A Free Bootstrap 4 Business Theme", "mainTitre" => "Business Casual"]
        ];

        $footer = [
            (object)["copyright" => "Copyright © Your Website 2019"]
        ];

        $presentation = [
            (object)["titreHaut" => "Fresh Coffee", "titreBas" => "Worth Drinking"]
        ];

        $presentationText = [
            (object)["texte" => "Every cup of our quality artisan coffee starts with locally sourced, hand picked
            ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning
            routine - we guarantee it!"]
        ];

        $presentationBTN = [
            (object)["button" => "Visit Us Today!"]
        ];

        $promise = [
            (object)["titreHaut" => "Our Promise", "titreBas" => "To You"]
        ];

        $promiseText = [
            (object)["texte" => "When you walk into our shop to start your day, we are dedicated to providing you
            with friendly service, a welcoming atmosphere, and above all else, excellent products made with
            the highest quality ingredients. If you are not satisfied, please let us know and we will do
            whatever we can to make things right!"]
        ];


        return view('pages/welcome', compact("main", "footer", "presentation", "presentationText", "presentationBTN", "promise", "promiseText"));
    }
}
