<?php

namespace App\Controllers;

class Home extends BaseController
     #Home-->ini adalah class controller Home
{
    public function index(): string
                    #index-->ini adalah method index
    {
        return view('welcome_message');
        #view-->ini merupakan function view yang di gunakan untuk merender web page pada folder views
        #welocome_message-->ini merupakan path tempat di mana file web page yang akan di render
    }
}
