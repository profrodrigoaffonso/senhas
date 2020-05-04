<h1 class="text-center">Aguarde ser chamado</h1>
<div class="row">
    <div class="col-7">
        <div id="master"></div>
    </div>
    <div class="col-5">
    <iframe width="500" height="281" src="https://www.youtube.com/embed/<?=$config->video?>?controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<h1 class="text-center">Senhas chamadas</h1>

<div class="row" id="anteriores"></div>

<script>


    setInterval(function(){ 
        //$("#master").html("teste"); 
        $.get( "/site/exibe_master", function( resposta ) {
            //alert(antigo);
            $("#master").html(resposta);
            // document.getElementById('som').play()
            //antigo = resposta;
            
        });
        $.get( "/site/anteriores", function( resposta ) {
            //alert(antigo);
            $("#anteriores").html(resposta);
            // document.getElementById('som').play()
            //antigo = resposta;
            
        });
    }, 4000);
</script>