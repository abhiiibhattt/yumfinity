$(document).ready(function(){
	
	$('#reg_btn').click(function(){
		$('#loginClient').modal('hide');
		$('#registerClient').modal('show');
	});

	$('#login_btn').click(function(){
		$('#registerClient').modal('hide');
		$('#loginClient').modal('show');
	});

});