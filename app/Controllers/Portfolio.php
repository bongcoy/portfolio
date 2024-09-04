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

    public function contact()
    {
        $data['title'] = 'Contact - Taufik Portfolio';
        return view('contact', $data);
    }

    public function send()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        // Example of using session flash data
        session()->setFlashdata('success', 'Your message has been sent successfully!');

        return redirect()->to('/contact');
    }
}
