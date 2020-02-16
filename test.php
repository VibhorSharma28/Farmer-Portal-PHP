<?php
$connect = mysqli_connect("localhost","root","","test");
include ("IOFactory.php");
$html="<table border='1'>";
$objPHPExcel = IOFactory::load('example.xls');
foreach ($objPHPExcel->getWorksheetIteration() as $worksheet) 
{
	$highestRow = $worksheet->getHighestRow();
	for ($row=2; $row<=$highestRow ; $row++) 
	{ 
		$html.="<tr>";
		$name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
		$des = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
		$rec = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
		$dose = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
		$avail = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
		$crop = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
		$sql = "INSERT INTO product(pro_name, des, recommendation, Dose, Available_Packing, Crops) VALUES('".$name."','".$des."','".$rec."','".$dose."','".$avail."','".$crop."')";
		mysqli_query($connect, $sql);
		$html.='<td>'.$name.'</td>';
		$html.='<td>'.$dec.'</td>';
		$html.='<td>'.$rec.'</td>';
		$html.='<td>'.$dose.'</td>';
		$html.='<td>'.$avail.'</td>';
		$html.='<td>'.$crop.'</td>';
		$html.="<td>";
	}
}
$html .='</table>';
echo "Data Inserted";
?>