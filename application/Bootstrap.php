<?php
/**
 * @name Bootstrap
 * @author 
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

use think\Db;
class Bootstrap extends Yaf\Bootstrap_Abstract {

    protected $config;
    public function _initConfig() {
		//把配置保存起来
		$this->config = $arrConfig = Yaf\Application::app()->getConfig();

		Yaf\Registry::set('config', $arrConfig);
	}

	public function _initPlugin(Yaf\Dispatcher $dispatcher) {
		//注册一个插件
		$objTwigPlugin = new TwigPlugin();
		$dispatcher->registerPlugin($objTwigPlugin);


	}

	public function _initRoute(Yaf\Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
        $router = \Yaf\Dispatcher::getInstance()->getRouter();

        $route = [];
        // 默认进入index/index
        $modules = \Yaf\Application::app()->getModules();
        if($modules) {
            foreach ($modules as $module) {
                $name = strtolower($module);
                $route[$name] = new Yaf\Route\Rewrite(
                    '/('.$name.'|'.$name.'/|'.$name.'/index|'.$name.'/index/)$',
                    [
                        'controller' => 'index',
                        'action' => 'index',
                        'module' => $name
                    ]
                );
            }
        }
        //使用路由器装载路由协议
        foreach ($route as $k => $v) {
            $router->addRoute($k, $v);
        }
        \Yaf\Registry::set('rewrite_route', $route);
	}

    public function _initDatabase()
    {

        $config = Yaf\Application::app()->getConfig();
        Db::setConfig($config->database->toArray());

    }
	

}
