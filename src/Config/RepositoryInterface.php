<?php

/**
 * Rangine Contract
 *
 * (c) We7Team 2019 <https://www.rangine.com>
 *
 * document http://s.w7.cc/index.php?c=wiki&do=view&id=317&list=2284
 *
 * visited https://www.rangine.com for more details
 */

namespace W7\Contract\Config;

interface RepositoryInterface {
	/**
	 * Determine if the given configuration value exists.
	 *
	 * @param  string  $key
	 * @return bool
	 */
	public function has($key);

	/**
	 * Get the specified configuration value.
	 *
	 * @param  array|string  $key
	 * @param  mixed  $default
	 * @return mixed
	 */
	public function get($key, $default = null);

	/**
	 * Get all of the configuration items for the application.
	 *
	 * @return array
	 */
	public function all();

	/**
	 * Set a given configuration value.
	 *
	 * @param  array|string  $key
	 * @param  mixed  $value
	 * @return array
	 */
	public function set($key, $value = null);
}
