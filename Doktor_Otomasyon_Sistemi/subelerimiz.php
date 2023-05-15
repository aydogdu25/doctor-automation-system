<!DOCTYPE html>
<html>
<head>
	<title>Hastaneler Tablosu</title>
	<link rel="stylesheet" type="text/css" href="panel.css">
	<a href='Anasayfa.php' style='background-color: #0F4C75; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Anasayfaya Dön</a></div>
</head>
<body>

		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "doktor_otomasyon";

			
			$conn = new mysqli($servername, $username, $password, $dbname);

			
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			
			$sql = "SELECT * FROM hastaneler";
			$result = $conn->query($sql);

			
			if ($result->num_rows > 0) {
				echo "<table><tr><th>Şehir Adı</th><th>Hastane Sayısı</th></tr>";
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["sehir_ad"]."</td><td>".$row["hastane_sayi"]."</td></tr>";
				}
				echo "</table>";
			} 

			$conn->close();
		?>
	
</body>
</html>


