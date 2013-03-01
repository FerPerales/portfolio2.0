console.log ("Counter is ready ");
$(document).ready(function(){
	$('#times').click(function(){
		console.log ('click!');
		var countSpan = $('.download-count',this);
		console.log (countSpan)
		countSpan.text( parseInt(countSpan.text())+1);
		
	});
});