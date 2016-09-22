
<?php 

class Search extends Controller{
    public function index() 
    {
        require_once BASEPATH.'app/models/categoriesfunction.php';
        require_once BASEPATH.'app/models/placefunction.php';
        $this->loadView('public/searching');
    }
    public function introduction()
    {
        $this->loadView('home/introduction');
    }
    
}
