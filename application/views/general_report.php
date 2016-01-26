<?php 
    $this->load->view('template/header');
 
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<?php if(!empty($cattle)):?>
				<h2>Cattles Report</h2>
				<div class="table-responsive">
					<table class="table table-hover table-condensed table-striped">
					<tr class="success">
						<th>ID</th>
						<th>Name</th>
						<th>CNIC</th>
						<th>Father Name</th>
						<th>District</th>
						<th>Address</th>
						<th>Reason</th>
						<th>Cattle Type</th>
						<th>Date of Incident</th>
						<th>Budget</th>
						<th>Halqa Patwari</th>
						<th>Rep of MPA</th>
						<th>District officer livestock</th>
						<th>Local headmaster</th>
						<th>Local Imam Masjid</th>
					</tr>
					<?php foreach($cattle as $c):?>
					<tr>
						<td><?php echo $c->ct_id?></td>
						<td><?php echo $c->name?></td>
						<td><?php echo $c->cnic?></td>
						<td><?php echo $c->father_name?></td>
						<td><?php echo $c->district?></td>
						<td><?php echo $c->address?></td>
						<td><?php echo $c->reason?></td>
						<td><?php echo $c->cattle_type?></td>
						<td><?php echo $c->date_of_incident?></td>
						<td><?php echo $c->b_amount?></td>
						<td><?php echo $c->patwari?></td>
						<td><?php echo $c->rep_mpa?></td>
						<td><?php echo $c->officer_livestock?></td>
						<td><?php echo $c->headmaster?></td>
						<td><?php echo $c->imam?></td>

						<td></td>
					</tr>
				<?php endforeach;?>
				</table>
				</div>
			<?php endif;?>

			<?php if(!empty($house_damage)):?>
				<br>
				<h2>Houses Damage Report</h2>
				<div class="table-responsive">
					<table class="table table-hover table-condensed table-striped">
					<tr class="success">
						<th>ID</th>
						<th>Name</th>
						<th>CNIC</th>
						<th>Father Name</th>
						<th>District</th>
						<th>Address</th>
						<th>Reason</th>
						<th>Damage Type</th>
						<th>Date of Incident</th>
						<th>Budget</th>
						<th>Halqa Patwari</th>
						<th>Rep of MPA</th>
						<th>Tehsildar</th>
						<th>Local headmaster</th>
						<th>Local Imam Masjid</th>
					</tr>
					<?php foreach($house_damage as $c):?>
					<tr>
						<td><?php echo $c->hd_id?></td>
						<td><?php echo $c->name?></td>
						<td><?php echo $c->cnic?></td>
						<td><?php echo $c->father_name?></td>
						<td><?php echo $c->address?></td>
						<td><?php echo $c->reason?></td>
						<td><?php echo $c->district?></td>
						<td><?php echo $c->damage_type?></td>
						<td><?php echo $c->date_of_incident?></td>
						<td><?php echo $c->b_amount?></td>
						<td><?php echo $c->patwari?></td>
						<td><?php echo $c->rep_mpa?></td>
						<td><?php echo $c->tehsildar?></td>
						<td><?php echo $c->headmaster?></td>
						<td><?php echo $c->imam?></td>
						<td></td>
					</tr>
				<?php endforeach;?>
				</table>
				</div>
			<?php endif; ?>

			<?php if(!empty($dead_injured)):?>
				<br>
				<h2>Dead/Injured Report</h2>
				<div class="table-responsive">
					<table class="table table-hover table-condensed table-striped">
					<tr class="success">
						<th>ID</th>
						<th>Name</th>
						<th>CNIC</th>
						<th>Father Name</th>
						<th>District</th>
						<th>Address</th>
						<th>Reason</th>
						<th>Case Type</th>
						<th>Date of Incident</th>
						<th>Budget</th>
						<th>Halqa Patwari</th>
						<th>Rep of MPA</th>
						<th>Tehsildar</th>
						<th>Local headmaster</th>
						<th>Medical Officer</th>
					</tr>
					<?php foreach($dead_injured as $c):?>
					<tr>
						<td><?php echo $c->di_id?></td>
						<td><?php echo $c->name?></td>
						<td><?php echo $c->cnic?></td>
						<td><?php echo $c->father_name?></td>
						<td><?php echo $c->address?></td>
						<td><?php echo $c->reason?></td>
						<td><?php echo $c->district?></td>
						<td><?php echo $c->case_type?></td>
						<td><?php echo $c->date_of_incident?></td>
						<td><?php echo $c->b_amount?></td>
						<td><?php echo $c->patwari?></td>
						<td><?php echo $c->rep_mpa?></td>
						<td><?php echo $c->tehsildar?></td>
						<td><?php echo $c->headmaster?></td>
						<td><?php echo $c->med_officer?></td>
						<td></td>
					</tr>
				<?php endforeach;?>
				</table>
				</div>
			<?php endif; ?>

			<?php if(!empty($complaint)):?>
				<br>
				<h2>Casualties Report</h2>
				<div class="table-responsive">
					<table class="table table-hover table-condensed table-striped">
					<tr class="success">
						<th>ID</th>
						<th>Name</th>
						<th>CNIC</th>
						<th>Father Name</th>
						<th>District</th>
						<th>Address</th>
						<th>Reason</th>
					</tr>
					<?php foreach($complaint as $c):?>
					<tr>
						<td><?php echo $c->cm_id?></td>
						<td><?php echo $c->name?></td>
						<td><?php echo $c->cnic?></td>
						<td><?php echo $c->father_name?></td>
						<td><?php echo $c->address?></td>
						<td><?php echo $c->reason?></td>
						<td><?php echo $c->district?></td>
						<td></td>
					</tr>
				<?php endforeach;?>
				</table>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php 
    $this->load->view('template/footer');
?>