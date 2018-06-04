<?php

/******************************************/
/**		  WOPTION HELPER CLASS           **/
/**   Get Options From Theme Option		 **/
/**							             **/
/******************************************/

if (!class_exists('webnus_options')) {
	class webnus_options {

		//Get Faveicon
		function webnus_favicon() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_favicon']) ? $thm_options['webnus_favicon'] : null;
		}
		
		/* LOGO */
		function webnus_logo() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_logo']) ? $thm_options['webnus_logo'] : null;
		}


		function webnus_header_fb() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_fb']) ? $thm_options['webnus_header_fb'] : null;
		}

		function webnus_header_tw() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_tw']) ? $thm_options['webnus_header_tw'] : null;
		}

		function webnus_header_lnk() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_lnk']) ? $thm_options['webnus_header_lnk'] : null;
		}

		function webnus_header_you() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_you']) ? $thm_options['webnus_header_you'] : null;
		}

		//Home Page
		function webnus_home_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_home_title']) ? $thm_options['webnus_home_title'] : null;
		}

		function webnus_home_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_home_desc']) ? $thm_options['webnus_home_desc'] : null;
		}


		function webnus_home_img() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_home_img']) ? $thm_options['webnus_home_img'] : null;
		}


		function webnus_prof_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_prof_title']) ? $thm_options['webnus_prof_title'] : null;
		}


		function webnus_prof_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_prof_desc']) ? $thm_options['webnus_prof_desc'] : null;
		}


		function webnus_prof_link() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_prof_link']) ? $thm_options['webnus_prof_link'] : null;
		}

		function webnus_libri_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_libri_title']) ? $thm_options['webnus_libri_title'] : null;
		}


		function webnus_libri_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_libri_desc']) ? $thm_options['webnus_libri_desc'] : null;
		}


		function webnus_libri_link() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_libri_link']) ? $thm_options['webnus_libri_link'] : null;
		}

		function webnus_conferenze_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_conferenze_title']) ? $thm_options['webnus_conferenze_title'] : null;
		}


		function webnus_conferenze_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_conferenze_desc']) ? $thm_options['webnus_conferenze_desc'] : null;
		}


		function webnus_conferenze_link() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_conferenze_link']) ? $thm_options['webnus_conferenze_link'] : null;
		}

		function webnus_pubblicazioni_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_pubblicazioni_title']) ? $thm_options['webnus_pubblicazioni_title'] : null;
		}

		function webnus_pubblicazionie_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_pubblicazionie_desc']) ? $thm_options['webnus_pubblicazionie_desc'] : null;
		}

		function webnus_pubblicazioni_link() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_pubblicazioni_link']) ? $thm_options['webnus_pubblicazioni_link'] : null;
		}

		function webnus_home_link() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_home_link']) ? $thm_options['webnus_home_link'] : null;
		}

		//Home Page En
		function webnus_home_title_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_home_title_en']) ? $thm_options['webnus_home_title_en'] : null;
		}

		function webnus_home_desc_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_home_desc_en']) ? $thm_options['webnus_home_desc_en'] : null;
		}


		function webnus_home_img_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_home_img_en']) ? $thm_options['webnus_home_img_en'] : null;
		}


		function webnus_prof_title_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_prof_title_en']) ? $thm_options['webnus_prof_title_en'] : null;
		}


		function webnus_prof_desc_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_prof_desc_en']) ? $thm_options['webnus_prof_desc_en'] : null;
		}


		function webnus_prof_link_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_prof_link_en']) ? $thm_options['webnus_prof_link_en'] : null;
		}

		function webnus_libri_title_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_libri_title_en']) ? $thm_options['webnus_libri_title_en'] : null;
		}


		function webnus_libri_desc_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_libri_desc_en']) ? $thm_options['webnus_libri_desc_en'] : null;
		}


		function webnus_libri_link_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_libri_link_en']) ? $thm_options['webnus_libri_link_en'] : null;
		}

		function webnus_conferenze_title_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_conferenze_title_en']) ? $thm_options['webnus_conferenze_title_en'] : null;
		}


		function webnus_conferenze_desc_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_conferenze_desc_en']) ? $thm_options['webnus_conferenze_desc_en'] : null;
		}


		function webnus_conferenze_link_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_conferenze_link_en']) ? $thm_options['webnus_conferenze_link_en'] : null;
		}

		function webnus_pubblicazioni_title_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_pubblicazioni_title_en']) ? $thm_options['webnus_pubblicazioni_title_en'] : null;
		}

		function webnus_pubblicazionie_desc_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_pubblicazionie_desc_en']) ? $thm_options['webnus_pubblicazionie_desc_en'] : null;
		}

		function webnus_pubblicazioni_link_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_pubblicazioni_link_en']) ? $thm_options['webnus_pubblicazioni_link_en'] : null;
		}

		function webnus_home_link_en() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_home_link_en']) ? $thm_options['webnus_home_link_en'] : null;
		}

		
		function webnus_footer_copyright() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_footer_copyright']) ? $thm_options['webnus_footer_copyright'] : null;
		}

		


		/* 404 PAGE	 */
		function webnus_404_text() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_404_text']) ? $thm_options['webnus_404_text'] : null;
		}

	}
}