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

namespace W7\Contract\Http;

interface ResponseOutputerInterface {
	/**
	 * 响就头部
	 * @param array $headers
	 * @return mixed
	 */
	public function sendHeader(array $headers);

	/**
	 * 不关闭连接，持续向客户端写入数据
	 * 相当于 flush() 强制输出缓冲区内容到浏览器
	 * 也可以用于发送Chunk数据
	 * @param string $content
	 * @return mixed
	 */
	public function sendChunk($content);

	/**
	 * 响应Cookie
	 * @param array $cookies
	 */
	public function sendCookie(array $cookies);

	/**
	 * 响应文件，与响应内容同时只能使用一个
	 * @param \SplFileInfo $file
	 */
	public function sendFile(\SplFileInfo $file);

	/**
	 * 响应内容
	 * @param string $content
	 */
	public function sendBody($content);

	/**
	 * 响应状态码
	 * @param int $code
	 */
	public function sendStatus($code);

	public function disConnect();
}
