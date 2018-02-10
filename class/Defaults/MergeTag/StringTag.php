<?php
/**
 * String merge tag class
 *
 * @package notification
 */

namespace underDEV\Notification\Defaults\MergeTag;

use underDEV\Notification\Abstracts\MergeTag;

/**
 * String merge tag class
 */
class StringTag extends MergeTag {

    /**
     * Check the merge tag value type
     *
     * @param  mixed $value value.
     * @return boolean
     */
    public function validate( $value ) {
    	return ! is_array( $value ) && ! is_object( $value );
    }

    /**
     * Sanitizes the merge tag value
     *
     * @param  mixed $value value.
     * @return mixed
     */
    public function sanitize( $value ) {
    	return (string) sanitize_text_field( $value );
    }

}
