<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailCards extends Controller
{
    public function detailCards ($article){
        
        $products = [
            [   
                "img"=> '/image/pistola.jpg',
                "name"=> "Pistola",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos minus quod, inventore ipsam quis quaerat beatae nihil facilis aliquam maiores omnis iure fuga quas impedit adipisci eligendi consectetur eaque? Laudantium.",
                "price"=>"12euro",
                "seller"=>"Massimogiocattoli"
                
            ],
            [
                "img"=> '/image/barchetta.jpg',
                "name"=> "Barchetta",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos minus quod, inventore ipsam quis quaerat beatae nihil facilis aliquam maiores omnis iure fuga quas impedit adipisci eligendi consectetur eaque? Laudantium.",
                "price"=>"27euro",
                "seller"=>"Massimogiocattoli"
                
            ],
            [
                "img"=> '/image/trattore.jpg',
                "name"=> "Trattore",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos minus quod, inventore ipsam quis quaerat beatae nihil facilis aliquam maiores omnis iure fuga quas impedit adipisci eligendi consectetur eaque? Laudantium.",
                "price"=>"15euro",
                "seller"=>"Massimogiocattoli"
                
            ]
            ];
            foreach($products as $annuncio){
                if($annuncio['name'] == $article )
                return view ('detail',['annuncio'=>$annuncio]);
            }
        }
}