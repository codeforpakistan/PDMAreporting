<?php

	class Report_export extends CI_Controller{

		public function index(){
			
			$this->load->model('report_model');
			$data = $this->report_model->general_report();
			$cattle	= $data['cattle'];
			$house	= $data['house_damage'];
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
			
			$row = 2;
			$obj->getActiveSheet()->getStyle('A'.$row.':O'.$row.'')->getFont()->setBold(true);	
			$obj->getActiveSheet()->setCellValueByColumnAndRow('4', $row, 'Cattles Data');

			foreach($cattle as $r) {
	       		$row++;
	       		$col=0;
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->ct_id);
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->cnic);
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->father_name);
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->cnic);
	       		$obj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $r->district);
	       		
	       		// display other data here	
	       		
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