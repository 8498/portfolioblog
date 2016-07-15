$( document ).ready(function(){
	$("#block p").delay(1000).animate({ opacity: 1}, 4000);
	$(".container").delay(1000).animate({ opacity: 1}, 1000);
	console.log("document loaded");
});
$( document ).ready(function(){
	var elements = [];
	elements[0] = $("#pill-personalData");
	elements[1] = $("#pill-education");
	elements[2] = $("#pill-experience");
	elements[3] = $("#pill-skills");
	elements[4] = $("#pill-projects");
	elements[5] = $("#pill-hobbies");
	elements[5] = $("#box");
	var time = 3200;
	for(i=0;i<7;i++)
	{
		if(i==0)
		{
			elements[i].delay(1000).animate({opacity:1}, 60);
		}
		elements[i].delay(1000).animate({opacity: 1}, time+i*1000);
	}
})