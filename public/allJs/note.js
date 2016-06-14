var baseUrl = 'http://localhost/KBMS/public/note/i/';

var app = angular.module('noteApp', []);
app.controller('noteBookController', ['$scope', '$http', '$rootScope', function noteBookController($scope, $http, $rootScope){
    $rootScope.curNoteBookId = 1;
    $scope.now = 2;
    $scope.getNoteBook = function(){
        $http.get(baseUrl+'folder').then(function(response){
            $rootScope.noteBooks = response.data;
            // console.log(response.data[0]);
            if(response.data.length > 0)
                $rootScope.curNoteBookId = response.data[0].folid;
        });
    }

    $scope.changeNoteBookId = function(id){
        $rootScope.curNoteBookId = id;
        $rootScope.curNoteId = null;
        $rootScope.curNoteTitle = null;
        $rootScope.curNoteContent = null;
    }

    $scope.search = function(keyword){
        $http.get(baseUrl+'search?keyword='+keyword).then(function(response){
            $rootScope.notes = response.data;
        });
    }

    $scope.recentNote = function(){
        $http.get(baseUrl+'recentNote').then(function(response){
            $rootScope.notes = response.data
        });
    }

    $scope.modifyNoteBookName = function(name){
        $http.post(baseUrl+'folder/'+$rootScope.curNoteBookId, {'opt': 'mdf', 'folname': name}).then(function(response){
            if(response.data == 0)
                $scope. getNoteBook();
            else
                alert(response.data);
            document.body.style.overflow="visible";
            var oLayer=document.getElementById("layer");
            oLayer.style.display="none";
        });
    }

    $scope.deleteNoteBook = function(){
        $http.post(baseUrl+'folder/'+$rootScope.curNoteBookId, {'opt': 'del'}).then(function(response){
            if(response.data == 0)
            {
                $rootScope.notes = null;
                $rootScope.curNoteId = null;
                $rootScope.curNoteTitle = null;
                $rootScope.curNoteContent = null;
                $scope. getNoteBook();
            }
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


    $scope.showNewBook = function(){
        angular.element('#new2').unbind('click');
        angular.element("#new2").click(function(){
            ele = '<li id="fakeFolder">'+
                '<i class="pp_icon icon-file">&nbsp;</i>' +
                '<span> '+
                '<input type="text" class="N_text">'+
                '</span><i class="ppp_icon_p icon-tag"></i> </span>'+
                '</li>';
            angular.element("#my_ul").prepend(ele);
            angular.element('.N_text').bind('keyup', function(event){
                if(event.keyCode == 13){
                    $http.post(baseUrl+'folder', {'folname': angular.element('.N_text').val()}).then(function(response){
                        if(response.data == 0)
                            $scope.getNoteBook();
                        else
                            alert(response.data);
                        angular.element('#fakeFolder').remove();
                    });
                }
            })
                // $(".ppp_icon").click(ppp_click);

        });
    }

    $rootScope.getNote = function(folid){
        $http.get(baseUrl+'folder/'+folid+'/note').then(function(response){
            $rootScope.notes = response.data;
            // $scope.updateNote();
        })
    }

    $rootScope.updateNote = function(id, title, content){
        $rootScope.curNoteId = id;
        $rootScope.curNoteTitle = title;
        $rootScope.curNoteContent = content;
        // $rootScope.currentNoteContent = content;
        // alert('here');
        // function clickEvent(){
        //     alert('got');
            angular.element('#'+id).css("background-color","#c5e7ff");
            angular.element('#'+id).nextAll().css("background-color","#ffffff");
            angular.element('#'+id).prevAll().css("background-color","#ffffff");

        //     var this_id = angular.element(this).attr("id");
        //     cur_id = this_id;
        //     var o =angular.element("#"+this_id+" p")[0].innerHTML;
        //     ori_content = o;
        //     angular.element(".right_bottom p")[0].innerHTML = o;
        //     angular.element(".text_area")[0].value = o;

            if (angular.element(".edit_text").is(":visible")){
                angular.element(".right_bottom").css("dirootScopesplay","block");
                angular.element(".right_bottom").css("display","block");
                //$(".right_bottom p").text();
                angular.element(".edit_text").css("display","none");
                // angular.element("#"+$scope.curNoteId+" .N_two p")[0].innerHTML = ori_content;
            }
        // }
        // angular.element(".List").click(clickEvent);
    }

    $scope.registerSearchListener = function(){
        angular.element('.N_search_text').bind('keyup', function(event){
            if(event.keyCode == 13){
                $scope.search(angular.element('.N_search_text').val());
            }
        });
    }

    $scope.init = function(){
        $scope.registerSearchListener();
        $scope.getNoteBook();
        $scope.showNewBook();
    }

    $scope.init();
}]);

app.controller('noteController', ['$scope', '$http', '$rootScope', function noteController($scope, $http, $rootScope){
    $scope.noteTitle = angular.element('#noteTitleInput')[0];
    $scope.noteTitle.disabled = true;
//     rootScope.fields = {
//     inputModel: ''
// }
    // $scope.curNoteId = $rootScope.curNoteId;
    // $scope.curTitle = $rootScope.curTitle;
    // $scope.curContent = $rootScope.curContent;
    $scope.clickEdit = function(){
        $scope.noteTitle.disabled = false;
        var  i =$(".right_bottom p")[0].innerHTML;
        $(".edit_text").css("display","block");
        // $(".text_area")[0].value = i;
        $(".right_bottom").css("display","none");
    }

    $scope.clickSave = function(){
        $scope.noteTitle.disabled = true;
        if ($(".edit_text").is(":visible")){
            // var s =$(".text_area").val();
            $(".right_bottom").css("display","block");
            // $(".right_bottom p")[0].innerHTML = s;
            $(".edit_text").css("display","none");
            // $("#"+$rootScope.curNoteId+" .N_two p")[0].innerHTML = s;
            // ori_content = '';
            var notes = $rootScope.notes;
            // console.log(notes);
            for(var note in notes)
            {
                i = notes[note];
                if (i.nid == $rootScope.curNoteId){
                    i.notehead = $rootScope.curNoteTitle;
                    i.notebody = $rootScope.curNoteContent;
                    $http.post(baseUrl+'folder/'+$rootScope.curNoteBookId+'/note/'+$rootScope.curNoteId, {
                        'opt': 'mdf',
                        'notehead': i.notehead,
                        'notebody': i.notebody
                    }).then(function(response){
                        if(response.data == 0)
                            $rootScope.updateNote($rootScope.curNotekId, $rootScope.curNoteTitle, $rootScope.curNoteContent);
                        else
                            alert(response.data);
                    });
                }
            }
            // $[].notebody = ;
        }
    }

    $scope.clickNewNote = function(){
        $scope.noteTitle.disabled = true;
        $http.post(baseUrl+'folder/'+$rootScope.curNoteBookId+'/note', {
            'notehead': '新笔记',
            'notebody': ''
        }).then(function(response){
            if(response.data == 0)
                $rootScope.getNote($rootScope.curNoteBookId);
            else
                alert(response.data);
        });
    }

    $scope.clickDeleteNote = function(){
        $scope.noteTitle.disabled = true;
        $http.post(baseUrl+'folder/'+$rootScope.curNoteBookId+'/note/'+$rootScope.curNoteId, {
            'opt': 'del',
        }).then(function(response){
            if(response.data == 0){
                $(".right_bottom").css("display","block");
                $(".edit_text").css("display","none");
                $rootScope.curNoteId = null;
                $rootScope.curNoteTitle = null;
                $rootScope.curNoteContent = null;
                $rootScope.getNote($rootScope.curNoteBookId);
            }
            else
                alert(response.data);
        });
    }


}]);
