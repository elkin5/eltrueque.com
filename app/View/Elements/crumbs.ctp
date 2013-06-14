<div id="miga">
	<?= $this->html->link(__('Inicio',true),'/inicio/index'); ?> 
	<?= $this->html->image('row.png') ?>
	<?php 
	foreach($items as $item){ 
		if ($item['link'] == "")
			echo $item['title'];
		else{
			echo $this->html->link(__($item['title'],true),$item['link']);
			echo $this->html->image('row.png');
		}
	}
	?>
</div>