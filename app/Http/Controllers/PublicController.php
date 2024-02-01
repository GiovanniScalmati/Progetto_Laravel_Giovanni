<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

// FUnziona per la vista di contatto 

public function contactUs() {

    return view ("contactUs");

    }

// Funzione per l'invio di dati

public function submitContact(Request $request) {

    $user = $request->input('user');
    $email = $request->input('email');
    $tel = $request->input('tel');
    $message = $request->input('message');




    $userContact = compact('user', 'message');
    $userContactForAdmin = compact('user', 'email','tel','message');
    Mail::to($email)->send(new ContactMail($userContact));
    Mail::to('admin@125.it')->send(new AdminMail($userContactForAdmin));


    return redirect(route('welcome'))->with('message','grazie per averci scritto');

    }

}



    

