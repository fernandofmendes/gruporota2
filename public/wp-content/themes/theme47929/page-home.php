<?php
/**
* Template Name: Home Page
*/

get_header(); ?>

<style type="text/css">
	.areaitem {
		float: left;
		border: 0px;
		margin: 0px;
		width: 33.3333%;
	}
	.areaimg {
		float: left;
		width: 49.9999%;
		height: 150px;
	}
	.areatexto {
		float: left;
		width: 49.9999%;
	}
	.areatextocontent { 
		padding: 15px;
		font: normal 14px/20px Open Sans !important;
  		color: #777;
	}
	.areatitulo {
		position: absolute;
		font: normal 15px/20px Open Sans !important;
		background-color: red;
		margin-top: -20px;
		z-index: 10;
		padding: 8px 15px 8px 15px;
		text-transform: uppercase;
		color: #FFFFFF;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
</style>

<div class="motopress-wrapper content-holder clearfix">
	<div>
		<div class="areaitem">
			<div class="areatitulo" style="background-color: #8a3e58;">Construções</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_construtora.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

		<div class="areaitem">
			<div class="areatitulo" style="background-color: #00933e;">Contábil</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_contabil.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

		<div class="areaitem">
			<div class="areatitulo" style="background-color: #1d2d89;">Industrial</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_engenharia.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

		<div class="areaitem"  style="background-color: #F0F0F0;">
			<div class="areatitulo" style="background-color: #2ecc71;">Ambiental</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_ambiente.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

		<div class="areaitem"  style="background-color: #F0F0F0;">
			<div class="areatitulo" style="background-color: #aa942e;">Negócios Internacionais</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_negocio.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

		<div class="areaitem"  style="background-color: #F0F0F0;">
			<div class="areatitulo" style="background-color: #6f7074;">Segurança</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_seguranca.jpg'); background-size: 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

		<div class="areaitem">
			<div class="areatitulo" style="background-color: #1d2d89;">GRB Business Center</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_predios.jpg'); background-size: 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

		<div class="areaitem">
			<div class="areatitulo" style="background-color: #e67e22;">Titulo Area</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_familia.jpg'); background-size: auto 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

		<div class="areaitem">
			<div class="areatitulo" style="background-color: #e74c3c;">Titulo Area</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_crianca.jpg'); background-size: auto 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
			</div>
		</div>

	</div>


	<div class="container">
		<div class="row">
			<?php do_action( 'cherry_before_home_page_content' ); ?>
			<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
						<?php get_template_part("loop/loop-page"); ?>
					</div>
				</div>
			</div>
			<?php do_action( 'cherry_after_home_page_content' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>