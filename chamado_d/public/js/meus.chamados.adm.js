/**
 * Created by robson.lourenco on 20/10/2015.
 */
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
/*
function PrintElementID(id, pg) {
    var oPrint, oJan;
    oPrint = window.document.getElementById(id).innerHTML;
    oJan = window.open(pg);
    oJan.document.write(oPrint);
    oJan.history.go();
    oJan.window.print();
}
*/
$(function() {

    $(document).ready(function(){

        $('#o_num_tarefa').change(function(){
            $('#filtro_rodape').submit();
        });

        $('#o_titulo').change(function(){
            $('#filtro_rodape').submit();
        });

        $('#o_dt_inicio').change(function(){
            $('#filtro_rodape').submit();
        });

        $('#o_pr_chamado').change(function(){
            $('#filtro_rodape').submit();
        });

        $('#o_status').change(function(){
            $('#filtro_rodape').submit();
        });

        $('#o_orgao').change(function(){
            $('#filtro_rodape').submit();
        });

        $('#o_usuario').change(function(){
            $('#filtro_rodape').submit();
        });

        $('#num_pagina_select').change(function(){
            $('#form_num_pagina_select').submit();
        });

        $('#o_dt_fim').change(function(){
            $('#filtro_rodape').submit();
        });


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
        $("#no_tarefa").val(Obj['co_tarefa'] + " - "+ Obj['no_resumo']);
        $("#co_tarefa").val(Obj['co_tarefa']);
        $("#co_usuario_atualizacao").val(Obj['co_usuario_atualizacao']);
        $("#divDevolver").dialog("open");
    });

    $(".btn-atender").click(function() {
        var Obj = $.parseJSON($(this).val());
        $("#no_chamado").val(Obj['co_tarefa'] + " - "+ Obj['no_resumo']);
        $("#coTarefa").val(Obj['co_tarefa']);
        $("#nrSirius").val(Obj['nr_sirius']);
        $("#divAtendimento").dialog("open");
    });

    $(".btn-resolver").click(function() {
        var Obj = $.parseJSON($(this).val());
        $("#noChamadoResolvido").val(Obj['co_tarefa'] + " - "+ Obj['no_resumo']);
        $("#coTarefaResolvido").val(Obj['co_tarefa']);
        $("#nrSirius").val(Obj['nr_sirius']);
        $("#divResolver").dialog("open");
    });


    $(".btn-fechar").click(function() {
        var Obj = $.parseJSON($(this).val());
        $("#noChamadoFechado").val(Obj['co_tarefa'] + " - "+ Obj['no_resumo']);
        $("#coTarefaFechado").val(Obj['co_tarefa']);
        $("#nr_sirius").val(Obj['nr_sirius']);
        $("#divFechar").dialog("open");
    });

    $(".btn-reAbrir").click(function() {
        var Obj = $.parseJSON($(this).val());
        $("#noChamadoReAbrir").val(Obj['co_tarefa'] + " - "+ Obj['no_resumo']);
        $("#coTarefaReAbrir").val(Obj['co_tarefa']);
        $("#divReabrir").dialog("open");
    });

    $(".btn-atribuir").click(function() {
        var Obj = $.parseJSON($(this).val());
        $("#noChamadoAtribuir").val(Obj['co_tarefa'] + " - "+ Obj['no_resumo']);
        $("#coTarefaAtribuir").val(Obj['co_tarefa']);
        $("#nrSirius").val(Obj['nr_sirius']);
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



