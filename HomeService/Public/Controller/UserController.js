app.controller('UserCtrl', ['$scope', 'contactService',
    // we inject StudentService  inject becuse we call getAll method for get all student  
    function ($scope, contactService) {
        // this is base url
        var baseUrl = 'http://localhost/HomeService/HomeService/';
        // get all student from database  
        $scope.getContact = function () {
            var apiRoute = baseUrl + '_User';
            var _User = contactService.getAll(apiRoute);

            _User.then(function (response) {
                $scope.User = response.data;
                console.log($scope.User);
            },
                function (error) {
                    console.log("Error: " + error);
                });
        }
        $scope.getContact();

    }]);


// // open edit task details popup
//         $scope.edit = function (index) {
//             console.log(index);
//             $scope.task_details = $scope.tasks[index];
//             var modal_element = angular.element('#modal_update_task');
//             modal_element.modal('show');
//         };

//         // update the task
//         $scope.updateTask = function () {
//             $http.post('script/update.php', {
//                 task: $scope.task_details
//             })
//                 .then(function success(e) {
//                     $scope.errors = [];
//                     var modal_element = angular.element('#modal_update_task');
//                     modal_element.modal('hide');
//                 }, function error(e) {
//                     $scope.errors = e.data.errors;
//                 });
//         };

//         // delete the task
//         $scope.delete = function (index) {
//             var conf = confirm("Do you really want to delete the task?");
//             if (conf == true) {
//                 var apiRoute = baseUrl + '_contact/delete';
//                 var _contact = contactService.getAll(apiRoute);
//                 _contact.then(function (response) {
//                     $scope.Contact = response.data;
//                     console.log($scope.Contact);
//                 },
//                     function (error) {
//                         console.log("Error: " + error);
//                     });
//             }
//         };