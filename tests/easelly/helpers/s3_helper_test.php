<?php

class S3_helper_test extends CI_TestCase {

	public function set_up()
	{
		$this->test_file = 'easelly.png';
		$this->test_path = 'tests/test_assets/';
		$this->helper('s3');

		$this->ci_vfs_clone(APPPATH. 'libraries/S3.php');
		$this->s3 = new s3();
		$this->ci_instance_var('s3', $this->s3);
	}

	public function test_s3_fetch_file() {
		$this->assertEquals(true, s3_fetch_file($this->test_file));
	}

	public function test_s3_put_object() {
		$this->assertEquals(true, s3_put_object($this->test_file, $this->test_path));
	}

}
