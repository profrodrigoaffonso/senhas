<button id="btnChamar" class="btn btn-primary">Chamar</button>
<script>
    $("#btnChamar").click(function(){
        $.get( "/site/chamar/<?=$id?>", function( resposta ) {
            //alert(antigo);
            //$("#master").html(resposta);
            //antigo = resposta;
            
        });
    });
</script>