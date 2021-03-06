<!DOCTYPE html>
<html lang="en" ng-app="phalcone">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/full-slider.css" rel="stylesheet">
    <link href="/css/one-page-wonder.css" rel="stylesheet">

    <script src="/js/bower_components/jquery/dist/jquery.js"></script>
    <script src="/js/bower_components/angular/angular.js"></script>
    <script src="/js/bower_components/angular-animate/angular-animate.js"></script>
    <script src="/js/bower_components/angular-route/angular-route.js"></script>
    <script src="/js/bower_components/angular-resource/angular-resource.js"></script>
    <script src="/js/bower_components/angular-touch/angular-touch.js"></script>
    <script src="/js/bower_components/angular-cookies/angular-cookies.js"></script>
    <script src="/js/bower_components/ng-flow/dist/ng-flow-standalone.js"></script>

    <script src="/js/ui-bootstrap-tpls-0.13.0.min.js"></script>

    <script src="/js/app.js"></script>
    <script src="/js/controllers/slider-ctrl.js"></script>
    <script src="/js/controllers/sign-in-ctrl.js"></script>
    <script src="/js/controllers/sign-in-form-ctrl.js"></script>
    <script src="/js/controllers/sign-up-ctrl.js"></script>
    <script src="/js/controllers/sign-up-form-ctrl.js"></script>
    <script src="/js/controllers/log-out-ctrl.js"></script>

    <script src="/js/directives/logout.js"></script>

    <script src="/js/services/sign-in.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->

    <![endif]-->

</head>

<body ng-controller="MainController">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#/">Phalcone Test</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" ng-controller="MenuController as menus">
            <ul class="nav navbar-nav">
                <li ng-repeat="mainMenu in menus.menu">
                    <a href="<?php echo $mainMenu->url; ?>"><?php echo $mainMenu->label; ?></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li ng-controller="SignInFormCtrl" ng-hide="auth">
                    <a ng-click="open()" >Sign In</a>
                </li>
                <li ng-controller="SignUpFormCtrl" ng-hide="auth">
                    <a ng-click="open()" >Sign Up</a>
                </li>
            </ul>

            <log-out ng-show="auth" controller-name="LogOutCtrl"></log-out>

        </div>
    </div>
</nav>

<ng-view></ng-view>

</body>

</html>