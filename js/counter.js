$(document).ready(function(){
	/* This code is executed after the DOM has been completely loaded */
	console.log "Counter is ready "

	$('#times').click(function(){
		console.log 'click!'
		var countSpan = $('.download-count',this);
		console.log countSpan
		countSpan.text( parseInt(countSpan.text())+1);
		
	});
});