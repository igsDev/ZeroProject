/* carica informazioni di contatto*/
$(document).ready(function(){
	$("#card-profilo").attr("src" , "img/profilo.JPG");
})
console.log("lettura");

/*	Visualizza post */
/*$.get("controller/controller.php?mode=view_post" , function(data){
	$.each(data , function(i){
		if(data === " "){
			console.log("NULLA");
		}
		else {
			console.log(data);
		}
		console.log(data[i].id_post);
	})
}, 'json');*/
var $ht='';
$.get('controller/controller.php?mode=view_post', function(data){
	$.each(data , function(index){
		$ht += "<div><h3>"+data[index].Titolo+"</h3>";
		$ht +="<p>"+data[index].Post+"</p>";
		$ht += "<img src='"+data[index].Foto_path+"'></div>";
		
	});
	$("#inner").append($ht);
}, 'json');
