<?php
// +----------------------------------------------------------------------
// | Think_firdot
// +----------------------------------------------------------------------
// | 版权所有 2008~2017 上海泛多网络技术有限公司 [ http://www.firdot.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.firdot.com
// +----------------------------------------------------------------------

namespace think;

return [
	'app_init' => [], // 应用初始化标签位
	'app_dispatch' => [], // 应用调度标签位
	'app_begin' => ['hook\\AccessAuth', 'hook\\TemplatePath', 'hook\\LoadLang'], // 应用开始标签位
	'module_init' => [], // 模块初始化标签位
	'action_begin' => [], // 控制器开始标签位
	'view_filter' => [], // 视图输出过滤标签位
	'app_end' => [], // 应用结束标签位
	'log_write' => [], // 日志write方法标签位
	'log_level' => [], // 日志写入标签位
	'response_send' => [], // 响应发送标签位
	'response_end' => [], // 输出结束标签位
];
