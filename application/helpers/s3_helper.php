<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| S3 Helper
| -------------------------------------------------------------------
| This file bridges all calls to the s3 library and makes it 
| available to the application through autoloading the helper or
| explicitly loading it.
|
*/

if ( ! function_exists('s3_fetch_filename')) 
{
	function s3_fetch_filename($filename) 
	{
		return true;
	}

}

if ( ! function_exists('s3_get_object')) 
{
	function s3_get_object($filename) 
	{
		return true;
	}
}
