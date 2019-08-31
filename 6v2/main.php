<?php

	include_once("koneksi.php");

?>
<thead class="thead-light" align="center">
	<tr>
		<th>Nama</th>
		<th>Work</th>
		<th>Salary</th>
		<th>Action</th>
	</tr>
</thead>
<tbody align="center">
	<?php
		$query = mysqli_query($koneksi, "SELECT * FROM karyawan");

		while($row=mysqli_fetch_array($query)){
			echo "<tr>
					<td>$row[name]</td>
					<td>$row[work]</td>
					<td>".rupiah($row["salary"])."</td>
					<td><a href='formedit.php?id=$row[id]'><img src='assets/eddit.png' width='20px'/></a>
						<a href='prosesHapus.php?id=$row[id]'><img src='assets/hapus.png' width='20px' /></a>
					</td>
				</tr>";
		}
	?>
</tbody>