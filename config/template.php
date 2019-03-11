<?php
// +----------------------------------------------------------------------
// | Think_firdot
// +----------------------------------------------------------------------
// | 版权所有 2008~2017 上海泛多网络技术有限公司 [ http://www.firdot.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.firdot.com
// +----------------------------------------------------------------------

return [
	'type' => 'Think', // 模板引擎类型 支持 php think 支持扩展
	'auto_rule' => 1, // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写 3 保持操作方法
	'view_base' => Env::get('root_path') . 'template' . DIRECTORY_SEPARATOR, // 模板根路径
	'view_path' => '', // 模板路径
	'view_suffix' => 'html', // 模板后缀
	'view_depr' => '_', // 模板文件名分隔符
	'tpl_begin' => '{', // 模板引擎普通标签开始标记
	'tpl_end' => '}', // 模板引擎普通标签结束标记
	'taglib_begin' => '{', // 标签库标签开始标记
	'taglib_end' => '}', // 标签库标签结束标记
	'tpl_replace_string' => [ // 定义模板替换字符串
		'__ROOT__' => '',
		'__STATIC__' => '/static',
	],
];
