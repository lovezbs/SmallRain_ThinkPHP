<?php
return array(
	//'配置项'=>'配置值'
	 'TMPL_L_DELIM'          =>  '<{',			// 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}>',			// 模板引擎普通标签结束标记
	 'SHOW_PAGE_TRACE'   => true,   // 显示页面Trace信息

 /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'db_junshi',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'lovezbs',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'tb_',    // 数据库表前缀

'URL_DENY_SUFFIX'       =>  '', // URL禁止访问的后缀设置

// 获取url参数中的信息
    'VAR_URL_PARAMS'      => '_URL_' // PATHINFO URL参数变量

);