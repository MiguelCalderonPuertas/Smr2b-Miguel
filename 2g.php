<?php
	function meses($i){
		$meses=[
			
			'Enero',
			'Febrero',
			'Marzo',
			'Abril',
			'Mayo',
			'Junio',
			'Julio',
			'Agosto',
			'Septiembre',
			'Octubre',
			'Noviembre',
			'Diciembre',
			];
			return $meses[$i-1];
}			
 for($i=1;$i<=12;$i=$i+1) {
	 if(!strstr(meses($i),'r'))
		echo meses($i).'<br>';
	}
	