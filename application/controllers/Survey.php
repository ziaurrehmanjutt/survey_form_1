<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {


	public function __construct() {        
       parent::__construct();
       $this->load->helper('url'); 
        $this->load->model('Survey_Model');
    }

	public function index()
	{
		if(isset($_POST['submitData'])){
			$this->Survey_Model->startNewForm();
			redirect('survey/form1');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form0.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form1()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_1');
			redirect('survey/form2');
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_1');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form1.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}
	public function form2()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_2');
			redirect('survey/form3');
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_2');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form2.php');
		$this->load->view('surveys/includes/footer.php');
	}
	public function form3()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form4');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form3.php');
		$this->load->view('surveys/includes/footer.php');
	}


	public function form4()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form5');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form4.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form5()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form6');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form5.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form6()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form7');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form6.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form7()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form8');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form7.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form8()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form9');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form8.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form9()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form10');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form9.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form10()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form11');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form10.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form11()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form12');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form11.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form12()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form13');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form12.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form13()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form14');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form13.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form14()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form15');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form14.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form15()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form16');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form15.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form16()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form17');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form16.php');
		$this->load->view('surveys/includes/footer.php');
	}

	public function form17()
	{
		if(isset($_POST['submitData'])){
			redirect('survey/form4');
			exit();
		}
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form17.php');
		$this->load->view('surveys/includes/footer.php');
	}


}
