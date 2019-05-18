<?php
$k=$_POST['url'];
$html = file_get_contents( $k );
$dom = new DOMDocument();

@$dom->loadHTML( $html );

$xpath = new DOMXPath( $dom );
$hrefs = $xpath->evaluate( "/html/body//a" );
for( $i = 0; $i < 10; $i ++ ){
//for( $i = 0; $i < $hrefs->length; $i ++ ) {
	$href = $hrefs->item( $i );
    $url = $href->getAttribute( 'href' );echo "<br>";
    
	echo $url . '';
}
?>
