$(function(){
	
$('#formulario').on('submit',function(){
	var cadena=$('#formulario').serialize();
	$.ajax({
		
		cache:false,
		type:"POST",
		dataType:"json",
		data: cadena,
		url:"includes/preguntar.php",
		success: function(response){
			if (response.respuesta)
			$('#sidebar-right').append(response.contenido);
		}
		
	});
})

});