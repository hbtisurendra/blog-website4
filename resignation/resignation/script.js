angular.module('regination', [])
  .controller('RegController', function($scope,$http){
   $scope.master = {};
    $scope.update = function(log) {
    
      var config = {
        params: {
          log: log
        }
      };

      $http.post("server.php", null, config)
        .success(function (data, status, headers, config)
        {
           //alert(data.empcode);
           
		   //window.location.reload();
	       //$scope.master = angular.copy(data);
		   
		   if(data.empcode!=null){
              
					jQuery( "#dialog" ).dialog({
					width: 400,
					modal: true,
					buttons: {
					Ok: function() {
					$( this ).dialog( "close" );
					
					var url ='part1.php?id='+data.empcode+'';
			 //confirm(url);
		             window.location.href = url;
					
					}
					}
					});
					return false;
			 
			  
		   }
			
        })
        .error(function (data, status, headers, config)
        {
			
          $scope[resultVarName] = "SUBMIT ERROR";
        });
    };
	
	$scope.checkboxModel = {
       value1 : true,
     };
	
 });

