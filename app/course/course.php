<div class="container-fluid">
	<div class="row is-flex">
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked">
				<li ng-repeat="module in numModules" ng-class="{ active: isSet(module) }">
					<a href ng-click="setTab(module)">{{ module }}</a>
				</li>
				<li>
					<a href ng-click="setTab('request')">Request Module</a>
				</li>
			</ul>
		</div>
		<div class="col-md-9">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" ng-src="{{ trustSrc(modulePath) }}"></iframe>
			</div>
		</div>
	</div>
	<br>
	<div ng-if="type == 'devsite'" class="row">
		<div class="col-md-12">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" ng-src="{{ trustSrc(sheet) }}"></iframe>
			</div>
		</div>
	</div>
</div>