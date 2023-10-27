<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        return view("Home/index");
	}

	public function testEmail()
	{
        $email = service('email');
		
        $email->setTo('cjsolorzano04@gmail.com');
		
        $email->setSubject('A test email');
		
        $email->setMessage('<h1>Hello world</h1>');
		
        $email->send();
	}
}