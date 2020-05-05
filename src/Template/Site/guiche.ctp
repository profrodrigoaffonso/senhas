<button id="btnChamar" class="btn btn-primary">Chamar</button>
<div id="senhaChamada"></div>
<script>
    $("#btnChamar").click(function(){
        $.get( "/site/chamar/<?=$id?>", function( resposta ) {
            //alert(antigo);
            $("#senhaChamada").html(resposta);
            //antigo = resposta;
            
        });
    });
</script>