<?php


if (isset($_FILES['ecx'])) {
	// code...
	$connect = mysqli_connect("localhost", "root", "", "mydb");
			$name = $_FILES['ecx']['name'];
			$s = $name;
	    require_once "PHPExcel/IOFactory.php";
			$tmpfname = $s;
			$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
			$excelObj = $excelReader->load($tmpfname);
			$worksheet = $excelObj->getSheet(0);
			$lastRow = $worksheet->getHighestRow();

			// echo "<table border=1>";
			for ($row = 4; $row <= $lastRow; $row++) {
				 // echo "<tr><td>";
				 $id = mysqli_real_escape_string($connect,$worksheet->getCell('A'.$row)->getValue());
				 // echo "</td><td>";
				 $name = mysqli_real_escape_string($connect,$worksheet->getCell('B'.$row)->getValue());
				 // echo "</td><td>";
				 $city = mysqli_real_escape_string($connect,$worksheet->getCell('C'.$row)->getValue());
				 // echo "</td><tr>";
				 $query = "
                     INSERT INTO test
                     (ID,Name,City)
                     VALUES ('".$id."', '".$name."', '".$city."')
                     ";
                     mysqli_query($connect, $query);



			}
			// echo "</table>";
			echo "Inserted to database";
}

else {
	// code...

?>



<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="ecx"/>
<input type="submit" value="fetch"/>

</form>
<?php
}


 ?>
