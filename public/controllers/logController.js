angular
    .module('hackathon')
    .controller('LogController', ['$scope', '$location', 'helperService', '$cookies', '$window', '$http', LogController])
    .config(['$routeProvider', routes]);

function routes($routeProvider) {
    $routeProvider
        .when('/', {
            controller: 'LogController',
            controllerAs: 'Log'
        });
}

function LogController($scope, $location, helperService, $cookies, $window, $http) {
    $('.collapsible').collapsible();

    var vm = this;
    vm.genderFilter = "none";
    vm.name = "";
    vm.token = "";
    vm.data = {};
    vm.changeToken = changeToken;
    function changeToken() {
      vm.loading = true;
      var url = "https://ldchackathon.herokuapp.com/api/fetch/";
      url = url + vm.token;
      //console.log(url);
      $http.get(url)
      .then(function(res) {
          console.log(res);
          vm.data = res.data.Items;
          console.log(vm.data);
          vm.loading = false;
      }, function(err) {
          console.log('error', err);
          url = "http://localhost:8080/api/fetch/";
          url = url + vm.token;
          $http.get(url)
          .then(function(res) {
              console.log(res);
              vm.data = res.data.Items;
              vm.loading = false;
              console.log(vm.data);
              $scope.apply();
          }, function(err) {
              vm.loading = false;
              console.log('error', err);
              vm.showMessage("Tente novamente");
          });

      });
    }

    $('select').material_select();
    vm.export = exportExcel;

     function exportExcel() {

            var tab_text = document.getElementById("records").outerHTML;
            var textRange; var j = 0;
            var tab = document.getElementById('records'); // id of table
            var sa;
            var ua = $window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            var txt = document.getElementById('records').contentWindow;
            sa = $window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

            return (sa);
    }
}
