// Add new contact...
var angularFormApp = angular.module('myapp', []);
angularFormApp.controller('contactCtrlEdit', ['$scope', '$http',
    function contactForm($scope, $http) {
        var id = 1;
        console.log('data 1');
        $http({
            method: 'GET',
            url: 'http://localhost/HomeService/HomeService/_contact/edit/' + id,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).then(function (data) {
            $scope.message = data.data;
            console.log('data1', message);
        },
            function (error) {
                console.log("Error: " + error);
            }
        );
    }]);

angularFormApp.controller('contactCtrl', ['$scope', '$http',
    function ($scope, $http) {
        $scope.message = {};
        debugger;
        $scope.submitForm = function () {
            $http({
                method: 'PUT',
                url: 'http://localhost/HomeService/HomeService/_contact/update',
                data: $scope.message, //forms user object
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).success(function (data) {
                $scope.message = data;
                if (data) {
                    alert('Update Successfully');
                    console.log(data);
                }
            });
        };
    }]);