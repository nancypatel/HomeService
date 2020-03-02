app.controller('CatCtrl', ['$scope', 'contactService',
    // we inject StudentService  inject becuse we call getAll method for get all student  
    function ($scope, contactService) {
        // this is base url
        var baseUrl = 'http://localhost/HomeService/HomeService/';
        // get all student from database  
        $scope.index = function () {
            var apiRoute = baseUrl + '_category';
            var _Category = contactService.getAll(apiRoute);

            _Category.then(function (response) {
                $scope.Category = response.data;
                console.log($scope.Category);
            },
                function (error) {
                    console.log("Error: " + error);
                });
        }
        $scope.index();
    }]);