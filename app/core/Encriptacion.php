<?php 


class Encriptacion
{
	var $cuadro;
	var $seedToken;
	
    function __construct()
    {
		$this->cuadro = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789-_¡!#$%&()=¿?';
		$this->seedToken = 'mariodelgadopicazo1984!';
    }

	public function getToken()
	{
		return $this->encriptar($this->seedToken);
    }

	public function testToken($token)
	{
		return $this->seedToken==$this->desencriptar($token)?'OK':'KO';
    }

	public function encriptar($texto)
	{
		$num = rand(0,strlen($this->cuadro)-1);//escojo número del 1 al (strlen($_cuadro));
		$resultado = '';
		$prefijo = ''.($num<10?'0':'').$num;
		$_cuadro = $this->cuadro;
		
		while($num > 0)
		{
			$_cuadro = substr($_cuadro, 1).$_cuadro[0];
			$num--;
		}
		
		$i = 0;
		
		while($i < strlen($texto))
		{
			$j = 0;
			$numEncr = 0;
			while($j < strlen($_cuadro))
			{
				if($texto[$i] == $_cuadro[$j])
				{
					$numEncr = $j;
					$j = strlen($_cuadro);
				}
				$j++;
			}
			$resultado.=($numEncr<10?'0':'').$numEncr;
			$i++;
		}		
		
		return $prefijo.$resultado;
	}

	public function desencriptar($texto)
	{
		$resultado = '';
		$_cuadro = $this->cuadro;

		$numEncrStr = substr($texto, 0, 2);
		$num=intval($numEncrStr);
		
		while($num > 0)
		{
			$_cuadro = substr($_cuadro, 1).$_cuadro[0];
			$num--;
		}
		
		$i = 2;
		
		while($i < strlen($texto))
		{
			$numEncrStr = substr($texto, $i, 2);
			$numEncr=intval($numEncrStr);
			$resultado.=$_cuadro[$numEncr];

			$i=$i+2;
		}		
		
		return $resultado;
	}

}

?>