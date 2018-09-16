<?php
/**
 * Comment type merge tag
 *
 * @package notification
 */

namespace BracketSpace\Notification\Defaults\MergeTag\Comment;

use BracketSpace\Notification\Defaults\MergeTag\StringTag;


/**
 * Comment type merge tag class
 */
class CommentType extends StringTag {

	/**
	 * Trigger property to get the comment data from
	 *
	 * @var string
	 */
	protected $property_name = 'comment';

	/**
	 * Merge tag constructor
	 *
	 * @since 5.0.0
	 * @param array $params merge tag configuration params.
	 */
	public function __construct( $params = array() ) {

		if ( isset( $params['property_name'] ) && ! empty( $params['property_name'] ) ) {
			$this->property_name = $params['property_name'];
		}

		$args = wp_parse_args(
			$params, array(
				'slug'        => 'comment_type',
				'name'        => __( 'Comment type', 'notification' ),
				'description' => __( 'Comment or Pingback or Trackback', 'notification' ),
				'resolver'    => function() {
					return empty( $this->trigger->{ $this->property_name }->comment_type ) ? __( 'Comment', 'notification' ) : $this->trigger->{ $this->property_name }->comment_type;
				},
			)
		);

		parent::__construct( $args );

	}

	/**
	 * Function for checking requirements
	 *
	 * @return boolean
	 */
	public function check_requirements() {
		return isset( $this->trigger->{ $this->property_name }->comment_type );
	}

}
