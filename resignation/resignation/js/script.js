angular.module('regination', [])
  .controller('RegController', function($scope,$http){
   

   
	$scope.master = {};
	 
	 
	$scope.update = function(log) {
    
	$scope.rdreliving = $("#datepicker").val();
	$scope.shortnotice = $("#shortnotice").val();
	
	log.rdreliving = $scope.rdreliving;
	log.shortnotice = $scope.shortnotice;
	
	console.log(log);
	
      var config = {
        params: {
          log: log
        }
      };
	 
  if(log.reason != null && log.remarks != null){  
	 if(log.terms ==null || log.terms =='NO'){ 
       jQuery('.nerror').html('Please fill the survey.');
     }	 
	  
	 if(log.terms =='YES')
	 {
	  
	   jQuery('.nerror').html(''); 
	  
	  if(log.answer1 ==null || log.answer2 ==null || log.answer3 ==null || log.answer4 ==null || log.answer5 ==null || log.answer6 ==null || log.answer7 ==null || log.answer8 ==null || log.answer9 ==null || log.answer10 ==null || log.answer11 ==null || log.answer12 ==null || log.answer13 ==null || log.answer14 ==null || log.answer15 ==null){
	  //jQuery('.question3').css('color','red');
	  jQuery( "#dialogterms" ).dialog({
					width: 400,
					modal: true,
					buttons: {
					Ok: function() {
					$( this ).dialog( "close" );
					    }
					  }
					});
					return false;
		 }
	   
	 
	 
	 
      $http.post("server.php", null, config)
        .success(function (data, status, headers, config)
        {
         
           //alert(data);
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
	  }
	 }
    };
	 
	
	
 });


 

