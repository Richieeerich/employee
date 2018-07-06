<?php //if (!defined('BASEPATH')) exit('No direct script access allowed');
function pdf_create($html, $filename='', $stream=TRUE) 
{
    require_once("dompdf1/dompdf_config.inc.php");
    // $html = '<htm><body><p>adsfdsfds</p></body></html>';
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($page.".pdf");
    } else {
        $dompdf->output();
    }
    // print_r($dompdf);
}


function pdf()
{


	require_once 'db_config.php';
     // $this->load->helper(array('dompdf', 'file'));
     // page info here, db calls, etc.     
     // $html = $this->load->view('controller/viewfile', $data, true);
			// $output = '';
			$query = "select * from button_table ";	
			$result = $conn->query($query);
			$output = '<htm><body><div class="table-responsive">          
			 		 <table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>Name</th>
				        <th>gender</th>
				        <th>language</th>
				        <th>designation</th>
				        
				  	</tr>

	    			</thead>';		
			while($row = $result->fetch_assoc()) {
				$output.= '<tr><td>'.$row['name'].'</td>
				<td>'.$row['gender'].'</td>
				<td>'.$row['language'].'</td>
				<td>'.$row['designation'].'</td></tr>';
			}
			$output .= ' </table></div></body></html>';
	  return $output;
     /*or
     $data = pdf_create($html, '', false);
     write_file('name', $data);*/
     //if you want to write it to disk and/or send it as an attachment    
}

// $html = '<htm><body><div class="table-responsive">          
//  		 <table class="table table-bordered">
// 	    <thead>
// 	      <tr>
// 	        <th>Name</th>
// 	        <th>gender</th>
// 	        <th>language</th>
// 	        <th>designation</th>
// 	        <th>actiion</th>
// 	  	</tr>
// 	    </thead>
// 	    '.pdf().'
// 	    </table></div></body></html>'
// 	       ;
// pdf();
$html = pdf();
pdf_create($html, 'page');
// pdf();
?>