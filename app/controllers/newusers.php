<?php 

class Newusers extends Controller{
	public function index()
	{
		
		require_once BASEPATH.'app/models/userfunction.php';
		$this->loadView('admin/user/new-users');
	}
	
	public function accept()
	{
		require_once BASEPATH.'app/models/userfunction.php';
		$user = new User();
		$id = $_POST['id'];
		$res = $user->deleteUser($id);
		if($res)
			{
				
                echo "<script>alert(' User deleted ');window.location='index';</script>";
			}
		else
			echo "Error";
	}

}