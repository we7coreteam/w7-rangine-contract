<?php

namespace W7\Contract\Task;

interface TaskInterface {
	/**
	 * 线程具体执行内容
	 * @return mixed
	 */
	public function run($server, $taskId, $workId, $data);

	/**
	 * 任务中定义完成回调
	 */
	public function finish($server, $taskId, $data, $params);
}
