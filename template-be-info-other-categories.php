<?php 
	/*
		Template Name: 	Biblioteca Enigmas
		Author: 				Guillermo Camarena
		Section: 				Templates / Books / Taxonomy / Others
		File name: 			template-be-info-other-categories.php
		Date: 					29-06-2023
		Description: 		This file show description and details other categories
	*/
?>
	
<!-- Section: Description -->

	<!-- Part: Description title /-->
	<div class="tax-gen-block-head">Bienvenido a la Colección de <?php echo single_cat_title( '', false ) ?> </div>

	<!-- Part: Description /-->
	<section style="margin-bottom: 20px;" class="cat-box recent-box recent-blog">
		<div class="cat-box-content" style="padding-top: 20px;">

		<div class="clear"></div>
			
			<!-- Part: Image -->

				<?php
					// Get term name of the taxonomy
					$term= get_term_by( 'slug', get_query_var( 'term'), get_query_var( 'taxonomy') );

					// Get slug name of the taxonomy
					$slug = $term->slug;
					
					// Get template directory url
					$url = get_template_directory_uri() . '/personalized/images/genres/';

					// Merged url with extension file
					$txtMerged = $url . $slug.".jpg";
				?>
				
				<div class="tax-gen-intro-image">
					<img width="624" height="422" src="<?php echo $txtMerged; ?>">
				</div>

			<!-- Part: Image /-->

			<br>
			<hr>

			<!-- Part: Descriptions -->
			<div class="entry">
				<div class="wprt-container">					

					<!-- Enciclopedias -->

						<!-- Atlas de Lo Extraordinario /-->
						<?php if ( $slug == 'atlas-de-lo-extraordinario' ) : ?>
							
							<p>
								<b>Atlas de lo extraordinario</b> es una colección de 30 libros publicada en 1993 Y 1994 por la Editorial Debate
								ediciones Prado en Barcelona, España. Los 30 libros que componen esta colección son de gran formato 295cm
								x 240cm con 90 a 130 páginas aproximadamente con ilustraciones a todo color.
							</p>
							<p>
								Los temas que aborda esta colección son diversos, van desde construcciones fabulosas, fenómenos naturales, mitos,
								leyendas, prodigios, teosoros perdidos, etc.
							</p>
							<p>
							<b>Colección incompleta.</b> 

							<p style="text-align: right;"><strong>26-04-2023</strong>
							<hr>
							<div class="tax-gen-title-table-info">Relación de números de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=47]'); ?>

						<?php endif; ?>

						<!-- Grandes enigmas: El fascinante mundo de lo oculto /-->
						<?php if ( $slug == 'grandes-enigmas-el-fascinante-mundo-de-lo-oculto' ) : ?>
							
							<p>
								<b>Grandes enigmas: El fascinante mundo de lo oculto</b>, esta colección comprende un conjunto de temas
									relacionados con enigmas y lo oculto de nuestro mundo. Cada tomo cuenta de entre 180 a 200 páginas 
									sumando un total de 800 páginas en total de los 4 tomos.
							</p>
							<p>Los temas que aborda esta colección son:</p>		
							<ul>
								<li>Primera parte: Fraudes y confusiones de la historia y de la ciencia</li>	
								<li>Segunda parte: Los mitos del fin del mundo</li>
								<li>Tercera parte: La resurrección de los faraones</li>							
								<li>Cuarta parte: Sorpresas que depara el mund</li>
								<li>Quinta parte: Sorpresas que depara la mente</li>
								<li>Sexta parte: Órdenes religiosas, sectas y sociedades secretas</li>
								<li>Séptima parte: Verdad y mentira de la astrología</li>
								<li>Octava parte: Brujería de hoy y brujería de ayer</li>
							</ul>						
							<p><b>Colección completa.</b> </p>		
							<p style="text-align: right;"><strong>29-06-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=59]'); ?>
						<?php endif; ?>
						
						<!-- Gran Enciclopedia Gráfica de los Temas Ocultos /-->
						<?php if ( $slug == 'gran-enciclopedia-grafica-de-los-temas-ocultos' ) : ?>
							
							<p>
								<b>Gran Enciclopedia Gráfica de los Temas Ocultos</b>, es una enciclopedia que publicó 
								la Editorial Nueva Lente, S.A., en el año de 1988 en Madrid, España.
							</p>
							<p>La enciclopedia fue dirigida por Fernando Jiménez del Oso, y cuenta con 9 tomos 
								divididos en tres temáticas::</p>		
							<ul>
								<li>Fenómeno OVNI (3 tomos)</li>	
								<li>Grandes enigmas (3 tomos)</li>
								<li>Parapsicología/Ocultismo (3 tomos)</li>
							</ul>						
							<p><b>Colección incompleta.</b> </p>		
							<p style="text-align: right;"><strong>29-06-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=60]'); ?>
						
						<?php endif; ?>

						<!-- Grandes temas de lo oculto y lo insólito /-->
						<?php if ( $slug == 'grandes-temas-de-lo-oculto-y-lo-insolito' ) : ?>
							
							<p>
								<b>Grandes temas de lo oculto y lo insólito</b>, de Tomas Doreste, publicación por “Océano Grupo Editorial”.
							</p>
							<p>	
								Esta colección comprende un conjunto de temas relacionados con enigmas y lo oculto de nuestro mundo. Cada 
								tomo cuenta de entre 180 a 200 páginas sumando un total de 800 páginas en total de los 4 tomos.
							</p>
							
							<p>Los temas que aborda esta colección son:</p>		
							<ul>
								<li>Capítulo I: EGIPTO, TIERRA DE MISTERIOS</li>	
								<li>Capítulo II: LA BIBLIA, TEMA DE SERIAS DISCUSIONES</li>
								<li>Capítulo III: APARICIONES Y DESAPARICIONES MISTERIOSAS</li>							
								<li>Capítulo IV: CUANDO EL MUNDO AÚN NO ERA MUNDO</li>
								<li>Capítulo V: UN CONTINENTE LLAMADO AMERICA</li>
								<li>Capítulo VI: ESE MUNDO INSÓLITO EN QUE VIVIMOS</li>
								<li>Capítulo VII: LOS MIL RECOVECOS DE LA MENTE</li>
								<li>Capítulo VIII: ENCUENTROS CERCANOS QUE NO LO SON TANTO</li>
							</ul>						
							<p><b>Colección completa.</b> </p>		
							<p style="text-align: right;"><strong>29-06-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=61]'); ?>
						<?php endif; ?>

					<!-- Libros -->

						<!-- Almanaque de lo insólito /-->
						<?php if ( $slug == 'almanaque-de-lo-insolito' ) : ?>
							
							<p>
								<b>Almanaque de lo insólito</b>, fue una colección de 8 tomos lanzada en 1978 por 
								la Editorial Grijalbo en España, cada tomo cuenta de entre 220 y 300 páginas, 
								escrito bajo la dirección de Irving Wallace – David Wallechinsky, nos habla de datos, 
								hechos y personajes que siempre despertaron nuestro interés, pero que nunca hemos podido 
								conocer con detalle y precisión..
							</p>											
							<p><b>Colección completa.</b> </p>		
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=62]'); ?>

						<?php endif; ?>

						<!-- Biblioteca básica espacio y tiempo /-->
						<?php if ( $slug == 'biblioteca-basica-espacio-y-tiempo' ) : ?>

							<p>
								<b>Biblioteca básica espacio y tiempo</b> es una colección de 50 libros de 120 a 150 páginas
								que se publicaron bajo la dirección de Fernando Jiménez del Oso y la Editorial Espacio y Tiempo, S.A.,
								publicados en 1992.
							</p>
							<p>
								Esta colección está dedicada a temas enfocados en: ovnilogía, enigmas y misterios, ocultismo, parapsicología y
								ciencia de vanguardia. Cuenta con autores e investigadores españoles y del resto del mundo, cada libro tiene
								aproximadamente ente 200 a 350 páginas.
							</p>
							<p><b>Colección incompleta.</b> </p>		
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=54]'); ?>

						<?php endif; ?>

						<!-- Biblioteca del crimen /-->
						<?php if ( $slug == 'biblioteca-del-crimen' ) : ?>

							<p>
								<b>Biblioteca del crimen</b> es una colección que publicó la "Editorial Nowtilus"
								nos desvela la auténtica realidad del crimen y de los criminales. Libros escritos por expertos criminólogos
								que en tono divulgativo descubren las circunstancias y anécdotas que rodean los casos más sorprendentes.
							</p>
								Esta colección fue dirigida por Francisco Pérez Abellán cuenta con 6 títulos de aproximadamente 
								280 a 350 páginas.
							</p>
							<p><b>Colección completa.</b> </p>	
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=63]'); ?>

						<?php endif; ?>

						<!-- DUDA Semanal /-->
						<?php if ( $slug == 'duda-semanal' ) : ?>

							<p>
								<b>DUDA Semanal</b> fué una colección que publicó la "Editorial Posada" junto con
								su famosa revista DUDA a partir de 1971. Las temáticas eran diversas pero la mayoría orientadas
								a temas tan variados como enigmas, misterios, parapsicología, conspiraciones, antiguas civilizaciones
								hasta manuales sobre adivinación, partos o sexo.
							</p>
							<p>
								Su editor Guillermo Mendizábal Lizalde al ver el éxito de su revista, decidió publicar periódicamente
								esta colección de libros. Eran libros de formato pequeño tenía entre 160 y 190 páginas cada uno,
								a colores diferente en su portada y cada semana se publicaba uno.
							</p>
							<p>
								Se estima que la colección completa ronda los 250 ejemplares. Esta colección de los años 70's ronda
								los 40 años de antiguedad, por lo que actualmente solo se pueden encontrar ejemplares en mercados
								de pulgas, viejas librerías y algunas bibliotecas.
							</p>
							<p>
								<b>Colección incompleta.</b> 
							</p>
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=64]'); ?>

						<?php endif; ?>

						<!-- El Archivo del Misterio de Iker Jiménez /-->
						<?php if ( $slug == 'el-archivo-del-misterio-de-iker-jimenez' ) : ?>

							<p>
								<b>El archivo del misterio de Iker Jiménez</b> es una colección publicada por la editorial EDAF de la mano
								de Iker Jiménez como director de la misma. Consta de numerosos títulos que abarcan diversas temáticas como:
								ovnilogía, leyendas, fantasmas, seres extraordinarios,
								enigmas, etc.
							</p>
							<p>
								La colección cuenta con 23 títulos, de aproximadamente 150 a 350 páginas ilustradas a blanco y
								negro,
								la selección de los autores ha sido minuciosamente hecha por Iker Jiménez, tomando en cuenta la trayectoria y
								experiencia
								en sus campos correspondientes, muchos de ellos son compañeros de trabajo y de profesión que han colaborado con él
								dentro del periodismo del misterio.
							</p>
							<p>
								<b>Colección incompleta.</b> 
							</p>
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=55]'); ?>

						<?php endif; ?>

						<!-- Historia insólita /-->
						<?php if ( $slug == 'historia-insolita' ) : ?>

							<p>
								Colección <b>"Historia insólita"</b> fué una colección que publicó la "Editorial Nowtilus" de octubre
								a noviembre de 2011 de la mano de Gregorio Doval, donde podrá encontrar una recopilación de todo tipo de
								datos sorprendentes, poco conocidos o simplemente curiosos, de todas las épocas y procedencias históricas,
								geográficas o culturales, presentados e hilados con cierto toque de humor e ironía, y que componen un atractivo
								fresco de la “pequeña historia” o “intrahistoria”, un curioso y adictivo mosaico de la “trastienda” de la
								historia oficial; los datos, hechos, sucesos y personajes en los que no se suelen fijar los libros académicos,
								pero que más suelen interesar a los aficionados a la historia.
							</p>
							<p>
								La colección cuenta con 3 títulos de aproximadamente 300 a 350 páginas que reune los datos que
								suelen quedar al margen de enciclopedias y libros de referencia. Con un formato empleado para el texto de
								pequeños “fogonazos”, “píldoras” de información, cada una con una extensión acorde con el asunto tratado,
								contextualizadas y rigurosas. Cada una de las anécdotas, de las curiosidades, tiene una autonomía propia,
								no siguen una secuencia argumental o cronológica. Cada libro, enriquecido por esa variedad tipográfica,
								presenta gran cantidad de ilustraciones y fotografías que certifican y apoyan la autenticidad de lo narrado,
								embelleciendo y aportando valor a cada uno de los libros.
							</p>
							<p>
								<b>Colección completa.</b> 
							</p>
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=65]'); ?>

						<?php endif; ?>

						<!-- Investigación abierta /-->
						<?php if ( $slug == 'investigacion-abierta' ) : ?>

							<p>
								<b>Investigación abierta</b> es una colección que publicó la "Editorial Nowtilus" con
								nombre de serie "Nowtilus Frontera" y bajo la dirección general de Fernando Jiménez del Oso y
								director
								de editorial David E. Sentinella. Nace de la esencia del más puro periodismo de reportaje, como respuesta a
								las inquietudes que los lectores muestran hacia determinados temas de indiscutible trascendencia social en la
								actualidad. De la mano del mejor equipo de reporteros, esta colección ofrece argumentos sólidos y polémicos
								para que podamos opinar, y no dejarnos convencer por "medias verdades"; opinar, una cualidad tan humana como
								necesaria. Siempre en primera línea, los autores ponen sobre la mesa el resultado de años de arduo y valiente
								trabajo,
								con una documentación gráfica sin parangón.
							</p>
							<p>
								"Nowtilus Frontera" es una serie temática realizada por un grupo de autores especializados en el
								periodismo de investigación de todo aquello que resulta desestabilizador, extraño o misterioso, que resuma
								aventura y rigor. Pretende abrir nuevasa vías en el periodismo de investigación, apoyándose en la labor de
								reporteros de contrastado prestigio, en campos tan diversos como la política, los fenómenos paranormales, la
								historia... que en definitiva están de rabiosa actualidad y despiertan encendidos debates y abiertas polémicas.
							</p>
							<p>
								La colección cuenta con 32 títulos de aproximadamente 200 a 350 páginas, en la siguiente lista
								se muestra la relación de títulos que se tienen de esta colección:
							</p>
							<p>
								<b>Colección incompleta.</b> 
							</p>
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=56]'); ?>

						<?php endif; ?>

						<!-- La puerta del misterio /-->
						<?php if ( $slug == 'la-puerta-del-misterio' ) : ?>

							<p>
								<b>La Puerta del Misterio</b> es una colección temática de Nowtilus Frontera que se publicó en 2002.
								Realizada por un grupo de autores especializados en el periodismo de investigación
								de todo aquello que resulta desestabilizador, extraño o misterioso.
							</p>
							<p>
								Dirigida y prologada de la mano del Dr. Fernando Jiménez del Oso</b> (fallecido en 2005), esta colección de
								Ediciones Nowtilus presenta una colección que cuenta con 17 títulos de aproximadamente 280 a 300
									páginas que recorre los enigmas del país de los faraones, las caras desconocidas
								de Jesús, el uso de las plantas mágicas, el secreto de los templarios en España, los lugares de poder, las claves
								ocultas del cristianismo, la certeza del fenómeno ovni y los expedientes oficiales, las técnicas de captación de
								las sectas y cómo defendernos de ellas…
							</p>
							<p>
								En definitiva, la obra más completa jamás realizada, escrita por autores
								de reconocido prestigio y solvencia, cuyo objetivo es infotrmar con veracidad, crear opinión y que los lectores
								sean
								los que saquen sus propias conclusiones.
							</p>
							<p>
								<b>Colección completa.</b> 
							</p>
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=57]'); ?>

						<?php endif; ?>

						<!-- Otros mundos /-->
						<?php if ( $slug == 'otros-mundos' ) : ?>

							<p>
								<b>Otros mundos</b> fue publicada por la Editorial Plaza & Janés en España, consta de 144
								títulos de encuadernación de tapa dura de tela y lomo estampados con dimensiones: 22cm x 15 cm. Estos libros
								fueron editados con una sección de ilustraciones y un total de entre 300 y 400 páginas. Se publicó entre
								finales de la década de los 60´s y principios de los 80´s.
							</p>
							<p>
								La colección abarca temas tan variados como esoterismo, civilizaciones desaparecidas, extraterrestres,
								la alquimia, entre otros que en general convergen en el misterio y lo paranormal, la mal-llamada "pseudociencia".
							</p>
							<p>
								Esta colección junto con la colección "Realismo fantástico" de la Editorial Plaza & Janés es el reflejo
								clásico y plausible del famoso movimiento nombrado como "Realismo fantástico" que surgió en 1960 en Francia
								con el libro "El retorno de los brujos" de Jacques Bergier & Louis Pauwels, el cual se extendió en Europa
								y posteriormente a América entre los años 1972 y 1984, gracias a esta editorial.
							</p>
							<p>
								<b>Colección incompleta.</b> 
							</p>
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=66]'); ?>

						<?php endif; ?>

						<!--  Reader's Digest /-->
						<?php if ( $slug == 'readers-digest' ) : ?>

							<p>
								<b>Reader's Digest</b> llamada también Selecciones Reader's Digest, es una
								revista mensual de temas variados. Está escrita en español y es propiedad de The Reader's Digest Association;
								empresa editora de la revista estadounidense Reader's Digest.
							</p>
							<p>
								Estos libros forman parte de una colección que publicó <i>"Selecciones del Reader's Digest, S,A."</i> con
								más de 300 títulos de diferentes temáticas especializadas que iban desde: trucos, misterios, recetas,
								autos, etc., conformados por 300 a 500 páginas cada uno y al estilo enciclopédico siempre respaldados
								por varios autores especialistas en los temas tratados.
							</p>
							<p>
								<b>Colección incompleta.</b> 
							</p>
							<p style="text-align: right;"><strong>07-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=67]'); ?>

						<?php endif; ?>

						<!--  Realismo Fantástico /-->
						<?php if ( $slug == 'realismo-fantastico' ) : ?>

							<p>
								<b>Realismo fantástico</b> fue publicada por la Editorial Plaza & Janés, consta de 116
								títulos en formato pequeño, editados con ilustraciones y un total de 250 a 350 páginas.Se publicó entre
								finales de la década de los 60´s y principios de los 80´s, junto con la colección "Otros mundos".
							</p>
							<p>
								La colección abarca temas tan variados como esoterismo, civilizaciones desaparecidas, extraterrestres,
								la alquimia, entre otros que en general convergen en el misterio y lo paranormal, la mal-llamada "pseudociencia".
							</p>
							<p>
								Esta colección junto con la colección "Otros mundos" de la Editorial Plaza & Janés es el reflejo
								clásico y plausible del famoso movimiento nombrado como "Realismo fantástico" que surgió en 1960 en Francia
								con el libro "El retorno de los brujos" de Jacques Bergier & Louis Pauwels, el cual se extendió en Europa
								y posteriormente a América entre los años 1972 y 1984, gracias a esta editorial.
							</p>
							<p>
								<b>Colección incompleta.</b> 
							</p>
							<p style="text-align: right;"><strong>09-07-2023</strong></p>
							<hr>
							<div class="tax-gen-title-table-info">Relación de volumenes de esta colección:</div>
							<?php echo do_shortcode('[wpdatatable id=69]'); ?>

						<?php endif; ?>

					</div>
			</div>
			
			<!-- Part: Advise /-->
			<div class="tax-gen-advice">
				Las referencias bibliográficas son de índole investigativo, histórico, documentativo e informativo, 
				de ser otro tipo se señalará explícitamente.
			</div>		
		
		</div>  
	</section>

	<div class="clear"></div>
	
<!-- Section: Description /-->