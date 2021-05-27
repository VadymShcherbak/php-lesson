<?php
session_start();

/**
 * Ar.
 *
 * @param  mixed $data Data.
 */
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}


/**
 * Esc html.
 *
 * @param  mixed $data Data.
 * @return string
 */
function esc_html( $data ) {
	return htmlspecialchars( trim( $data ) );
}

/**
 * Add notice.
 *
 * @param  mixed $type Type.
 * @param  mixed $massage Massage.
 */
function va_add_notice( $type, $massage ) {
	$_SESSION['notice'][ $type ][] = $massage;
}

/**
 * Print notice.
 *
 * @param  mixed $type Type.
 */
function va_print_notice( $type ) {
	$arr_notice = $_SESSION['notice'][ $type ];
	$type_class = '';

	if ( 'error' === $type ) {
		$type_class = 'alert-danger';
	} elseif ( 'success' === $type ) {
		$type_class = 'alert-success';
	}

	if ( ! empty( $arr_notice ) ) {
		?>

		<div class="alert <?php echo $type_class; ?> text-center mt-3" role="alert">
			<?php
			foreach ( $arr_notice as $value ) :
				echo $value;
			endforeach;
			?>
		</div>

		<?php
	}
	unset( $_SESSION['notice'][ $type ] );
}

/**
 * Header.
 *
 * @param  mixed $url Link.
 */
function va_header( $url ) {
	header( 'Location: ' . $url );
	die();
}
