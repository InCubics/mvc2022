<?php
	/**
	 * Project: MVC2022.
	 * Author:  InCubics
	 * Date:    02/07/2022
	 * File:    cssService.php
	 */

	namespace services;

	use lib\files\getFiles;

	class cssService
	{
		public function call()
		{
			// activities to create a string with all required css-links from folder and/or array with online-sources

			$cssCDN  = include('../app/config/css_cdn_resources.php');
			$css ='';
			if(!empty($cssCDN))
			{
				foreach($cssCDN as $arrayResource)
				{
					if(!empty($arrayResource['comment']))
					{
						$css.='<!--'.$arrayResource['comment'].'-->';
					}
					$css.='<link href="'.$arrayResource['href'].'" rel="stylesheet" type="text/css" ';
					if(!empty($arrayResource['integrity']))
					{
						$css.='integrity="'.$arrayResource['integrity'].'" ';
					}
					if(!empty($arrayResource['crossorigin']))
					{
						$css.='crossorigin="'.$arrayResource['crossorigin'].'" ';
					}
					$css.='>';
				}
			}
			$files = (new getFiles())->files('css', 'css');
			foreach($files as $file){
				$css .= '<link href="http';
				if( isset($_SERVER['HTTPS'] ) ){
					$css .= 's';
				}
				$css.= '://'.$_SERVER['SERVER_NAME'].'/'.
					rtrim( rtrim(ltrim(CONFIG['base_path'],'/'), '/'),'/').'/'.
					ltrim($file, './').'" type="text/css" rel="stylesheet" />';
			}
			
			return (string) $css;

		}
	}
