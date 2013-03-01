console.log ("Counter is ready ");
$(document).ready(function(){
	$('#times').click(function(){
		console.log ('click!');
		var countSpan = $('span.download-count');
		console.log(countSpan)
		console.log("Current counter: " + countSpan.text());
		countSpan.text( parseInt(countSpan.text())+1);
		
	});
});