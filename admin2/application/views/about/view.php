<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Apitong Village Website Admin Panel
		<small>Optional description</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Your Page Content Here -->
	<div class='row'>
		<div class='col-md-12'>
			<div class='box box-successful'>
				<div class='box-header'>
					Main About 
					<a href="<?php echo base_url('about/edit_article/' . $main_about->id . "/1");?>" class='btn btn-primary pull-right'>Edit</a>
				</div>
				<div class='box-body'>
					<?php
					if (isset($main_about))
					{
					?>
						<h4><b>Title: </b><?php echo $main_about->title; ?></h4>
						<br/><b>Text:</b><br/>
						<?php echo html_entity_decode($main_about->text); ?>
					<?php 
					} 
					else
					{
						echo "No About Us page yet.";
					}
					?>
				</div>
			</div> <!-- end box -->
		</div>
	</div> <!-- end row -->
	<div class='row'>
		<div class='col-md-12'>
			<div class='box box-primary'>
				<div class='box-header'>
					<h3>Articles</h3>
					<a href="<?php echo base_url('about/new_article');?>" class='btn btn-primary'> New Article</a>
				</div>
				<div class='box-body'>
					table for articles goes here
					<table id='article-table' class='table table-hover table-bordered'>
						<thead>
							<tr>
								<td>Title</td>
								<td>Text</td>
								<td>Author</td>
								<td>Category</td>
								<td>Creation Date</td>
								<td>Last Editor</td>
								<td>Last Edited on</td>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($about_articles as $row)
								{
									echo "<tr>";
									echo "<td><h4>" . htmlentities($row->title) . "</h4>";
									echo "<a href='" . base_url('about/edit_article/' . $row->id) . "' class='btn btn-sm pull-right btn-primary'>Edit</button>";
									echo "</td>";
									echo "<td>" . htmlentities(substr($row->text, 0, 100) )."..." . "</td>";
									echo "<td>" . htmlentities($row->author_username) . "</td>";
									echo "<td>" . htmlentities($row->name) . "</td>";
									
									echo "<td>" . htmlentities($row->creation_date) . "</td>";
									echo "<td>" . htmlentities($row->editor_username) . "</td>";
									echo "<td>" . htmlentities($row->last_edit_date) . "</td>";
									echo "</tr>";

								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
</section>
<!-- /.content -->

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
<script>
$(function() {
	$('#article-table').DataTable({
		"ordering":true
	});
});
</script>