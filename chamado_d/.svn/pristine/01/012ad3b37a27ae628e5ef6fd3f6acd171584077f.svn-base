/**
 * JS utilizado nas páginas de relatório de chamados.
 * @param co_tarefa
 * @param classCss
 */
function exibir(co_tarefa, classCss){
   
    if($("#linhaMais"+co_tarefa).attr('class') == 'exibir '+classCss){
    	$("#linhaMais"+co_tarefa).attr('class','esconder');
     }else{
          $(".exibir").attr('class','esconder');
    	 $("#linhaMais"+co_tarefa).attr('class','exibir '+classCss);
     }
}

$(function() {

    $(document).ready(function(){
        //$('#salvar_atender').attr('disabled', 'disabled');

        $('#formAtendimento').mousemove(function() {
            var nr_sirius = $('#nr_sirius').val();
            if(nr_sirius != ""){
                //$('#salvar_atender').removeAttr("disabled");
                $('#info_nr_sirius').hide();
            }else{
                //$('#salvar_atender').attr('disabled', 'disabled');
                $('#info_nr_sirius').show();
            }
        });
    });

	
	$('#num_tarefa').mask("999999999999");
        
   	$("#divAtendimento, #divFechar, #divReabrir, #divAtribuir, #divResolver, #divDevolver").dialog({
   		autoOpen: false, 
   		height: 590, 
   		width: 600, 
   		beforeClose: function(){
   			location.reload();
   		} 
   	});

    $(".btn-devolver").click(function() {
        var Obj = $.parseJSON($(this).val());
        $("#no_tarefa").val(Obj.CoTarefa + " - " + Obj.NoResumo);
        $("#co_tarefa").val(Obj.CoTarefa);
        $("#co_usuario_atualizacao").val(Obj.CoUsuarioAtualizacao);
        $("#divDevolver").dialog("open");
    });

  	$(".btn-atender").click(function() {console.log($(this).val());
        var Obj = $.parseJSON($(this).val());
        $("#no_chamado").val(Obj.CoTarefa + " - "+ Obj.NoResumo);
        $("#coTarefa").val(Obj.CoTarefa);
        $("#divAtendimento").dialog("open");
  	});
  	
  	$(".btn-resolver").click(function() {
     	var Obj = $.parseJSON($(this).val());
 		$("#noChamadoResolvido").val(Obj.CoTarefa + " - "+ Obj.NoResumo);
      	$("#coTarefaResolvido").val(Obj.CoTarefa);
        $("#nrSirius").val(Obj.NrSirius);
   	   	$("#divResolver").dialog("open");
   	});


    $(".btn-fechar").click(function() {
    	var Obj = $.parseJSON($(this).val());
		$("#noChamadoFechado").val(Obj.CoTarefa + " - "+ Obj.NoResumo);
                $("#coTarefaFechado").val(Obj.CoTarefa);  
                $("#nr_sirius").val(Obj.NrSirius);
  	   	$("#divFechar").dialog("open");
  	});

    $(".btn-reAbrir").click(function() {
    	var Obj = $.parseJSON($(this).val());
		$("#noChamadoReAbrir").val(Obj.CoTarefa + " - "+ Obj.NoResumo);
     	$("#coTarefaReAbrir").val(Obj.CoTarefa);  
  	   	$("#divReabrir").dialog("open");
  	});
    
    $(".btn-atribuir").click(function() {
    	var Obj = $.parseJSON($(this).val());
		$("#noChamadoAtribuir").val(Obj.CoTarefa + " - "+ Obj.NoResumo);
     	$("#coTarefaAtribuir").val(Obj.CoTarefa);  
  	   	$("#divAtribuir").dialog("open");
  	   	
  	   	
  	   	$.getJSON("/chamado/index/get-Orgao", function(data) {
			var select =  $('#orgao');
			for (var key in data) {
				option = '<option value="'+key+'">'+data[key]+'</option>';
				select.append(option);
			 }
  	   	});
  	   	$('#orgao').change(function(){
  	   		var sel = $("select#categorias");
  	   		sel.find("option").remove();
  	   	})
  	   	$("#usuarios").remoteChained("#orgao", "/chamado/index/usuarios-Orgao");
   		$("#categorias").remoteChained("#usuarios", "/chamado/index/get-Categoria-Usuario");	
  	   	
  	});
  	    
  	$(".button_blue").click(function() {
  		
  		if(!$("#formAtribuir").validate() || $(this).attr("id") == 'btn-cancelar-a'){
			$("#divAtribuir").dialog("close");
		}
  		
		if(!$("#formReabrir").validate() || $(this).attr("id") == 'btn-cancelar-r'){
			$("#divReabrir").dialog("close");
		}	
      	
		if(!$("#formFechar").validate() || $(this).attr("id") == 'btn-cancelar-f'){
			$("#divFechar").dialog("close");
		}
		
		if(!$("#formFechar").validate() || $(this).attr("id") == 'btn-cancelar-r'){
			$("#divFechar").dialog("close");
		}
	
  		if(!$(".formValidate").validate() || $(this).attr("id") =='btn-cancelar'){
  	  		$("#divAtendimento").dialog("close");
  		}
  	});
  	
  	/**
  	 * 
  	 */
  	/**
  	 * 
  	 * 
  	 * 
  	 */
});
