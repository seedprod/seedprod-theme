<?php
/**
 * Custom functions
 */

/**
 * Truncates string at the last breakable space within the string at the
 * character limit and then adds the truncation indicator.
 *
 * @string                   The string to possibly truncate
 * @$character_limit         The number of characters to limit the string to
 * @$truncation_indicator    The characters to end truncation with (if needed)
 */

function standard_truncate_text( $string, $character_limit = 50, $truncation_indicator = '...' ) {

	$truncated = null == $string ? '' : $string;
    if ( strlen( $string ) >= ( $character_limit + 1 ) ) {
    
        $truncated = substr( $string, 0, $character_limit );

        if ( substr_count( $truncated, ' ') > 1 ) {
            $last_space = strrpos( $truncated, ' ' );
            $truncated = substr( $truncated, 0, $last_space );
        } // end if

        $truncated = $truncated . $truncation_indicator;
        
    } // end if/else
    
    return $truncated;
    
} // end standard_truncate_text
