<?php  
	if(isset($_GET['offset']) && isset($_GET['limit'])) {
		$limit = $_GET['limit'];
		$offset = $_GET['offset'];

		$connection = mysqli_connect('localhost', 'root', '', 'loadmore');

		$data = mysqli_query($connection,"SELECT * FROM berita LIMIT {$limit} OFFSET {$offset}");

		while($row=mysqli_fetch_array($data)) {
			echo '<div class="blog-post"><h1>'.$row['id_berita'].". ".$row['judul_berita'].'</h1><p>'.$row['isi'].'</p></div>';
		}
	}
?>