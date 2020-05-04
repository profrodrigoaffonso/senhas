<!-- <p class="text-center" style="font-size: 120px;"><?=$telaMaster->senha->senha?> - 
<?=$telaMaster->guich->name?></p> -->
<table border="1">
    <tr class="text-center">
        <th>Senha</th>
        <th>Guichê</th>
    </tr>
    <tr style="font-size: 200px;">
        <td align="center"><?=$telaMaster->senha->senha?></td>
        <td align="center"><?=$telaMaster->guich->name?></td>
    </tr>
</table>
<?php
if($som == 's'):
?>
    <audio autoplay="autoplay">
    <source src="/audio/bipe.mp3" type="audio/mp3" />
    seu navegador não suporta HTML5
    </audio>
<?php
endif;