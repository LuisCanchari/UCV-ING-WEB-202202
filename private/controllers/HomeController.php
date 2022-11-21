<?php
class HomeController extends Controller
{
	public function index()
	{
		if(!Auth::logged_in())// v/f
		{
			$this->redirect('login');
		}
		
		$this->view('home\index');
	}
}