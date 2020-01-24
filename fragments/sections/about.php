<style>
#container-main{
    margin:40px auto;
    width:95%;
    min-width:320px;
    max-width:960px;
}

#container-main h1{
    font-size: 40px;
    text-shadow:4px 4px 5px #606060;
}

.accordion-container {
    width: 100%;
    margin: 0 0 20px;
    clear:both;
}

.accordion-titulo {
    position: relative;
    display: block;
    padding: 20px;
    font-size: 24px;
    font-weight: 300;
    background: #606060;
    color: #fff !important;
    text-decoration: none;
}
.accordion-titulo.open {
    background: #DF0101;
    color: #fff;
}
.accordion-titulo:hover {
	background: #DF0101;
	color:#fff;
}

.accordion-titulo span.toggle-icon:before {
	content:"+";
	color: #fff;
}

.accordion-titulo.open span.toggle-icon:before {
	content:"-";
	color: #fff;
}

.accordion-titulo span.toggle-icon {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 38px;
    font-weight:bold;
}

.accordion-content {
    display: none;
    padding: 20px;
    overflow: auto;
}

.accordion-content p{
    margin:0;
}

.accordion-content img {
    display: block;
    float: left;
    margin: 0 15px 10px 0;
    width: 50%;
    height: auto;
}


@media (max-width: 767px) {
    .accordion-content {
        padding: 10px 0;
    }
}

</style>



<div class="about" id="about">
	<div class="container">
		<div class="agile_info_top">
			<div class="col-md-6 about_agile_info">
				<h2>Qué Ofrecemos</h2>
				<ul>
					<li>Obras Civiles</li>
					<li>Infraestructuras Sanitarias</li>
					<li>Ingeniería de Proyectos</li>
					<li>Movimiento de Tierra</li>
					<li>Arriendo de Maquinarias</li>
					<li>Montajes Industriales</li>
					<li>Arquitectura</li>
				</ul>
			</br>
			<div class="more">
				<a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Leer Más<span class="glyphicon glyphicon-arrow-right"></span></a>
				</div>
			</div>

			<div class="col-md-6 agile_about_aits-image">
				<div class="aboutaits-image-1">
					<img src="images/que ofrecemos.jpg"
					alt="Couture">
				</div>
				<div class="aboutaits-image-2">
					<img src="images/que ofrecemos2.jpg"
					alt="Couture">
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>

			<!-- Tooltip -->
			<div class="tooltip-content">

				<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
								aria-hidden="true">&times;</button>
								<h4 class="modal-title">Qué Ofrecemos</h4>
							</div>
							<div class="modal-body">
								<!--<img src="images/g4.jpg" alt="">-->
								<!--<h5>Fishing Season Now Open</h5>-->
								

								<div id="container-main">
								
									<div class="accordion-container">
										<a href="#" class="accordion-titulo">Obras Civiles<span class="toggle-icon"></span></a>
										<div class="accordion-content">
											<p>Se interviene creativa y analíticamente en todos los ámbitos de la edificación y las construcciones, cumpliendo con la Ley General de Urbanismo y Construcción, lo que de acuerdo a esa normativa, toda edificación debe cumplir una serie de requisitos técnicos que garanticen seguridad. 
											</p>
										</div>  
									</div>
									
									<div class="accordion-container">
										<a href="#" class="accordion-titulo">Infraestructuras Sanitarias<span class="toggle-icon"></span></a>
										<div class="accordion-content">
											<p>Se elabora proyectos de agua potable y alcantarillados particulares y su tramitación ante autoridades pertinentes. Construcción de infraestructura sanitaria, tales como redes de agua potable y alcantarillado, plantas de potabilización, planta de tratamiento y elevadoras de aguas servidas, entre otras. 
											</p>
										</div>
									</div>


									<div class="accordion-container">
										<a href="#" class="accordion-titulo">Ingeniería de Proyectos<span class="toggle-icon"></span></a>
										<div class="accordion-content">
											<p>Ofrecemos servicios de ingeniería integral de proyectos civiles, donde la etapa de estudios conceptuales hasta la ingeniería de detalle durante el periodo de construcción de las obras, garantizando una atención personalizada y la calidad de los productos desarrollados.
											</p>
										</div>
									</div>

									<div class="accordion-container">
										<a href="#" class="accordion-titulo">Movimiento de Tierra<span class="toggle-icon"></span></a>
										<div class="accordion-content">
											<p>Se realiza todo tipo de movimiento tipo de tierra, con y sin explosivos.</p>
										</div>
									</div>

									<div class="accordion-container">
										<a href="#" class="accordion-titulo">Arriendo de Maquinarias<span class="toggle-icon"></span></a>
										<div class="accordion-content">
											<p>
												Disponemos de una extensa oferta de maquinaria para construcción y minería, para colaborar en la rápida ejecución de los proyectos de nuestros clientes.
								         	</p>
										</div>
									</div>

									<div class="accordion-container">
										<a href="#" class="accordion-titulo">Montajes Industriales<span class="toggle-icon"></span></a>
										<div class="accordion-content">
											<p>
												Se ofrece una respuesta más a las crecientes necesidades de mantenimiento, fabricación, montaje, puestas en marcha y revisión de las instalaciones de las empresas situadas en el terreno nacional. 
											</p>
										</div>
									</div>

									<div class="accordion-container">
										<a href="#" class="accordion-titulo">Arquitectura<span class="toggle-icon"></span></a>
										<div class="accordion-content">
											<p>
												La arquitectura del proyecto, se orienta para que las empresas puedan desarrollar sus actividades de una forma confortable y segura
									La relevancia de los diseños realizados por nuestra empresa, resalta no solo por la calidad de los materiales utilizados, sino que además por la calidad de los espacios generados para acoger los distintos aspectos de la vida cotidiana de acuerdo a los requerimientos del proyecto.
									</p>
										</div>
									</div>

								</div>
								
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- //Tooltip -->

		</div>
	</div>
</div>

