<?php

class IndexController extends Controller
{
    private $pageTpl = "../views/home.page.tpl.php";
    
    public function __construct() 
    {
        $this->model = new IndexModel();
        $this->view = new View();
        
    }
    public function index() 
    {
        $this->pageData['title'] = "Home Page";
        
        $jobsCount = $this->model->getJobsCount();
        $this->pageData['jobsCount'] = $jobsCount;
        
        $MembersCount = $this->model->getMembersCount();
        $this->pageData['membersCount'] = $MembersCount;
        
        $CitiesCount = $this->model->getCitiesCount();
        $this->pageData['citiesCount'] = $CitiesCount;
        
        $CoutriesCount = $this->model->getCoutriesCount();
        $this->pageData['coutriesCount'] = $CoutriesCount;
        
        $jobs = $this->model->getJobsList();
        $this->pageData['jobs'] = $jobs;
        
        $this->view->render($this->pageTpl, $this->pageData); //page render
    }
}

