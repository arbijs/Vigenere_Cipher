<html>
	<head>
		<title>Sandi Vigenère</title>
		
	</head>
	<body>
		<form method="POST">
			<label>Kata Kunci</label><br/>
			<input type="text" name="kunci" value="<?php echo isset($_POST['kunci']) ? $_POST['kunci'] : '';?>"/><br/>
			<label>Pesan</label><br/>
			<textarea cols="100" rows="10" name="pesan" ><?php echo isset($_POST['pesan']) ? $_POST['pesan'] : '';?></textarea><br/>
			<input type="radio" name="type" value="en" checked> Encrypt  
			<input type="radio" name="type" value="de" > Decrypt  <br/>
			<input type="submit" value="Eksekusi"/>
		</form>
		
		<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			include 'Vigenere_Cipher.php';
			$my = new Vigenere_Cipher;
			echo "<strong>Hasilnya</strong><br/>";
			
			$kunci = strtoupper($_POST['kunci']);
			$pesan = strtoupper($_POST['pesan']);
			if($_POST['type'] == 'de'){
				echo $my->decrypt($kunci,$pesan);
			}else{
				echo $my->encrypt($kunci,$pesan);
			}
		}
		?>
		<hr/>
		Dibuat oleh : Chabib nurozak 
		Download Code : <a href="https://github.com/chabibnr/Vigenere_Cipher">Goto Github</a>, Follow Me on twitter <a href="https://twitter.com/chabibnr">@chabibnr</a>
	</body>
</html>
