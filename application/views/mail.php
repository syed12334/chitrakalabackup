<table>
	<tbody>
		<tr>
			<td>First Name</td>
			<td><?= $postcontent['fname']?></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><?= $postcontent['lname'];?></td>
		</tr>
		<tr>
			<td>Email ID</td>
			<td><?= $postcontent['email'];?></td>
		</tr>
		<tr>
			<td>Mobile Number</td>
			<td><?= $postcontent['phone'];?></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><?= $postcontent['country'];?></td>
		</tr>
		<tr>
			<td>City</td>
			<td><?= $postcontent['city'];?></td>
		</tr>
		<tr>
			<td>Message</td>
			<td><?= $postcontent['msg'];?></td>
		</tr>
		<?php
			if(!empty($names) && $names !="") {
				?>
				<tr>
					<td>Artist Name</td>
			<td><?= $names;?></td>
				</tr>
				<?php
			}
		?>
	</tbody>
</table>