<?php
session_start();
if(isset($_SESSION['infoID']))
{
	include 'init.php';

if (isset($_FILES['ecx'])) {
	// code...
			$name = $_FILES['ecx']['name'];
			$s = $name;
	    require_once "PHPExcel.php";
			$tmpfname = $s;
			$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
			$excelObj = $excelReader->load($tmpfname);
			$worksheet = $excelObj->getSheet(0);
			$lastRow = $worksheet->getHighestRow();

			echo "<table border=1>";
			for ($row = 4; $row <= $lastRow; $row++) {
				 echo "<tr><td>";
				 echo $worksheet->getCell('A'.$row)->getValue();
				 echo "</td><td>";
				 echo $worksheet->getCell('B'.$row)->getValue();
				 echo "</td><td>";
				 echo $worksheet->getCell('C'.$row)->getValue();
				 echo "</td><tr>";

			}
			echo "</table>";
}
else {

?>

<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="ecx"/>
<input type="submit" value="fetch"/>

</form>

<?php
}

   include $tpl . 'footer.php';

}

else{

    header("Location:index.php");
    exit();

}



?>
