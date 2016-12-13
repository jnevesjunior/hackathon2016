angular
    .module('hackathon')
    .controller('HomeController', ['$scope', '$location', 'helperService', '$cookies', '$window', '$http','orderByFilter','$timeout', HomeController])
    .config(['$routeProvider', routes]);

function routes($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: '/views/home.html',
            controller: 'HomeController',
            controllerAs: 'Home'
        });
}

function HomeController($scope, $location, helperService, $cookies, $window, $http, orderBy, $timeout) {
    var vm = this;
    console.log("loaded");
    vm.data = {};
    vm.updateChart = updateChart;
    $scope.reload = function() {
        /*vm.data = [{
            "id": 1,
            "key": "9f49c31f21b9b03a89783e7ee2a0be34",
            "name": "Goku",
            "cordX": 183,
            "cordY": 227,
            "angle": 330,
            "radar": 143,
            "speed": 1,
            "score": 36,
            "active": 1
        }, {
            "id": 2,
            "key": "6aa9df2ee5f5d7759d039c7c0d6dfaa0",
            "name": "Bulma",
            "cordX": 520,
            "cordY": 206,
            "angle": 180,
            "radar": 221,
            "speed": 1,
            "score": 24,
            "active": 1
        }, {
            "id": 8,
            "key": "f6358cea86f86968089090fe6f9726d2",
            "name": "M.Kame",
            "cordX": 668,
            "cordY": 397,
            "angle": 0,
            "radar": 107,
            "speed": 1,
            "score": 10,
            "active": 1
        }, {
            "id": 7,
            "key": "3c02c9309b172ef0d52f46a2175bc90f",
            "name": "Yamcha",
            "cordX": 600,
            "cordY": 412,
            "angle": 0,
            "radar": 161,
            "speed": 1,
            "score": 68,
            "active": 1
        }, {
            "id": 9,
            "key": "2ec24ad22f20be0c63066788ece2f1da",
            "name": "Piccolo",
            "cordX": 1026,
            "cordY": 430,
            "angle": 270,
            "radar": 276,
            "speed": 1,
            "score": 54,
            "active": 1
        }, {
            "id": 3,
            "key": "2f51ab5742614e6a708ded037ee27b8a",
            "name": "Vegeta",
            "cordX": 509,
            "cordY": 377,
            "angle": 0,
            "radar": 208,
            "speed": 1,
            "score": 40,
            "active": 1
        }, {
            "id": 4,
            "key": "ef45c085a88a7a94c53e8af3a4b9df06",
            "name": "Gohan",
            "cordX": 542,
            "cordY": 440,
            "angle": 0,
            "radar": 212,
            "speed": 1,
            "score": 30,
            "active": 1
        }, {
            "id": 5,
            "key": "993afc24119206d7c9b61ca0cf1b51a3",
            "name": "Trunks",
            "cordX": 607,
            "cordY": 445,
            "angle": 0,
            "radar": 147,
            "speed": 1,
            "score": 20,
            "active": 1
        }, {
            "id": 6,
            "key": "45637e7f4bacaaf9f24d52a29f7b4a0d",
            "name": "Kuririn",
            "cordX": 667,
            "cordY": 424,
            "angle": 0,
            "radar": 94,
            "speed": 1,
            "score": 10,
            "active": 1
        }];
        updateChart(vm.data);*/
        var url = "/game/score/ajax/209503e0c0e803979fd1e75ec4051f98";
        $http.get(url)
            .then(function(res) {
                console.log(res);
                vm.data = res.data;
                console.log(res.data);
                vm.updateChart(vm.data);
            }, function(err) {
                console.log('error', err);
            });

        $timeout(function() {
            $scope.reload();
        }, 500)
    };
    $scope.reload();


    function updateChart(data) {
        console.log(data);
        $scope.propertyName = "score";
        $scope.reverse = true;
        $scope.quantity = 2;
        $scope.quantityMiddle = 6;
        $scope.data = orderBy(data, $scope.propertyName, $scope.reverse);
        console.log($scope.data);
    }


}
