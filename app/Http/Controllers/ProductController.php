<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product() {

        $main = [
            (object)["Titreh1"=> "A Free Bootstrap 4 Business Theme", "mainTitre"=>"Business Casual"]
        ];

        $footer = [
            (object)["copyright"=> "Copyright © Your Website 2019"]
        ];

        $cofee = [
            (object)["titreHaut" => "Blended to Perfection", "titreBas" => "Coffees & Teas"]
        ];

        $cofeeText = [
            (object)["texte" => "We take pride in our work, and it shows. Every time you order a beverage from us, we
            guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan
            Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced
            black coffee, you will be coming back for more."]
        ];

        $bakery = [
            (object)["titreHaut" => "Delicious Treats, Good Eats", "titreBas" => "Bakery & Kitchen"]
        ];

        $bakeryText = [
            (object)["texte" => "Our seasonal menu features delicious snacks, baked goods, and even full meals
            perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever
            possible, alongside premium vendors for specialty goods."]
        ];

        $world = [
            (object)["titreHaut" => "From Around the World", "titreBas" => "Bulk Speciality Blends"]
        ];

        $worldText = [
            (object)["texte" => "Travelling the world for the very best quality coffee is something take pride in.
            When you visit us, you'll always find new blends from around the world, mainly from regions in
            Central and South America. We sell our blends in smaller to large bulk quantities. Please visit
            us in person for more details."]
        ];

        return view('pages/product', compact('main', 'footer', 'cofee', 'cofeeText', 'bakery', 'bakeryText', 'world', 'worldText'));
    }
}
