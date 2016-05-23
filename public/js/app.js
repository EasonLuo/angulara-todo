(function($){
	var app = angular.module('todo',[]);
	
	app.controller('todocontroller', function($scope){
		$scope.items = [];
		
		$scope.addNew = addNew;
		
		function addNew(){
			$scope.items.push({'title':$scope.new_title});
		}
	});
	
	app.directive('todoEnter', function () {
		
		return {
			restrict: 'A',
			link: function (scope, element, attrs) {
				element.bind("keydown keypress", function (event) {
		            if(event.which === 13) {
		                scope.$apply(function (){
		                    scope.$eval(attrs.todoEnter);
		                });
		 
		                event.preventDefault();
		            }
				});
			}
		};
	});
	
    $.material.init();
})(jQuery);