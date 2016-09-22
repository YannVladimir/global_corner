<?php 
 
class Posts extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/itemsfunction.php';
		$this->loadView('admin/posts/new-posts');
	}
	public function remove()
	{
		require_once BASEPATH.'app/models/postfunction.php';
		$p = new Post();
		$id = $_GET['id'];
		$res = $p->deletePost($id);
		if($res)
			{
				
                echo "<script>alert(' post deleted ');window.location='index';</script>";
			}
		else
			echo "<script>alert('Sorry, it seems like there is a problem');window.location='index';</script>";
	}
	public function accept()
	{
		require_once BASEPATH.'app/models/postfunction.php';
		$p = new Post();
		$id = $_GET['id'];
		$res = $p->accept($id);
		if($res)
			{
				
                echo "<script>alert(' post accepted ');window.location='index';</script>";
			}
		else
			echo "<script>alert('Sorry, it seems like there is a problem');window.location='index';</script>";
	}
}