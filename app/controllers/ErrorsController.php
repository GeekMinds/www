<?php

class ErrorsController extends \BaseController {

	public function NoEncontrado(){
		// Esto no esta funcionando aun, pero algun dia lo corregiremos -... si saben como adelante...
		return View::make('404')->withMensaje("Acceso a esta pagina directamente");
	}

}
