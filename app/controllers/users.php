<?php 

class Users extends Controller{
	public function index()
	{
		
		require_once BASEPATH.'app/models/userfunction.php';
		$this->loadView('admin/user/users');
	}
	
	public function remove()
	{
		require_once BASEPATH.'app/models/userfunction.php';
		$user = new User();
		$id = $_POST['id'];
		$res = $user->deleteUser($id);
		if($res)
			{
				
                echo "<script>alert(' User deleted successfully ');window.location='index';</script>";
			}
		else{
			echo "<script>alert(' Error while deleting ');window.location='index';</script>";
	    }
	}

}