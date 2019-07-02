<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage custom_gfi
 * @since 1.0.0
 */

?>


		<div class = "footer col-xs-12 col-sm-12 col-md-12">
			<div class = "footer_container">
				<div class = "footer_agence">
					<div class = "footer_agence_desc">
						<div class = "footer_agence_logo"></div>
						<div class = "footer_agence_text">GFI CONSEIL</div>
						<div class = "footer_agence_text">
							36 rue de Paris BP 137
						</div>
						<div class = "footer_agence_text">
							93100 Montreuil
						</div>
						<div class = "footer_agence_text">
							0148598484
						</div>
						<div class = "footer_agence_contact" onClick="document.location.href='agence#contact'">
							NOUS CONTACTER
						</div>
					</div>
				</div>
				<div class = "footer_cats">
					<div class = "footer_cat">
						<div class ="footer_cat_tilte" onClick="document.location.href='vente'">vente</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=vente_maison'">maisons</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=vente_appartement'">appartements</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=vente_investissement'">investissements</div>
						<div class ="footer_cat_elt"  onClick="document.location.href='annonces?cat=vente_autres'">autres</div>
					</div>
					<div class = "footer_cat">
						<div class ="footer_cat_tilte" onClick="document.location.href='location'">location</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=location_appartement'">appartements</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=location_maison'">maisons</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=location_parking'">parkings</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=location_autres'">autres</div>
					</div>
					<div class = "footer_cat">
						<div class ="footer_cat_tilte" onClick="document.location.href='entreprise'">entreprise</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=entreprise_vente'">vente</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=entreprise_location'">location</div>
						<div class ="footer_cat_elt" onClick="document.location.href=''">gestion</div>
						<div class ="footer_cat_elt" onClick="document.location.href='annonces?cat=entreprise_investissement'">Investissements</div>
					</div>
					<div class = "footer_cat">
						<div class ="footer_cat_tilte" onClick="document.location.href='gestion'">gestion</div>
					</div>
				</div>
			</div>
			<div class = "footer_socials">
				réseaux sociaux
			</div>
			<div class = "footer_legals" onClick="document.location.href='legals'">
				mentions légales
			</div>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
