<?php
// +----------------------------------------------------------------------
// | Think_firdot
// +----------------------------------------------------------------------
// | 版权所有 2008~2017 上海泛多网络技术有限公司 [ http://www.firdot.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.firdot.com
// +----------------------------------------------------------------------

return [
	'id' => '',
	'var_session_id' => '', // SESSION_ID的提交变量,解决flash上传跨域
	'prefix' => 'think', // SESSION 前缀
	'type' => '', // 驱动方式 支持redis memcache memcached
	'auto_start' => true, // 是否自动开启 SESSION
];