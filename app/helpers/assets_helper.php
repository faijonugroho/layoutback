<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* @package for assets file often modified => javascript or css
	*/
	function assets_css_public($filename,$echo=true)
	{
		$filenya = "assets/front/css/".$filename.".css";
		if (file_exists($filenya)) {
			$result = base_url().$filenya."?vfm=".filemtime($filenya);
			if ($echo) {
				echo '<link rel="stylesheet" href="'.$result.'" />';
			} else {
				return '<link rel="stylesheet" href="'.$result.'" />';
			}
		} else {
			echo "File css ".base_url($filenya)." not found..!!";
		}
	}

	function assets_js_public($filename,$echo=true)
	{
		$filenya = "assets/front/js/custom/".$filename.".js";
		if (file_exists($filenya)) {
			$result = base_url().$filenya."?vfm=".filemtime($filenya);
			if ($echo) {
				echo '<script type="text/javascript" src="'.$result.'"></script>';
			} else {
				return '<script type="text/javascript" src="'.$result.'"></script>';
			}
		} else {
			echo "File script ".base_url($filenya)." not found..!!";
		}
	}

	function assets_css_admin($filename,$echo=true)
	{
		$filenya = "assets/back/css/custom/".$filename.".css";
		if (file_exists($filenya)) {
			$result = base_url().$filenya."?vfm=".filemtime($filenya);
			if ($echo) {
				echo '<link rel="stylesheet" href="'.$result.'" />';
			} else {
				return '<link rel="stylesheet" href="'.$result.'" />';
			}
		} else {
			echo "File css ".base_url($filenya)." not found..!!";
		}
	}

	function assets_js_admin($filename,$echo=true)
	{
		$filenya = "assets/back/js/custom/".$filename.".js";
		if (file_exists($filenya)) {
			$result = base_url().$filenya."?vfm=".filemtime($filenya);
			if ($echo) {
				echo '<script type="text/javascript" src="'.$result.'"></script>';
			} else {
				return '<script type="text/javascript" src="'.$result.'"></script>';
			}
		} else {
			echo "File script ".base_url($filenya)." not found..!!";
		}
	}

	function assets_css_general($filename,$echo=true)
	{
		$filenya = "assets/general/css/".$filename.".css";
		if (file_exists($filenya)) {
			$result = base_url().$filenya."?vfm=".filemtime($filenya);
			if ($echo) {
				echo '<link rel="stylesheet" href="'.$result.'" />';
			} else {
				return '<link rel="stylesheet" href="'.$result.'" />';
			}
		} else {
			echo "File css ".base_url($filenya)." not found..!!";
		}
	}

	function assets_js_general($filename,$echo=true)
	{
		$filenya = "assets/general/js/".$filename.".js";
		if (file_exists($filenya)) {
			$result = base_url().$filenya."?vfm=".filemtime($filenya);
			if ($echo) {
				echo '<script type="text/javascript" src="'.$result.'"></script>';
			} else {
				return '<script type="text/javascript" src="'.$result.'"></script>';
			}
		} else {
			echo "File script ".base_url($filenya)." not found..!!";
		}
	}

	