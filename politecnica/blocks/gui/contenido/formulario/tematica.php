<?php
$rutaPrincipal = $this->miConfigurador->getVariableConfiguracion ( 'host' ) . $this->miConfigurador->getVariableConfiguracion ( 'site' );
$indice = $rutaPrincipal . "/index.php?";
$directorio = $rutaPrincipal . '/' . $this->miConfigurador->getVariableConfiguracion ( 'bloques' ) . "/menu_principal/imagen/";

$urlBloque = $this->miConfigurador->getVariableConfiguracion ( 'rutaUrlBloque' );


?>
<!-- INICIO SECCION EDITABLE -->
<div class="contenidoInterior">
	<table class="tablaContenido">
		<tbody>
			<tr>
				<td>
					<table class="tabla_basico" align="center">
						<tr valign="top">
							<td class="centrar" width="50%">
								<div class="bloquecentralnoticia">
									<!-- Inicio Evento  -->
									<table class="tabla_simple">
										<tr class="bloquecentralnoticia">
											<td><span class="texto_elegante texto_negrita">Ejes
													Tem&aacute;ticos</span>
												<hr class="hr_division">
												<p>
													El <span class="texto_negrita">Primer Seminario Institucional de  Seguridad de la Información</span>
													aborda los siguientes temas:
												</p>
												<h2>Seguridad de la Información</h2>
												<ul>
													<li>Sistemas de Gestión de Seguridad de la Información.</li>
													<li>Gobierno de la Seguridad de la Información.</li>
													<li>Política Institucional de Seguridad de la Información.</li> 
													<li>Confidencialidad, integridad y disponibilidad de la información.</li>
													<li>Seguridad operativa.</li>
												</ul>
												<h2>Seguridad Informática</h2>
												<ul>
													<li>Amenazas comunes.</li>
													<li>Herramientas de hacking.</li>
													<li>Intrusión.</li>
												</ul>
												<h2>Ingeniería Social</h2>
												<ul>
													<li>Conceptos</li>
													<li>Principales características</li>
													<li>Automatización</li>
												</ul>
												<hr class="hr_division">
											</td>
										</tr>
									</table>
								</div>

							</td>
							<td width="50%">
								<div class="bloquecentralnoticia">
									<!-- Inicio Evento  -->
									<table class="tabla_simple">
										<tr>
											<td>
												<p class="contenidoNormalCentrado">
													<img border="0" alt=" "
														src="<? echo $urlBloque."/mensaje/" ?>imagen/imagen3.jpg">
												</p>

											</td>
										</tr>
										<tr>
											<td><br></td>
										</tr>
										<tr class="bloquecentralnoticia">
											<td><span class="texto_negrita texto_elegante">Dirigido a:</span>
												<hr class="hr_division">
												<p>Todos los integrantes de la comunidad de la Universidad Distrital Francisco José de Caldas.</p>
												<p class="centrar">Correo electr&oacute;nico del evento:</p>
												<p class="texto_titulo centrar">
													<a href="mailto:semanaicg@udistrital.edu.co">computo@udistrital.edu.co</a>
												</p>
											</td>
										</tr>
									</table>
									<!-- Fin Evento  -->
								</div>

							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Importante!!! FIN SECCION EDITABLE -->

