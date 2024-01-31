<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome () {
            
        return view ('welcome' );
    }

    public function indexFilms(){
        $films = [
            [
                "title" => "Batman",
                "author" => "Dc",
                "year" => "2012",
                "plot" => "Sono quello ricco della dc",
            
            ],
            [
                "title" => "Iron Man",
                "author" => "Marvel",
                "year" => "2010",
                "plot" => "Sono quello ricco della marvel",
            
            ],
            [
                "title" => "Superman",
                "author" => "Dc",
                "year" => "2018",
                "plot" => "Tizio incazzato con tutti",
            
            ],
        ];

return view("index_films",['films'=>$films]);

    }

    public function detailFilm($title){
        $films = [
            [
                "title" => "Batman",
                "author" => "Dc",
                "year" => "2012",
                "plot" => "Sono quello ricco della dc",
            
            ],
            [
                "title" => "Iron Man",
                "author" => "Marvel",
                "year" => "2010",
                "plot" => "Sono quello ricco della marvel",
            
            ],
            [
                "title" => "Superman",
                "author" => "Dc",
                "year" => "2018",
                "plot" => "Tizio incazzato con tutti",
            
            ],
        ];

        foreach ($films as $film) {
            if ($film['title'] == $title){
             return view('detail_film',['film'=>$film]);
 
            }
         }
    }


}

    

