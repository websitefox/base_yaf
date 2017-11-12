<?php
/**
 * @name IndexController
 * @author 
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
use think\Db;
class IndexController extends HomeController {



    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/qunlang/index/index/index/name/ 的时候, 你就会发现不同
     */
	public function indexAction($name = "Stranger") {
        //是否开启布局的开关
//        $this->layout_on(FALSE);
//        \Yaf\Dispatcher::getInstance()->autoRender(FALSE);
//        echo "<pre>";
//        $users = UserModel::all()->toArray();
//        print_r($users);
////
//        $user = Db::table('lang_ucenter_member')->where('id',1)->find();
//        print_r($user);

//        $user = new UserModel();
//        print_r($user);
//        var_dump($user->items());


//        $hooks = Db::table('lang_hooks')->where('status',1)->select();
//        $this->getView()->assign('hooks',$hooks);





        //1. fetch query
		$get = $this->getRequest()->getQuery("get", "default value");

		//2. fetch model
		$model = new SampleModel();

		//3. assign
		$this->getView()->assign("content", $model->selectSample());
//		$this->getView()->assign("name", $name);
		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
//        return FALSE;
	}

    /**
     * 验证码示例
     * @return bool
     */
	public function CaptchaAction(){

        Captcha_Captcha::generate(4);
	    return false;
    }
}
