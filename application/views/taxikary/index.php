<h2><?= $title?></h2>
<?php foreach($taxikary as $taxikar) :?>
<h3><?php echo $taxikar['Meno']; ?></h3>
	<h3><?php echo $taxikar['Priezvisko']; ?></h3>
	<h3><?php echo $taxikar['serioveCislo']; ?></h3>
	<h3><?php echo $taxikar['plat']; ?></h3>
	<h3><?php echo $taxikar['meno']; ?></h3>
<?php endforeach;?>
