<?php

interface Hashable {

	/**
	 * Returns a string hash based on the value of the object. The string must not exceed
	 * 255 bytes (255 ASCII characters or less when it contains Unicode characters that
	 * need to be UTF-8 encoded) to allow using indexes on all database systems.
	 *
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getHash();

}
