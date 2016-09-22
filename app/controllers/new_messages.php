<?php  

class New_messages extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/messagesfunction.php';
		$this->loadView('admin/message/new-messages');
	}
	public function individual() 
	{
		require_once BASEPATH.'app/models/userfunction.php';
		$u = new Contacts();
		$id = $_POST['id'];
		$res = $u->updateSeenMessages($id);
		if($res)
			{
				
                echo "<script>alert(' message marked as seen ');window.location='index';</script>";
			}
		else
			echo "<script>alert('Sorry, it seems like the re is a problem while marking as seen');window.location='index';</script>";
	}
}