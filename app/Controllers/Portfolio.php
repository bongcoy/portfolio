<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home - Taufik Portfolio';
        return view('home', $data);
    }

    public function projects()
    {
        $data['title'] = 'Projects - Taufik Portfolio';
        return view('projects', $data);
    }

    public function skills()
    {
        $data['title'] = 'Skills - Taufik Portfolio';
        return view('skills', $data);
    }
}
