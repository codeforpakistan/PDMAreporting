<?php
class Import_cattle extends CI_Controller {

	public function __construct(){

			parent::__construct();
			$this->is_logged_in();	
			$this->load->model('deadinjured_model');
		}

		public function is_logged_in(){

			$is_logged_in = $this->session->userdata('is_logged_in');
			
			if($is_logged_in != true)
			{
				redirect('login');
				return false;
			}
			return true;
		}

	public function index(){

		$config['upload_path'] = './uploads/sheets';
		$config['allowed_types'] = 'xlsx|xls';
					
		$this->load->library('upload', $config);

		// include check if already exists.
		$file_name = $_FILES["userfile"]["name"];

		if(empty($file_name)){

			
			$msg['msg'][] =  'Please select a file';
			print_r($msg);
			/*
				$this->load->view('template/header');
				$this->load->view('messages',$msg);
				$this->load->view('template/footer');
			*/
			return;
		}
			
		if(file_exists("uploads/sheets/".$file_name))
		{
			/*$msg['msg'][] = 'File already exists';
			$this->load->view('template/header');
			$this->load->view('messages',$msg);
			$this->load->view('template/footer');
			return;*/
			echo "file already exists";
			return;
		}
		//else{

	
			if ( ! $this->upload->do_upload())
			{
				print_r($this->upload->display_errors());
				return;
			}
			else{

				$msg = array();
				
				//load library phpExcel
				$this->load->library("excel");
				
				//here i used microsoft excel 2007
				$objReader = PHPExcel_IOFactory::createReader('Excel2007');
				
				//set to read only
				$objReader->setReadDataOnly(true);
				
				//load excel file
				$objPHPExcel = $objReader->load("uploads/sheets/".$file_name);
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				
				$startrow 	= $this->input->post('startrow');
				$endrow 	= $this->input->post('endrow');
				$b_id 	= $this->input->post('budget');
				$user_id = $this->session->userdata('user_id');
				
				
					for($i=$startrow; $i<=$endrow; $i++):

					  	$name 		= $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();
					  	$fname 		= $objWorksheet->getCellByColumnAndRow(1,$i)->getValue();
					  	$cnic 		= $objWorksheet->getCellByColumnAndRow(2,$i)->getValue();
					  	$address 	= $objWorksheet->getCellByColumnAndRow(3,$i)->getValue();
					  	$district 	= $objWorksheet->getCellByColumnAndRow(4,$i)->getValue();
					  	$reason 	= $objWorksheet->getCellByColumnAndRow(5,$i)->getValue();
					  	$special_compensation 		= $objWorksheet->getCellByColumnAndRow(6,$i)->getValue();
					  	$housedamage				= $objWorksheet->getCellByColumnAndRow(7,$i)->getValue();
						
						$date_of_incident	= $objWorksheet->getCellByColumnAndRow(8,$i)->getValue();
						$date_of_report		= $objWorksheet->getCellByColumnAndRow(9,$i)->getValue();
						$tehsildar		= $objWorksheet->getCellByColumnAndRow(10,$i)->getValue();
						
						$patwari	= $objWorksheet->getCellByColumnAndRow(11,$i)->getValue();
						
						$medicalofficer	= $objWorksheet->getCellByColumnAndRow(12,$i)->getValue();
						$headmaster	= $objWorksheet->getCellByColumnAndRow(13,$i)->getValue();
						
						$dc			= $objWorksheet->getCellByColumnAndRow(14,$i)->getValue();
						

						if(empty($name))
				  			continue;
					  
					  	$form_data = array(	'name' => $name,
							'father_name' => $fname,
							'date_of_incident' => $date_of_incident,
							'cnic' => $cnic,
							'district' => $district,
							'address' => $address,
							'reason' => $reason,
							'special_compensation' => $special_compensation,
							'b_id' => $b_id,
							'case_type' => $case_type,
							'patwari' => $patwari,
							'med_officer' => $medicalofficer,
							'tehsildar' => $tehsildar,
							'headmaster' => $headmaster,
							
							'dc' => $dc,
							'u_id'	=> $user_id );
					  	
					  	$this->cattle_model->add_from_sheet($form_data);
					  	$msg['msg'][0] = 'Data inserted successfully...';

		  				
					endfor;
						unlink(APPPATH."../uploads/sheets/".$file_name);
						echo 'inserted successfully';
						/*
						$this->load->view('template/header');
						$this->load->view('messages',$msg);
						$this->load->view('template/footer');
						*/
			}
		//}
	}
}


?>