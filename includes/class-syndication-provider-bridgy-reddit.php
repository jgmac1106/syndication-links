<?php

class Syndication_Provider_Bridgy_Reddit extends Syndication_Provider_Bridgy {

	public function __construct( $args = array() ) {
		$this->name = __( 'Reddit via Bridgy', 'syndication-links' );
		$this->uid  = 'reddit-bridgy';

		// Parent Constructor
		parent::__construct( $args );
	}

	public function get_target() {
		return 'https://brid.gy/publish/reddit';
	}
}

register_syndication_provider( new Syndication_Provider_Bridgy_Reddit() );

