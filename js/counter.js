$(document).ready(function(){
	/* This code is executed after the DOM has been completely loaded */

	$('#times').click(function(){

		var countSpan = $('.download-count',this);
		countSpan.text( parseInt(countSpan.text())+1);
	});
});