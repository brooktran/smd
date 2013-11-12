<?php

$host='localhost';
$dbu='root';
$dbp='root';

define('IS_SYNC', false);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

return CMap::mergeArray(
		require(dirname(__FILE__).DIRECTORY_SEPARATOR.'../../../smoothy/protected/config/main.default.php')
		, array(
// 		'smoothyPath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'../../smoothy',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	'theme'=>'classic',
	'language'=>'zh_cn',//中文提示

	// preloading 'log' component
	'preload'=>array('log'),

	'import'=>array(
			'application.models.domain.*',
			'application.models.forms.*',
			'application.components.*',
           'application.service.*',
           'application.hybrid.*',
	),
	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'11',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
//			'generatorPaths'=>array(
//                'bootstrap.gii',
//            ),
		),
		'back'=>array(
			'class'=>'application.modules.back.BackModule'
		),
	),
	'wrappers'=>array(
	// 			'ContentService'=>array(
			// 					'class'=>'ContentWrapper',
			// 					'decorations'=>array(
					// 							'DasaiContentDecoration',
					// 					)
			// 			),
	// 			'AOPWorker'=>array(//for test
			// 				'class'=>'DiagnosisWrapper',
			// 				'decorations'=>array(
					// 					'DasaiDiagnosisDecoration'
					// 				),
			// 			),
	),
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				'<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
			),
			'urlSuffix'=>'.html',
		),
//		'bootstrap'=>array(
//           'class'=>'bootstrap.components.Bootstrap',
//        ),
// 		'db'=>array(
// 			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
// 		),
		'db'=>array(
				'class' => 'CDbConnection',
				'connectionString' => "mysql:host=$host;dbname=airbool_content",
				'emulatePrepare' => true,
				'username' => $dbu,
				'password' => $dbp,
				'charset' => 'utf8',
				'enableProfiling'=>true,
		),
		'service'=>array(
				'class' => 'CDbConnection',
				'connectionString' => "mysql:host=$host;dbname=airbool_service",
				'emulatePrepare' => true,
				'username' => $dbu,
				'password' => $dbp,
				'charset' => 'utf8',
				'enableProfiling'=>true,
		),
		'address'=>array(
				'class' => 'CDbConnection',
				'connectionString' => "mysql:host=$host;dbname=airbool_address",
				'emulatePrepare' => true,
				'username' => $dbu,
				'password' => $dbp,
				'charset' => 'utf8',
				'enableProfiling'=>true,
		),
		'domain'=>array(
				'class' => 'CDbConnection',
				'connectionString' => "mysql:host=$host;dbname=airbool_domain",
				'emulatePrepare' => true,
				'username' => $dbu,
				'password' => $dbp,
				'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				array(
					'class'=>'CWebLogRoute',
				),

			),
		),
	),



	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
        'ATTR_PRODUCT_TYPEID' => 12,//产品
        'ATTR_ARTICLE_TYPEID' =>11,//文章
        'ATTR_DOMAIN_ID'=>'1',

        'DBcontent'=>'airbool_content',
    ),

));