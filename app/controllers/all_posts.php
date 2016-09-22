<?php 
 
class All_posts extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/itemsfunction.php';
		$this->loadView('admin/posts/view-posts');
	}
	
	
}