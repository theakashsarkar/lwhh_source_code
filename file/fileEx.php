<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f1.txt";
if ( !is_readable( $fileName ) ) {
    throw new Exception( "File not readable" );
} elseif ( is_readable( $fileName ) ) {
    $fp = fopen( $fileName, 'r' );
// $line     = fgets($fp,3);
    // echo $line;
    while ( $line = fgets( $fp ) ) {
        echo $line;
    }
    rewind( $fp );
    fseek( $fp, -1, SEEK_END );
    while ( $line = fgets( $fp ) ) {
        echo $line;
    }
    fclose( $fp );
    $data = file( $fileName );
    print_r( $data );
    echo "\n";
    $data = file_get_contents( $fileName );
    echo $data;
}