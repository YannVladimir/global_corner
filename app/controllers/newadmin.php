<?php  
 
class Newadmin extends Controller{
	public function index()
	{
		$this->loadView('admin/admins/new-admin');
	}
    public function introduction()
	{
		$this->loadView('home/introduction');
	}
	public function create()
	{
		require_once BASEPATH.'app/models/adminfunction.php';
		$admin = new Admin();
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$password = "random";
		$res = $admin->insertAdmin($firstname,$lastname,$email,$number,$password);
		if($res)
			{
                echo "<script>alert(' Admin created ');window.location='index';</script>";
			}
		else
			echo "Error";
	}
}