/**
 * 
 */

(function() {

	var app = angular.module('countries', []);

	app.factory('countryService', function($http) {
		var baseUrl = 'services/';
		return {
			getCountries : function() {
				return $http.get(baseUrl + 'getCountries.php');
			}
		};
	});

	app.controller("CountryController", function(countryService) {
		var that = this;

		/*
		 * $http({ method : 'GET', url : 'services/getCountries.php'
		 * 
		 * }).success(function(data) { that.countries = data; });
		 */
		countryService.getCountries().success(function(data) {

			that.countries = data;
		});

	});

	/*
	 * movido para a diretiva app.controller("StateController",
	 * function(countryService) { this.newState=""; this.addStateTo =
	 * function(country){ if(!country.states){ country.states = []; }
	 * 
	 * country.states.push({"name":this.newState}); this.newState=""; } });
	 */

	app.directive('stateView', function() {
		return {
			restrict : 'E',
			templateUrl : 'state-view.html',
			controller : function() {
				this.newState = "";
				this.addStateTo = function(country) {
					if (!country.states) {
						country.states = [];
					}

					country.states.push({
						"name" : this.newState
					});
					this.newState = "";
				}
			},
			controllerAs : 'stateCtrl'
		}
	});

})();