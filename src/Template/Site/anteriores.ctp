<?php
foreach($chamadas as $chamada):
?>
<div class="col">
    <?=$chamada->senha->senha?> - <?=$chamada->guich->name?>
</div>
<?php
endforeach;
?>