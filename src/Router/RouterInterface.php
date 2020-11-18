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

namespace W7\Contract\Router;

interface RouterInterface {
	/**
	 * @param $name
	 * @return $this
	 */
	public function middleware($name);

	/**
	 * 指定该路由的名字，用于验权之类的操作
	 * @param $name
	 * @return $this
	 */
	public function name($name);

	/**
	 * @param ValidatorInterface $validator
	 * @return mixed
	 */
	public function registerValidator(ValidatorInterface $validator);

	/**
	 * @param $option
	 * @param callable $callback
	 * @return mixed
	 */
	public function group($option, callable $callback);

	/**
	 * 注册一个支持多种协议的路由
	 * @param $methods
	 * @param $uri
	 * @param $handler
	 * @param string $name
	 * @param array $defaults
	 * @return bool
	 * @throws \ErrorException
	 */
	public function add($methods, $uri, $handler, $name = '', $defaults = []);

	/**
	 * @param $uri
	 * @param $handler
	 * @param string $name
	 * @param array $defaults
	 * @return mixed
	 */
	public function any($uri, $handler, $name = '', $defaults = []);

	/**
	 * @param $uri
	 * @param $handler
	 * @return mixed
	 */
	public function all($uri, $handler);

	/**
	 * @param $uri
	 * @param $handler
	 * @return mixed
	 */
	public function post($uri, $handler);

	/**
	 * @param $uri
	 * @param $handler
	 * @return mixed
	 */
	public function get($uri, $handler);

	/**
	 * @param $uri
	 * @param $handler
	 * @return mixed
	 */
	public function put($uri, $handler);

	/**
	 * @param $uri
	 * @param $handler
	 * @return mixed
	 */
	public function delete($uri, $handler);

	/**
	 * @param $uri
	 * @param $handler
	 * @return mixed
	 */
	public function patch($uri, $handler);

	/**
	 * @param $uri
	 * @param $handler
	 * @return mixed
	 */
	public function head($uri, $handler);

	/**
	 * @param $uri
	 * @param $handler
	 * @return mixed
	 */
	public function options($uri, $handler);

	/**
	 * 注册一个直接跳转路由
	 * @param $uri
	 * @param $destination
	 * @param int $status
	 * @return mixed
	 */
	public function redirect($uri, $destination, $status = 302);

	/**
	 * 注册一个直接显示的静态页
	 * @param $uri
	 * @param string $view
	 * @return mixed
	 */
	public function view($uri, string $view);

	/**
	 * @param $name
	 * @param $controller
	 * @param array $options
	 */
	public function resource($name, $controller, $options = []);

	/**
	 * @param $name
	 * @param $controller
	 * @param array $options
	 */
	public function apiResource($name, $controller, $options = []);

	/**
	 * 获取路由列表
	 * @return array
	 */
	public function getData();
}
