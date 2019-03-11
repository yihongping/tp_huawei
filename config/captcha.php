<?php
// +----------------------------------------------------------------------
// | Think_firdot
// +----------------------------------------------------------------------
// | 版权所有 2008~2017 上海泛多网络技术有限公司 [ http://www.firdot.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.firdot.com
// +----------------------------------------------------------------------

return [
	'codeSet' => '0123456789', // 验证码字符集合
	'expire' => 1800, // 验证码过期时间（s）
//	'useZh' => 'false', // 使用中文验证码
//	'zhSet' => '', // 中文验证码字符串
	'useImgBg' => false, // 使用背景图片
	'fontSize' => 50, // 验证码字体大小(px)
	'useCurve' => true, // 是否画混淆曲线
	'useNoise' => true, // 是否添加杂点
	'imageH' => 0, //	验证码图片高度，设置为0为自动计算
	'imageW' => 0, // 验证码图片宽度，设置为0为自动计算
	'length' => 5, // 验证码位数
	'fontttf' => '', // 验证码字体，不设置是随机获取
	'bg' => [243, 251, 254], // 背景颜色
	'reset' => 'true', // 验证成功后是否重置
];
