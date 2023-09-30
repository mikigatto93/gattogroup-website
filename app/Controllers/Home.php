<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Home';
        $data['current_page'] = 'home';

        return view('pages/home', $data);
    }
}
