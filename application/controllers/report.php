<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	public function index(){
		
	}
	public function general(){
		
		$this->load->model('report_model');
		$data = $this->report_model->general_report();
		
		$option = $this->input->post('option');
		
		if($option == '0')
			$this->load->view('general_report', $data);
		
		if($option == '1')
		{
			$cattle	= $data['cattle'];
			$house_damage	= $data['house_damage'];
			$dead_injured = $data['dead_injured'];
			
			$this->load->library('excel');

			$obj = new PHPExcel();
			
			$obj->setActiveSheetIndex(0);
			
			//name the worksheet
			$obj->getActiveSheet()->setTitle('Report');

			//set cell A1 content with some text
			//$obj->getActiveSheet()->setCellValue('A1', 'This is just some text value');
			//change the font size
			//$obj->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
			//make the font become bold
			//$obj->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			//merge cell A1 until D1
			//$obj->getActiveSheet()->mergeCells('A1:D1');
			//set aligment to center for that merged cell (A1 to D1)
			//$obj->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			if(!empty($cattle)){
					
				$row = 2;
				$obj->getActiveSheet()->getStyle('A'.$row.':O'.$row.'')->getFont()->setBold(true)->setSize(20);
				$obj->getActiveSheet()->setCellValueByColumnAndRow('4', $row, 'Cattles Data');
				$row = $row+3;
				$col=0;    
				$obj->getActiveSheet()->getStyle('A'.$row.':O'.$row.'')->getFont()->setBold(true);	
				$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'ID');
	    		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'NAME');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'CNIC');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'FATHER NAME');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DATE OF INCIDENT');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'ADDRESS');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'REASON FOR DAMAGE');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DISTRICT');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'CATTLE TYPE');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'HALQA PATWARI');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'REP OF MPA');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DISTRICT OFFICER LIVESTOCK');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'LOCAL SCHOOL HEADMASTER');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'LOCAL IMAM MASJID');

				foreach($cattle as $r) {
		       		$row++;
		       		$col=0;
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->ct_id);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->name);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->cnic);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->father_name);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->date_of_incident);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->address);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->reason);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->district);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->cattle_type);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->patwari);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->rep_mpa);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->officer_livestoct);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->headmaster);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->imam);
		       		
		       		// display other data here	
		       	}
			}

			if(!empty($house_damage)){
		   			
		       	$row= $row+3;
		   		$obj->getActiveSheet()->getStyle('A'.$row.':O'.$row.'')->getFont()->setBold(true)->setSize(20);	
		   		$obj->getActiveSheet()->setCellValueByColumnAndRow('4', $row, 'House Damages');
		   		$row= $row+3;
		   		$col=0;    
				$obj->getActiveSheet()->getStyle('A'.$row.':O'.$row.'')->getFont()->setBold(true);	
				$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'ID');
	    		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'NAME');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'CNIC');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'FATHER NAME');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DATE OF INCIDENT');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'ADDRESS');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'REASON FOR DAMAGE');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DISTRICT');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DAMAGE TYPE');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'HALQA PATWARI');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'REP OF MPA');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'TEHSILDAR');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'LOCAL SCHOOL HEADMASTER');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'LOCAL IMAM MASJID');

	       		

	   			foreach($house_damage as $r) {
		       		$row++;
		       		$col=0;
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->hd_id);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->name);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->cnic);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->father_name);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->date_of_incident);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->address);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->reason);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->district);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->damage_type);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->patwari);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->rep_mpa);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->tehsildar);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->headmaster);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->imam);
		       		
		       		// display other data here	
		       	}
	   		}
	   		if(!empty($dead_injured)){
	   			
		       	$row= $row+3;
		   		$obj->getActiveSheet()->getStyle('A'.$row.':O'.$row.'')->getFont()->setBold(true)->setSize(20);	
		   		$obj->getActiveSheet()->setCellValueByColumnAndRow('4', $row, 'Dead / Injured');
		   		$row = $row+3;
				$col=0;    
				$obj->getActiveSheet()->getStyle('A'.$row.':O'.$row.'')->getFont()->setBold(true);	
				$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'ID');
	    		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'NAME');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'CNIC');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'FATHER NAME');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DATE OF INCIDENT');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DATE OF REPORT BY R.F.S');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'ADDRESS');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'REASON ');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'DISTRICT');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'CASE TYPE');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'HALQA PATWARI');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'REP OF MPA');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'LOCAL SCHOOL HEADMASTER');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'MEDICAL OFFICER');
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, 'TEHSILDAR');

	       		

	   			foreach($dead_injured as $r) {
		       		$row++;
		       		$col=0;
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->di_id);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->name);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->cnic);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->father_name);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->date_of_incident);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->address);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->reason);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->district);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->case_type);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->patwari);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->rep_mpa);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->headmaster);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->med_officer);
		       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->tehsildar);
		       		
		       		// display other data here	
		       	}
	   		}

			$filename = 'output.xls';
			// Save it as an excel 2003 file
			$objWriter = PHPExcel_IOFactory::createWriter($obj, 'Excel5');
			$objWriter->save($filename);
			
			header('Content-Description: File Transfer');
		    header('Content-Type: application/octet-stream');
		    header('Content-Disposition: attachment; filename='.basename($filename));
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($filename));
		    ob_clean();
		    flush();
		    readfile($filename);
		}

	}
}	