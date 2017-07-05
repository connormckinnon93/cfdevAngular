<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>{{ heading }}</h1>
			<hr>
		</div>
	</div>
	<div ng-repeat="category in courses" class="row">
		<div class="col-sm-12">
			<h2>{{ category.title }}</h2>
			<br>
		</div>
		<div ng-repeat="course in category.courseList">
			<div ng-if="course.status == filter">
				<div class="col-md-6 hero-feature text-center">
					<div class="thumbnail">
						<div class="caption">
							<h3>{{ course.code }}</h3>
							<h5>{{ course.name }}</h5>
						</div>
						<a href="#!/{{ type }}/{{ course.code }}" class="btn btn-primary btn-block">{{ action }} Course</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

