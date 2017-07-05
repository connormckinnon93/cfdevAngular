<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>{{ heading }}</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div ng-repeat="category in courses">
			<div ng-repeat="course in category.courseList">
				<div ng-if="course.status == filter">
					<div class="col-md-3 hero-feature text-center">
						<div class="thumbnail">
							<div class="caption">
								<h3>{{ course.code }}</h3>
							</div>
							<a href="#!/{{ type }}/{{ course.code }}" class="btn btn-primary btn-block">{{ action }} Course</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

