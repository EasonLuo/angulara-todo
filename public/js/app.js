(function($){
	var app = angular.module('todo',[]);
	
	app.controller('todocontroller', function($scope){
		$scope.items = [];
		$scope.last_id = 0;
		
		$scope.addNew = addNew;
		
		function addNew(){
			if($scope.new_title && $scope.new_title.trim()!=""){
				$scope.items.push({'id':++$scope.last_id,'title':$scope.new_title});
			}
			$scope.new_title = "";
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
    
    $(".svert").noUiSlider({
        orientation: "vertical",
        start: 2,
        step: 1,
        connect: "lower",
        range: {
          min: 1,
          max: 3
        }
    });
})(jQuery);