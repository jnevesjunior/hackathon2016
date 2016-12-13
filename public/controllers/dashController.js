angular
    .module('hackathon')
    .controller('DashController', ['$scope', '$location', 'helperService', '$cookies', '$window', '$http', '$timeout', DashController])
    .config(['$routeProvider', routes]);

function routes($routeProvider) {

}

function DashController($scope, $location, helperService, $cookies, $window, $http, $timeout) {
    var vm = this;
    vm.data = {};
    vm.updateChart = updateChart;
    $scope.reload = function() {
        vm.loading = true;
        var url = "https://ldchackathon.herokuapp.com/api/fetch/";
        var key = gup("key");
        url = url + key;
        $http.get(url)
            .then(function(res) {
                console.log(res);
                vm.data = res.data.Items;
                console.log(res.data.Items);
                vm.loading = false;
                vm.updateChart(vm.data);
            }, function(err) {
                console.log('error', err);
            });

        $timeout(function() {
            $scope.reload();
        }, 3000)
    };
    $scope.reload();



    function updateChart(data) {
        $scope.opcao = getOpcaoNum(data);
        $scope.etep = getETEPNum(data);
        console.log($scope.opcao);
        console.log($scope.etep);

        $scope.labels = ["Colégio Opção", "ETEP"];
        $scope.data = [$scope.opcao, $scope.etep];
        $scope.colors = ['#FD1F5E','#1EF9A1','#7FFD1F','#68F000'];
        //$scope.apply();
    }

    function getOpcaoNum(data) {
        var count = 0;
        for (var i = 0; i < data.length; i++) {
            if (data[i].testPlace == "Colegio Opção") {
                count = count + 1
            }
        }
        return count;
    };

    function getETEPNum(data) {
        var count = 0;
        for (var i = 0; i < data.length; i++) {
            if (data[i].testPlace == "ETEP Esplanada") {
                count = count + 1
            }
        }
        return count;
    };

    function gup(name) {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regexS = "[\\?&]" + name + "=([^&#]*)";
        var regex = new RegExp(regexS);
        var results = regex.exec(window.location.href);
        if (results == null)
            return "";
        else
            return results[1];
    }

}
