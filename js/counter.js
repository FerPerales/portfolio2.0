console.log ("Counter is ready ");
$(document).ready(function(){
	$('#times').click(function(){
		console.log ('click!');
		var countSpan = $('.download-count',this);
		console.log("Current counter: " + countSpan.text());
		countSpan.text( parseInt(countSpan.text())+1);
		
	});
});