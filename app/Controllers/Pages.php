<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            "title"=> "Home"
        ];
		return view('Pages/Home', $data);
	}

    public function About()
	{
        $data = [
            "title" => "About",
            "Name" => "Rikan Al Arabi",
            "Email" => "RikanAlarabi8@gmail.com"
        ];
		return view('Pages/About', $data);
	}

    public function Contact()
	{
        $data = [
            "title" => "Contact",
            "Alamat" => [
                [
                    "tipe" => "Rumah Domisili",
                    "Alamat" => "Gang Raden Jibja No 155",
                    "Kota" => "Bandung"
                ],
                [
                    "tipe" => "Rumah Asal",
                    "Alamat" => "Kp. Madapada Ds. Cisaruni",
                    "Kota" => "Tasikmalaya"
                ]
            ]
        ];
		return view('Pages/Contact', $data);
	}
}
