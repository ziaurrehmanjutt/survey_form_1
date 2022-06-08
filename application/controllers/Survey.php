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
			redirect(base64_encode('form01'));
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
			redirect(base64_encode('form02'));
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
			redirect(base64_encode('form03'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_2');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form2.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}
	public function form3()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		} 
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_3');
			redirect(base64_encode('form04'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_3');

		$array1 = array(
			"title" => "Funding",
			"value" => $data['data']->main_motivation_take_part_this_program_funding,
			"name" => "main_motivation_take_part_this_program_funding",
			"id" => "fund",
		);
		$array2 = array(
			"title" => "Coaching",
			"value" => $data['data']->main_motivation_take_part_this_program_coaching,
			"name" => "main_motivation_take_part_this_program_coaching",
			"id" => "coa",
		);
		$array3 = array(
			"title" => "Network access",
			"value" => $data['data']->main_motivation_take_part_this_program_network,
			"name" => "main_motivation_take_part_this_program_network",
			"id" => "netw",
		);
		$array4 = array(
			"title" => "Gain knowledge",
			"value" => $data['data']->main_motivation_take_part_this_program_knowledge,
			"name" => "main_motivation_take_part_this_program_knowledge",
			"id" => "gkn",
		);

		$allarray[] =  $array1;
		$allarray[] =  $array2;
		$allarray[] =  $array3;
		$allarray[] =  $array4;

		$price = array_column($allarray, 'value');

		array_multisort($price, SORT_ASC, $allarray);

		// echo "<pre>";
		$data['sort_array'] = $allarray;
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form3.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}


	public function form4()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_4');
			redirect(base64_encode('form05'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_4');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form4.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form5()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_5');
			redirect(base64_encode('form06'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_5');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form5.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form6()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_6');
			redirect(base64_encode('form07'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_6');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form6.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form7()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_7');
			redirect(base64_encode('form08'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_7');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form7.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form8()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_8');
			redirect(base64_encode('form09'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_8');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form8.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form9()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_9');
			redirect(base64_encode('form10'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_9');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form9.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form10()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_10');
			redirect(base64_encode('form11'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_10');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form10.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form11()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_11');
			redirect(base64_encode('form12'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_11');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form11.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form12()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_12');
			redirect(base64_encode('form13'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_12');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form12.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form13()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_13');
			redirect(base64_encode('form14'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_13');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form13.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form14()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_14');
			redirect(base64_encode('form15'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_14');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form14.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form15()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_15');
			redirect(base64_encode('form16'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_15');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form15.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form16()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_16');
			redirect(base64_encode('form17'));
			exit();
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_16');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form16.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}

	public function form17()
	{
		if(!isset($_SESSION['form_id'])){
			redirect('survey');
		}
		if(isset($_POST['submitData'])){
			$postArrau  = $_POST;
			unset($postArrau['submitData']);
			$this->Survey_Model->updateOrSave($postArrau,'survey_form_17');
			// redirect('survey/form17');
			// exit();
			$data['complete'] = true;
			
		}
		$data['data']  = $this->Survey_Model->getData('survey_form_17');
		$this->load->view('surveys/includes/header.php');
		$this->load->view('surveys/forms/form17.php',$data);
		$this->load->view('surveys/includes/footer.php');
	}


}
