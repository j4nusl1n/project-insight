<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
<div ng-app='Test'>
<div id="test" ng-controller="TestCtrl">
    {{ a }}
    <button class="btn btn-primary" ng-click="a=a+1">Plus 1</button>
</div>
</div>
<script type="text/javascript">
angular.module('Test', [])
    .run(['$rootScope', function($rootScope){}])
    .controller('TestCtrl', ['$scope', function($scope){
        $scope.a=123;
    }]);
</script>