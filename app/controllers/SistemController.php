<?php


class SistemController extends BaseController{
	public function yazi($id,$sef){
		return $id." - ".$sef;
	}
	public function anasayfa(){
		return View::make('test', array('mesaj' =>'Sayin Erkoc Ailesi Test'));
	}

	public function blade(){
		return View::make("index1");
	}
	
}
