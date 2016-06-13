var baseUrl = 'http://localhost/KBMS/public/note/i/'

angular.module('noteApp', []).controller('noteBookController', ['$scope', '$http', '$rootScope', function noteBookController($scope, $http, $rootScope){
    $rootScope.curNoteBookId = 1;
    
    $scope.getNoteBook = function(){
        $http.get(baseUrl+'folder').then(function(response){
        $rootScope.noteBooks = response.data;
        });
    }

    $scope.changeNoteBookId = function(id){
        $rootScope.curNoteBookId = id;
    }

    $scope.modifyNoteBookName = function(name){
        $http.post(baseUrl+'folder/'+$rootScope.curNoteBookId, {'opt': 'mdf', 'folname': name}).then(function(response){
            if(response.data == 0)
                $scope. getNoteBook();
            else
                alert(response.data);
        });
    }

    $scope.deleteNoteBook = function(){
        $http.post(baseUrl+'folder/'+$rootScope.curNoteBookId, {'opt': 'del'}).then(function(response){
            if(response.data == 0)
                $scope. getNoteBook();
            else
                alert(response.data);
        });
    }


    $scope.initNoteBookMenuClick = function(){
    function ppp_click(event){
        var u_id = null;
        l_id = angular.element(this).attr("id");
        u_id = l_id;
        u_id = u_id.substr(1);
        //console.log(event.clientX);
        var x = event.clientX;
        var y = event.clientY;
        console.log(-y+120+" "+y);
        angular.element(".more_N").css("top",(y-600)+"px");
        angular.element(".more_N").show();

    };
    angular.element(".ppp_icon").click(ppp_click);
    }

    $scope.init = function(){
        $scope.getNoteBook();
    }

    $scope.init();
}]);