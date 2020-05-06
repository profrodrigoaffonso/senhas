<button id="btnChamar" class="btn btn-primary">Chamar Novo</button>
<button id="btnRepetir" class="btn btn-primary">Repetir</button>
<div id="senhaChamada"></div>
<script>
    $("#btnChamar").click(function(){
        $.get( "/site/chamar/<?=$id?>", function( resposta ) {
            //alert(antigo);
            $("#senhaChamada").html(resposta);
            //antigo = resposta;
            
        });
    });
    $("#btnRepetir").click(function(){
        $.get( "/site/repetir/<?=$id?>", function( resposta ) {
            console.log(resposta);
            //alert(antigo);
            //$("#senhaChamada").html(resposta);
            //antigo = resposta;
            
        });
    });
</script>