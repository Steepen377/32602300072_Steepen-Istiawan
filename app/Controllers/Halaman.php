<?php

namespace App\Controllers;

class Halaman extends BaseController
{
    public function profile(): string
    {
        return view(name: 'profile');
    }

    public function experience(): string
    {
        return view(name: 'experience');
    }
}
