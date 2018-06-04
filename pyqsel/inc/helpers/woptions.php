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


		function webnus_header_phone_text() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_phone_text']) ? $thm_options['webnus_header_phone_text'] : null;
		}

		function webnus_header_phone() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_phone']) ? $thm_options['webnus_header_phone'] : null;
		}

		function webnus_header_quote_text() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_quote_text']) ? $thm_options['webnus_header_quote_text'] : null;
		}

		function webnus_header_quote() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_quote']) ? $thm_options['webnus_header_quote'] : null;
		}

		function webnus_header_email() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_header_email']) ? $thm_options['webnus_header_email'] : null;
		}

		function webnus_banner_youtube() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_banner_youtube']) ? $thm_options['webnus_banner_youtube'] : null;
		}

		function webnus_banner_form() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_banner_form']) ? $thm_options['webnus_banner_form'] : null;
		}

		function webnus_marketing_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_marketing_title']) ? $thm_options['webnus_marketing_title'] : null;
		}

		function webnus_marketing_sub_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_marketing_sub_title']) ? $thm_options['webnus_marketing_sub_title'] : null;
		}

		function webnus_marketing_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_marketing_desc']) ? $thm_options['webnus_marketing_desc'] : null;
		}

		function webnus_credit_card_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_credit_card_title']) ? $thm_options['webnus_credit_card_title'] : null;
		}

		function webnus_credit_card_subtitle() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_credit_card_subtitle']) ? $thm_options['webnus_credit_card_subtitle'] : null;
		}

		function webnus_credit_card_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_credit_card_desc']) ? $thm_options['webnus_credit_card_desc'] : null;
		}

		function webnus_credit_card_img() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_credit_card_img']) ? $thm_options['webnus_credit_card_img'] : null;
		}

		function webnus_new_business_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_new_business_title']) ? $thm_options['webnus_new_business_title'] : null;
		}

		function webnus_new_business_subtitle() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_new_business_subtitle']) ? $thm_options['webnus_new_business_subtitle'] : null;
		}

		function webnus_new_business_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_new_business_desc']) ? $thm_options['webnus_new_business_desc'] : null;
		}

		function webnus_new_business_img() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_new_business_img']) ? $thm_options['webnus_new_business_img'] : null;
		}

		function webnus_testimonialss_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_testimonialss_title']) ? $thm_options['webnus_testimonialss_title'] : null;
		}

		function webnus_testimonialsss_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_testimonialsss_desc']) ? $thm_options['webnus_testimonialsss_desc'] : null;
		}

		function webnus_testimonialss_long_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_testimonialss_long_desc']) ? $thm_options['webnus_testimonialss_long_desc'] : null;
		}

		function webnus_blog_status() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_blog_status']) ? $thm_options['webnus_blog_status'] : null;
		}

		function webnus_blog_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_blog_title']) ? $thm_options['webnus_blog_title'] : null;
		}

		function webnus_blog_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_blog_desc']) ? $thm_options['webnus_blog_desc'] : null;
		}

	    
		/***********************************/
		/***		SOCIAL NETWORK
		/***********************************/

		function webnus_twitter_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_twitter_ID']) ? $thm_options['webnus_twitter_ID'] : null;
		}

		function webnus_facebook_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_facebook_ID']) ? $thm_options['webnus_facebook_ID'] : null;
		}

		function webnus_youtube_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_youtube_ID']) ? $thm_options['webnus_youtube_ID'] : null;
		}

		function webnus_linkedin_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_linkedin_ID']) ? $thm_options['webnus_linkedin_ID'] : null;
		}

		function webnus_dribbble_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_dribbble_ID']) ? $thm_options['webnus_dribbble_ID'] : null;
		}

		function webnus_pinterest_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_pinterest_ID']) ? $thm_options['webnus_pinterest_ID'] : null;
		}

		function webnus_vimeo_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_vimeo_ID']) ? $thm_options['webnus_vimeo_ID'] : null;
		}

		function webnus_google_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_google_ID']) ? $thm_options['webnus_google_ID'] : null;
		}

		function webnus_rss_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_rss_ID']) ? $thm_options['webnus_rss_ID'] : null;
		}

		function webnus_instagram_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_instagram_ID']) ? $thm_options['webnus_instagram_ID'] : null;
		}

		function webnus_flickr_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_flickr_ID']) ? $thm_options['webnus_flickr_ID'] : null;
		}

		function webnus_reddit_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_reddit_ID']) ? $thm_options['webnus_reddit_ID'] : null;
		}

		function webnus_tumblr_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_tumblr_ID']) ? $thm_options['webnus_tumblr_ID'] : null;
		}

		function webnus_delicious_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_delicious_ID']) ? $thm_options['webnus_delicious_ID'] : null;
		}

		function webnus_lastfm_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_lastfm_ID']) ? $thm_options['webnus_lastfm_ID'] : null;
		}

		function webnus_skype_ID() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_skype_ID']) ? $thm_options['webnus_skype_ID'] : null;
		}

		function webnus_bottom_quote_title() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_bottom_quote_title']) ? $thm_options['webnus_bottom_quote_title'] : null;
		}

		function webnus_bottom_quote_desc() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_bottom_quote_desc']) ? $thm_options['webnus_bottom_quote_desc'] : null;
		}

		function webnus_bottom_quote_link_text() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_bottom_quote_link_text']) ? $thm_options['webnus_bottom_quote_link_text'] : null;
		}

		function webnus_bottom_quote_link() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_bottom_quote_link']) ? $thm_options['webnus_bottom_quote_link'] : null;
		}

		function webnus_footer_logo() {
			$thm_options = get_option('webnus_options');
			return isset($thm_options['webnus_footer_logo']) ? $thm_options['webnus_footer_logo'] : null;
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