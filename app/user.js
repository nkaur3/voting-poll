
 var app = angular.module('myModule', [])
        app.controller('myController', function ($scope, $http) {
            $scope.getData = function () {
                if (typeof ($scope.user) == "undefined" || $scope.user == "") {
                    $("#usererror").text("Please enter your name!");
                    return;
                }
                window.localStorage.setItem('user', $scope.user);
               $http.post('./ajax/users.php?user='+ $scope.user).then(function gotResponse(response) {
                        if(response.data!='')
                        {
                            title = response.data;
                            //alert(title);
                            window.localStorage.setItem('votedTitle', response.data);
                           
                            window.open("./voted.html","_self");
                        }
                        else
                        {
                            window.open("./index.html","_self");
                        }
                    });
   			 	
            }
        });

    var app1 = angular.module('myApp1',[]);

app1.controller('votingCtrl', function($scope, $http) {
    var votedTitle = localStorage.getItem('votedTitle');
     $("#votedTitle").text(votedTitle);
  $http.post('./ajax/getPosts.php').success(function(data){
    $scope.posts = data;
  });
});