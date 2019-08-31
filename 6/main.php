<?php
	$query = mysqli_query($koneksi, "SELECT salary.*, name.name, work.work FROM salary, name, work WHERE salary.id = name.id AND salary.id = work.id ORDER BY id DESC");
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

		if(mysqli_num_rows($query)){
			while ($row=mysqli_fetch_array($query)) {
				echo "<tr>";
				echo "<td>$row[name]</td>";
				echo "<td>$row[work]</td>";
				echo "<td>".rupiah($row['salary'])."</td>";
				echo "<td>
						<a href='formedit.php' class='open_modal' id='$row[id]'><img src='assets/eddit.png' width='20px'/></a>
						<a href='#' onClick='confirm_delete(\"delete.php?id=$row[id]\")'><img src='assets/hapus.png' width='20px' /></a>
					 </td>";
				echo "</tr>";
			}
		}

	?>
</tbody>