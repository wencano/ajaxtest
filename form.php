<?php

$data = $_POST;

if(!empty($data)) {
  file_put_contents( "formdata.txt", json_encode( $data ) );
}

