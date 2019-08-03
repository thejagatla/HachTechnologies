
var app = angular.module("HachTech", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "index.html",
    })
    .when("/about", {
        templateUrl : "about.html",
        
    })
    .when("/training", {
        templateUrl : "training.html",
       
    })
    .when("/consultant", {
        templateUrl : "consultant.html",
       
    })
    .when("/contact", {
        templateUrl : "contact.html",
       
    });
});