<?php

class MainController extends \BaseController {

	public function index()
	{
		return View::make('index');
	}

	public function aboutUs()
	{
		return View::make('sobre-nosotros');
	}

	public function faq()
	{
		//
		return View::make('preguntas-frecuentes');
	}

	public function contacto()
	{
		//
		return View::make('contacto');
	}
	
	public function comming(){
		// Comming soon 
		return View::make('bajo');
		
	}
}
