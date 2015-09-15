<div ng-app="gameApp">
	<div class="page-header text-center">
		<h1 style="font-weight:bold;">遊戲分類</h1>
        <span>前100大熱門遊戲都在這!</span>
	</div>
	<div class="left-column col-sm-3" style="float:left;">
		<h3>分類篩選</h3>
		<div class="game-filter" ng-controller="gameFilter">
            <div class="viewer-filter">
                <h5>人數</h5>
                <label for="viewer-0"><input type="checkbox" name="game-viewer" id="viewer-0" ng-true-value="1000" ng-false-value="0" ng-model="filter[0]" ng-change="viewerFilterChange(0)">
			 	   <span>0~1000人</span>
                </label><br/>
                <label for="viewer-1"><input type="checkbox" name="game-viewer" id="viewer-1" ng-true-value="5000" ng-false-value="0" ng-model="filter[1]" ng-change="viewerFilterChange(1)">
                    <span>1001~5000人</span>
                </label><br/>
                <label for="viewer-2"><input type="checkbox" name="game-viewer" id="viewer-2" ng-true-value="10000" ng-false-value="0" ng-model="filter[2]" ng-change="viewerFilterChange(2)">
                    <span>5001~10000人</span>
                </label><br/>
                <label for="viewer-3"><input type="checkbox" name="game-viewer" id="viewer-3" ng-true-value="10001" ng-false-value="0" ng-model="filter[3]" ng-change="viewerFilterChange(3)">
                    <span>10000人 +</span>
                </label>
            </div>
		</div>
	</div>
	<div class="right-column col-sm-9" style="float:right;">
		<div>
			<ul class="pagination pull-right" ng-controller="gamePagination">
				<li ng-class="currentPage==1?'disabled':'';"><a ng-click="gotoPage(currentPage-1, currentPage==1)"><i class="fa fa-chevron-left"></i></a></li>
				<li ng-repeat="page in range(5)" ng-class="currentPage==page?'active':'';">
                    <a ng-click="gotoPage(page)" ng-bind="page" style="cursor:pointer;">
                    </a>
                </li>
				<li ng-class="currentPage==5?'disabled':'';"><a ng-click="gotoPage(currentPage+1, currentPage==5)"><i class="fa fa-chevron-right"></i></a></li>
			</ul>
		</div>
		<div class="game-list" ng-controller="gameContent">
			<div class="game-content" ng-repeat="game in games">
                <a ng-href="http://www.twitch.tv/directory/game/{{game.game.name}}" target="_blank">
                    <img ng-src="{{game.game.box.large}}" style="max-height:100%;max-width:100%;">
                    <div style="margin-bottom:5px;text-align:center;">
                        <span ng-bind="game.game.name" style="font-weight:bold;"></span><br/>
                        觀看人數: <span ng-bind="game.viewers"></span><br/>
                        頻道數: <span ng-bind="game.channels"></span>
                    </div>
                </a>
			</div>
		</div>
        <div>
            <ul class="pagination pull-right" ng-controller="gamePagination" ng-init="setList()">
                <li ng-class="currentPage==1?'disabled':'';"><a ng-click="gotoPage(currentPage-1, currentPage==1)"><i class="fa fa-chevron-left"></i></a></li>
                <li ng-repeat="page in range(5)" ng-class="currentPage==page?'active':'';">
                    <a ng-click="gotoPage(page)" ng-bind="page" style="cursor:pointer;">
                    </a>
                </li>
                <li ng-class="currentPage==5?'disabled':'';"><a ng-click="gotoPage(currentPage+1, currentPage==5)"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </div>
	</div>
</div>
<script type="text/javascript">
	angular.module('gameApp', [])
    .run(['$location', '$rootScope', '$http', function($location, $rootScope, $http){
    	$rootScope.range=function(num){
    		var tmp=[];
    		for(var i=1;i<=num;i++)
    			tmp.push(i);
    		return tmp;
    	};
        
    	$rootScope.$on('$locationChangeSuccess', function(e){
            if(!$location.search()['page'])
            	$location.search('page', 1);
            $rootScope.$broadcast('contentChange');
            //console.log('hi');
        });
    }])
    .filter('viewer', function(){
        return function(objs, lowerbound, upperbound){
            var output=[];
            angular.forEach(objs, function(obj){
                if(obj.viewers>lowerbound&&obj.viewers<=upperbound)
                    output.push(obj);
            })
            return output;
        };
    })
    .filter('channel', function(){
        return function(channel){

        };
    })
    .controller('gameFilter', ['$scope', '$location', '$http', function($scope, $location, $http){
        $scope.filter=[0,0,0,0];
    	$scope.viewerFilterChange=function(index){
            console.log($scope.filter);
        };
    }])
    .controller('gamePagination', ['$scope', '$location', '$http', function($scope, $location, $http){
        $scope.$on('gamelist_len', function(e, gamelist_len){
            $scope.currentPage=parseInt($location.search()['page'], 10);
        });

        $scope.gotoPage=function(page, disabled){
        	if(disabled) return false;
        	$location.search('page', page);
        };
    }])
    .controller('gameContent', ['$scope', '$location', '$http', '$filter', '$rootScope', function($scope, $location, $http, $filter, $rootScope){
    	$scope.fullGames=[];
        $scope.setList=function(){
            var url='<?= $twitchAPIBaseUrl ?>'+'games/top?limit=100&callback=JSON_CALLBACK';
            $http.jsonp(url)
                .success(function(games, statusCode){
                    $('html body').stop().animate({
                        'scrollTop': 0
                    }, 1000, 'swing');
                    $scope.fullGames=games.top;
                });
        }
        $scope.$on('contentChange', function(){
            $scope.games=$scope.fullGames;console.log($scope.fullGames);
        });
    }]);
</script>
<style type="text/css">
.game-list{
    float:left;
    width:100%;
    margin-top: 3%;
}
.game-content{
    position:relative;
    float:left;
    margin-right:15px;
    margin-bottom: 10px;
    border: 1px solid #efefef;
    border-radius:5px;
    width:20%;
    height:290px;
    overflow: hidden;
}
.hover-content{
    position:absolute;
    height:22.5%;
    width:100%;
    background-color:rgba( 224, 224, 224, 0.6);
    opacity:0;
}
.game-content:hover .hover-content{
    opacity:1;
    webkit-transition: all ease-in-out 0.3s;
    -moz-transition: all ease-in-out 0.3s;
    -o-transition: all ease-in-out 0.3s;
    transition: all ease-in-out 0.3s;
}
</style>