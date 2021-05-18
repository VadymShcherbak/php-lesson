<?php
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}

function esc_html( $data ) {
	return htmlspecialchars( trim( $data ) );
}
?>