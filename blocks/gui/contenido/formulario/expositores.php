<?php
$rutaPrincipal = $this->miConfigurador->getVariableConfiguracion ( 'host' ) . $this->miConfigurador->getVariableConfiguracion ( 'site' );
$indice = $rutaPrincipal . "/index.php?";
$urlBloque = $this->miConfigurador->getVariableConfiguracion ( 'rutaUrlBloque' );


?>
<div class="titulo">
		<h1 class="centrar">Moderadores </h1>
	</div>
	<div>	
		<table class="tablaComite">
			<tr>
				<td>
				<img class="imagenComite" alt="" src="<?php echo $urlBloque.'/imagen' ?>edith.png">		
				</td>
				<td class="textoPequenno "><span class="texto_negrita">Lilia Edith Aparicio P.</span><br>
				Directora Grupo de Investigación GISEPROI</a>
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="textoPequenno "><span class="texto_negrita">Paulo César Coronado</span><br>
				Grupo de Investigación GISEPROI
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="textoPequenno "><span class="texto_negrita">Oscar Ardila</span><br>
				Semillero de Investigación en Tecnología Libre
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td class="textoPequenno "><span class="texto_negrita">Luis Hermes Vera</span><br>
				Oficina Asesora de Sistemas
				</td>
			</tr>						
		</table>
	</div>
<!-- Importante!!! FIN SECCION EDITABLE -->
