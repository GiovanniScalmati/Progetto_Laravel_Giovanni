<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public $comics = [
        [
            "title" => "Neon genesis Evangelion",
            "author" => "Anno",
            "year" => "1999",
            "plot" => "Bambino capriccioso non vuole salire sul Robottone",
        
        ],
        [
            "title" => "HunterxHunter",
            "author" => "Togashi",
            "year" => "2004",
            "plot" => "Bambino incazzato picchia gatto",
        
        ],
            [
                "title" => "Diabolik",
                "author" => "Marinelli",
                "year" => "1970",
                "plot" => "Tizio in tutina nera",
            
            ],
            [
                "title" => "Berserk",
                "author" => "Miura",
                "year" => "1989",
                "plot" => "Tizio incazzato con tutti",
            
            ],
        ]; 

    public function indexComics() {
        
    return view('comics.index_comics',['comics'=>$this->comics]);
    }






public function detailComic ($title) {

        foreach ($this->comics as $comic) {
           if ($comic['title'] == $title){
            return view('comics.detail_comic',['comic'=>$comic]);

           }
        }


    }
}
