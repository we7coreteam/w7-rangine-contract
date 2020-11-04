<?php

namespace W7\Contract\Session;

interface SessionInterface {
	public function getName();
	public function setId($sessionId);
	public function getId();
	public function set($key, $value);
	public function get($key, $default = '');
	public function has($key);
	public function delete($keys);
	public function destroy();
	public function close();
}
