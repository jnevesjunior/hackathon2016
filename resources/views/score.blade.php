<!DOCTYPE html>
<html lang="en" data-ng-app="hackathon" ng-cloak>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

    <title>Hackathon 2016</title>
    <!--

    ========== BEM VINDO AO NOSSO CÓDIGO FONTE ===============

                          _..._
                      .'     '.
                      /`\     /`\    |\
                      (__|     |__)|\  \\  /|
                      (     "     ) \\ || //
                      \         /   \\||//
                      \   _   /  |\|`  /
                       '.___.'   \____/
                        (___)    (___)
                      /`     `\  / /
                      |         \/ /
                      | |     |\  /
                      | |     | "`
                      | |     |
                      | |     |
                      |_|_____|
                      (___)_____)
                      /    \   |
                      /   |\|   |
                      //||\\  Y  |
                      || || \\ |  |
                      |/ \\ |\||  |
                      \||__|__|
                      (___|___)
                      jgs  /   A   \
                      /   / \   \
                      \___/   \___/

    -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/assets/css/animate.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link href="/bower_components/angular-vidbg/dist/vidBg.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Oleo+Script:400,700&subset=latin-ext" rel="stylesheet">
</head>


<body data-ng-controller="HomeController as Home">



<div data-ng-view class="full-height"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
        new WOW().init();
        $('.modal-trigger').leanModal();

        wh = $(window).height();

        /*$(".full-height").attr("style","")*/

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="//code.angularjs.org/1.5.5/angular.min.js?v=4"></script>
<script src="/assets/js/ui-bootstrap-tpls-2.1.3.min.js?v=4"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-materialize/0.2.1/angular-materialize.min.js"></script>
<script src="//code.angularjs.org/1.5.5/angular-route.min.js?v=4"></script>
<script src="//code.angularjs.org/1.5.5/angular-messages.min.js?v=4"></script>
<script src="//code.angularjs.org/1.5.5/angular-cookies.min.js?v=4"></script>
<script src="/assets/js/ngMask.min.js?v=4"></script>
<script src="/assets/js/wow.js?v=4"></script>
<script src="/app.js?v=2"></script>
<script src="/services/helper.js"></script>
<script src="/controllers/homeController.js?v=2"></script>
</body>

</html>
