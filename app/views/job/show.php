<div class="container-fluid">
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel-body">
			<div class="row">
				<div class="pull-right">
					<a href="<?php echo url();?>/job/index" data-toggle="tooltip" title="Back To Grid" class="btn btn-default"><i class="fa fa-refresh"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Job</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="<?php echo url();?>/job">
					<div class="form-group">
						<label class="col-sm-2 control-label">Job Name</label>
						<div class="col-sm-6">
							<label class="control-label"> : <?php echo $data->name;?></label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Min Salary</label>
						<div class="col-sm-6">
							<label class="control-label"> : <?php echo $data->min_salary;?></label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Max Salary</label>
						<div class="col-sm-6">
							<label class="control-label"> : <?php echo $data->max_salary;?></label>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>