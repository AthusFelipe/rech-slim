<?php 

namespace App\Helpers;


class DataTempo{


	/**CONVERTE QUANTIDADE DE DIAS EM ANO, MES,DIA /n
	 * * ex: 90 dias viram 0a 3m 3d
	 * @return string
	 * @param int $dias
	 */
	public static function DiasEmTempo($dias){
			$meshoje = date("m");
			$class = new DataTempo;
			$tConvertido = $class->calculaDiasEmAnos($dias,$meshoje);
			return $tConvertido['y'] . " a " . $tConvertido['m'] . " m " . $tConvertido['d'] . " d";
		}


	
	
	

   
	
		public static function calculaDiasEmAnos($days, $m){
		//$arr    = explode( '-' , $datafim);
		//$days   = call_user_func_array( 'gregoriantojd' , $arr ) - gregoriantojd( $m , $d , $y );
		$aux    = $days / 365.2425;
		$years  = floor( $aux );
		$days   = floor( 365.2425 * ( $aux - $years ) );
		$months = 0;
	
		/**
		 * Como os meses de fevereiro com 29 dias j? foram levados em considera??o no c?lculo
		 * anterior, no c?lculo de meses consideramos fevereiro como tendo apenas 28 dias.
		 */
		while ( $days >= 28 ){
			$sub = 28;
	
			if(($m == 1) || ($m == 3) || ($m == 5) || ($m == 7) || ($m == 8) || ($m == 10) || ($m == 12)){
				$sub = 31;
			} else if(($m == 4) || ($m == 6) || ($m == 9) || ($m == 11)){
				$sub = 30;
			}
			//if ( ( $m % 2 ) == 1 ){ $sub = 31; }
            //else if ( $m != 2 ){  $sub = 30; }
	
			if ( $sub <= $days ){
				$days -= $sub;
	
				$m = $m == 12 ? 1 : $m + 1;
				++$months;
			} else break;
		}
	
		return array( 'y' => $years , 'm' => $months , 'd' => $days );
	}



/**
 * Converte numero inteiro em seu respectivo mês             
 * retorna apenas as 3 primeiras letras do mês
 * @param int $numeroMes
 * @return string
 */
	public static function converterNumeroEmMes3letras($numeroMes){
		switch($numeroMes){
			case 1 : $mesferias = 'Jan'; break;
			case 2 : $mesferias = 'Fev'; break;
			case 3 : $mesferias = 'Mar'; break;
			case 4 : $mesferias = 'Abr'; break;
			case 5 : $mesferias = 'Maio'; break;
			case 6 : $mesferias = 'Jun'; break;
			case 7 : $mesferias = 'Jul'; break;
			case 8 : $mesferias = 'Ago'; break;
			case 9 : $mesferias = 'Set'; break;
			case 10 : $mesferias = 'Out'; break;
			case 11 : $mesferias = 'Nov'; break;
			case 12 : $mesferias = 'Dez'; break;
		
		}
		return $mesferias;
	}


	public static function converteDataBanco($string){
		return date('d/m/Y', strtotime($string));
	}
}