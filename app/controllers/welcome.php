<?php 

class Welcome extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/userfunction.php';
		$this->loadView('admin/user/new-users');
	}
    public function all()
	{
		require_once BASEPATH.'app/models/userfunction.php';
		$user = new User();
		$res = $user->updateAcceptedAll();
		if($res)
		{
			echo "<script>alert(' Users Welcomed ');window.location='index';</script>";
		}
		else
		{
			echo "<script>alert('Sorry, it seems like the re is a problem while welcoming users');window.location='index';</script>";
		}
	}
	public function individual()
	{
		require_once BASEPATH.'app/models/userfunction.php';
		$user = new User();
		$id = $_POST['id'];
		$res = $user->updateAcceptedUser($id);
		if($res)
			{
				
                echo "<script>alert(' User Welcomed ');window.location='index';</script>";
			}
		else
			echo "<script>alert('Sorry, it seems like the re is a problem while welcoming the user');window.location='index';</script>";
	}
}