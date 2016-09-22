<?php 

class Feedback extends Controller{
	public function index()
	{
		$this->loadView('admin/Feedbacks/view-feedback');
	}
	public function introduction()
	{
		$this->loadView('home/introduction');
	}


}