(function () {

    //'use strict';

    angular
        .module('authApp')
        .controller('AuthController', AuthController);


    function AuthController($auth, $state, $scope) {

        var vm = this;

        vm.login = function () {

            var credentials = {
                email: vm.email,
                password: vm.password
            }

            // Use Satellizer's $auth service to login
            $auth.login(credentials).then(function (data) {

                // If login is successful, redirect to the users state
                $state.go('book', {routeName: 'book'});

            }, function (error) {
                $scope.Error = true;
                $scope.ErrorText = error.statusText;
                console.log(error);
            });
        }

    }

})();