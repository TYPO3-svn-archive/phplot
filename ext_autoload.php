<?php
$extensionClassesPath = t3lib_extMgm::extPath('phplot') . 'Classes/';
return array(
	'tx_phplot_service_plot' => $extensionClassesPath . 'Service/Plot.php',
	'tx_phplot_service_plottruecolor' => $extensionClassesPath . 'Service/PlotTrueColor.php',
);
?>