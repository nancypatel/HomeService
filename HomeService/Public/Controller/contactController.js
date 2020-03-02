app.controller('contactCtrl', ['$scope', 'contactService',
    // we inject StudentService  inject becuse we call getAll method for get all student
    function ($scope, contactService) {
        // this is base url
        var baseUrl = 'http://localhost/HomeService/HomeService/';
        // get all student from database
        $scope.getContact = function () {
            var apiRoute = baseUrl + '_contact';
            var _contact = contactService.getAll(apiRoute);

            _contact.then(function (response) {
                $scope.Contact = response.data;
                console.log($scope.Contact);
            },
                function (error) {
                    console.log("Error: " + error);
                });
        }
        $scope.getContact();

        //To clear data
        $scope.Clear = function() {  
            $scope.cid = 0;  
            $scope.name = "";  
            $scope.email = "";  
            $scope.subject = "";  
            $scope.message = "";  
        }  

        //To delete
        $scope.delete = function(dataModel) {  
            debugger  
            var apiRoute = baseUrl + 'delete/' + dataModel.Cid;  
            var deleteContact = contactService.delete(apiRoute);  
            deleteContact.then(function(response) {  
                if (response.data != "") {  
                    alert("Data Delete Successfully");  
                    $scope.getContact();  
                    $scope.Clear();  
                } else {  
                    alert("Some error");  
                }  
            }, function(error) {  
                console.log("Error: " + error);  
            });  
        }  

        //To Update
        $scope.SaveUpdate = function() {  
            var Contact = {  
                cid: $scope.cid,  
                name: $scope.name,  
                email: $scope.email,  
                subject: $scope.subject,  
                message: $scope.message  
            }  
            if ($scope.btnText == "Save") {  
                var apiRoute = baseUrl + 'SaveStudent/';  
                var saveContact = contactService.post(apiRoute, student);  
                saveContact.then(function(response) {  
                    if (response.data != "") {  
                        alert("Data Save Successfully");  
                        $scope.getContact();  
                        $scope.Clear();  
                    } else {  
                        alert("Some error");  
                    }  
                }, function(error) {  
                    console.log("Error: " + error);  
                });  
            } else {  
                var apiRoute = baseUrl + 'UpdateStudent/';  
                var UpdateContact = contactService.put(apiRoute, student);  
                UpdateContact.then(function(response) {  
                    if (response.data != "") {  
                        alert("Data Update Successfully");  
                        $scope.getContact();  
                        $scope.Clear();  
                    } else {  
                        alert("Some error");  
                    }  
                }, function(error) {  
                    console.log("Error: " + error);  
                });  
            }  
        }  
    }]);



// // Add new contact...
// var angularFormApp = angular.module('myapp', []);
// angularFormApp.controller('contactCtrl', ['$scope', '$http',
//     function contactForm($scope, $http) {
//         $scope.contact = {};
//         $scope.submitForm = function () {
//             $http({
//                 method: 'post',
//                 url: 'http://localhost/HomeService/HomeService/_contact/add',
//                 data: $scope.contact, //forms user object
//                 headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
//             }).success(function (data) {
//                 $scope.message = data;
//                 if (data) {
//                     alert('Add Successfully');
//                     console.log(data);
//                 }
//             });
//         };
//     }]);