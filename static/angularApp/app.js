/**
 * Created by shubham on 2/9/16.
 */
'use strict';

/**
 * @ngdoc overview
 * @name UDDApp
 * @description
 * # UDDApp
 *
 * Main module of the application.
 */
angular.module('angularApp', ['ui.bootstrap'])
    /*.config(function ($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/main.html',
                controller: 'MainCtrl',
                controllerAs: 'main'
            })
            .when('/about', {
                templateUrl: 'views/about.html',
                controller: 'AboutCtrl',
                controllerAs: 'about'
            })
            .otherwise({
                redirectTo: '/'
            });
    })*/
    .constant("UDDConfig", {
        "uddServiceURLPrefix":"http://10.192.35.115:9080/udd-ee",//"http://10.192.35.115:9080/udd-ee", //"http://10.192.36.111:9080/udd-ee",
        "uddIOServiceURLPrefix": "http://localhost:3000"
    });
    /*.config(function ($httpProvider) {
        $httpProvider.interceptors.push('xmlHttpInterceptor');
    });*/

