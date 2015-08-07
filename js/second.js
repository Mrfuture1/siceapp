// JavaScript Document

function loadSecondMenu()
{
	//
}

$(document).ready(function() {
	//alert(id)
	
	$.ajax({
		url:'server/second_json.php',
		type:'post',
        dataType:'json',
        data:'id='+id,
        success:function(result) {
			var html="";
			for (var i=0; i<result.length; i++)
			{
				html=html+'<div><a href="">'+result[i]["title"]+'</a></div>';
			}
			document.getElementById("secondMenu").innerHTML=html;
			alert(html);
		},
		timeout:3000
		}); 
			
});