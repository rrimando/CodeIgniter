<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sandbox extends CI_Controller {

    /**
     * Index Page for this Sandbox.
     *
     */
    public function index()
    {
          // Load Library
          $this->load->library('s3');
          
          // Create a Bucket
          var_dump($this->s3->putBucket('My-Bucket', $this->s3->ACL_PUBLIC_READ));
          
          // List Buckets
          var_dump($this->s3->listBuckets());
    }
}
