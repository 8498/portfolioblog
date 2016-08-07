var section = document.getElementById('section');
$( document ).ready(function(){
$.ajax({
	type: "GET",
	url: '/blog/fetch',
	datatype: "JSON",
	success: function( response ){
		response.forEach(function(data){
			var article = document.createElement('article');
			article.id= "posts-"+data.categoryName;
			article.className = "tab-pane fade";
			section.appendChild(article);
			var panel = document.createElement('div');
			panel.className = "panel";
			article.appendChild(panel);
			var panelheading = document.createElement('div');
			panelheading.className = "panel-heading";
			panelheading.innerHTML = ""+data.title+"";
			panel.appendChild(panelheading);
			var panelbody = document.createElement('div');
			panelbody.className = "panel-body";
			panelbody.innerHTML = ""+data.content+"";
			panel.appendChild(panelbody);
			var panelfooter = document.createElement('div');
			panelfooter.className = "panel-footer";
			panelfooter.innerHTML = "<span class='glyphicon glyphicon-time'aria-hidden='true'></span>"+data.created_at+"";
			panel.appendChild(panelfooter);
		});
	}
});
});