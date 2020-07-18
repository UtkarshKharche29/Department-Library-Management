<?php
		include "index2.php";	
		if(isset($_GET['export']))
		{
			if($_GET['export']=='true')
			{
				$sql = "SELECT * FROM requested_books";
				$result = $mysqli->query($sql);
				$delimeter=",";
				$filename="requested_books".date('ymd').".csv";
				$f=fopen("php://memory","w");
				$field=array('SDRN_No','Book_Name','Author_Name','Publication','Date_Time');
				fputcsv($f,$field,$delimeter);
				 while($row = $result->fetch_assoc())
				{
					$lineData=array($row['SDRN_No'],$row['Book_Name'],$row['Author_Name'],$row['Publication'],$row['Date_Time']);
					fputcsv($f,$lineData,$delimeter);
				}
			fseek($f,0);
			header('Content-Type:text/csv');
			header('Content-Disposition: attachment;filename="'.$filename.'";');			
			fpassthru($f);
			}
		}
?>