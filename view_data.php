<?php 
	include('header.php');
?>
			<section id="ServicesBanner">
				<header class="section-header">	
					<h3 class="text-white">Contact</h3>
				</header>
			</section>
			
			<br><br>
			
			<section id="services">
				<div class="container">
					<div class="section-header">
						<h3>View Data Contact Us</h3>
					</div>
					<div class="table-responsive wow fadeInUp">
						<table class="table table-hover table-striped">
							<thead style="background: linear-gradient(100deg, #2CCED3, #C2EBCD 80%)">
								<tr>
									<th class="text-center" scope="col">No.</th>
									<th class="text-center" scope="col">Name</th>
									<th class="text-center" scope="col">E-Mail</th>
									<th class="text-center" scope="col">Phone Number</th>
									<th class="text-center" scope="col">Company Name</th>
									<th class="text-center" scope="col">Company Address</th>
									<th class="text-center" scope="col">Subject</th>
									<th class="text-center" scope="col">Message</th>
								</tr>
							</thead>
							<?php
								include_once('contactform/koneksi.php');
								$pdo=Database::connect();
								$sql='SELECT * FROM contact_us order by name asc';
								$no=1;
								foreach($pdo->query($sql) as $row){
							?>
							<tbody>
								<tr class="table-light">
									<td><?php echo $no; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['company']; ?></td>
									<td><?php echo $row['address']; ?></td>
									<td><?php echo $row['subject']; ?></td>
									<td><?php echo $row['message']; ?></td>
								</tr>
							</tbody>
							<?php
								$no++;
								}
								Database::disconnect();
							?>
						</table>
					</div>
					<div class="text-center">
						<button class="btn btn-success rounded">PRINT</button>
					</div>
				</div>
			</section>
<?php
	include('footer_end.php');
?>
