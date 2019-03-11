<?php
// +----------------------------------------------------------------------
// | Think_firdot
// +----------------------------------------------------------------------
// | 版权所有 2008~2017 上海泛多网络技术有限公司 [ http://www.firdot.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.firdot.com
// +----------------------------------------------------------------------

return [
	'data_backup_path' => Env::get('root_path') . 'data' . DIRECTORY_SEPARATOR, //数据库备份根路径
	'data_backup_part_size' => 20971520, //数据库备份卷大小
	'data_backup_compress' => 0, //数据库备份文件是否启用压缩
	'data_backup_compress_level' => 9, //数据库备份文件压缩级别
];
