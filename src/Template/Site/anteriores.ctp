<?php
foreach($chamadas as $chamada):
?>
<div class="col">
    <h3 class="text-center"><?=$chamada->senha->senha?> - <?=$chamada->guich->name?></h3>
</div>
<?php
endforeach;
?>