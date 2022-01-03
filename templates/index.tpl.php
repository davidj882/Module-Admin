<div class="container">
	<div class="page-section">
		<div class="row">
			<div class="col-md-12">
				<!-- IF USE DIALOGBOX -->
				<?php if (isset($this->dialogBox)): ?>
					<?php print_r($this->dialogBox); ?>
				<?php endif ?>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="media v-middle">
							<div class="media-body">
								<h4 class="text-headline margin-none">Panel title</h4>
								<p class="text-subhead text-light">Panel Subtitle</p>
							</div>
							<div class="media-right">
								<a class="btn btn-success btn-flat" href="#">
									<i class="fas fa-plus"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="panel-body">
						<h2><?= get_lang('moduleName') ?></h2>

						<div class="divider"></div>
						
						<hr class="margin-v-8" />

						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>A</th>
										<th>B</th>
										<th>C</th>
										<th>D</th>
										<th>E</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>2</td>
										<td>3</td>
										<td>4</td>
										<td>5</td>
									</tr>
									<tr>
										<td>5</td>
										<td>4</td>
										<td>3</td>
										<td>2</td>
										<td>1</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="panel-footer text-right">
						<button type="button" class="btn btn-default">button</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>