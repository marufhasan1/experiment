$(document).ready(function(){
	var total = $("body")[0].clientWidth;
	console.log($("body")[0]);

	var x = 0;
	$(document).on('mousemove', function(event) {
		if(x<950){
			x = event.clientX;
		}
		console.log(x);

		x =  Math.round((x*100)/total);
		$(".iris").css({
			left: x+"%"
		});

	});
});
