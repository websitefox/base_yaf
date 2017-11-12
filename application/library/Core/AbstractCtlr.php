<?php
/**
 * 过滤一些用户输入的信息
 */

namespace Core;
class AbstractCtlr extends \Yaf\Controller_Abstract
{

    public function init()
    {
        //do not call render for ajax request
        if($this->isAjax())
        {
            \Yaf\Dispatcher::getInstance()->autoRender(FALSE);
        }
    }

    

    /**
     * @desc 返回请求的类型
     *
     * @return GET/POST/HEAD/PUT/CLI
     */
    protected function getMethod()
    {
        return $this->getRequest()->getMethod();
    }

    /**
     * @desc 是否是get请求
     *
     * @return boolean true/false
     */
    protected function isGet()
    {
        return $this->getRequest()->isGet();
    }

    /**
     * @desc 是否是post请求
     *
     * @return boolean true/false
     */
    protected function isPost()
    {
        return $this->getRequest()->isPost();
    }

    /**
     * @desc 是否是cli请求
     *
     * @return boolean true/false
     */
    protected function isCli()
    {
        return $this->getRequest()->isCli();
    }

    /**
     * @desc 是否是ajax请求
     *
     * @return boolean true/false
     */
    protected function isAjax()
    {
        return $this->getRequest()->isXmlHttpRequest();
    }

    /**
     * @desc 获取地址栏k-v数据对
     *
     */
    protected function getParam($name, $default_value = null, $isFilter = true)
    {
        $data = $this->getRequest()->getParam($name, $default_value);

        if($isFilter){
            return $this->xssClean($data);
        }else{
            return $data;
        }
    }

    /**
     * @desc 获取地址栏 所有的k-v数据对
     *
     */
    protected function getParams()
    {
        $data = $this->getRequest()->getParams();

        return $this->xssClean($data);
    }

    /**
     * @desc 可以获取地址和？后面部分的参数数据
     * eg: 可以获取 getParam、getQuery的数据
     */
    protected function get($name, $default_value = null, $isFilter = true)
    {
        $data = $this->getRequest()->get($name, $default_value);

        if($isFilter){
            return $this->xssClean($data);
        }else{
            return $data;
        }
    }

    /**
     * @desc 获取地址 ？ 后面部分的参数数据
     *
     */
    protected function getQuery($name, $default_value = null, $isFilter = true)
    {
        $data = $this->getRequest()->getQuery($name, $default_value);

        if($isFilter){
            return $this->xssClean($data);
        }else{
            return $data;
        }
    }

    protected function getPost($name, $default_value = null, $isFilter = true)
    {
        $data = $this->getRequest()->getPost($name, $default_value);

        if($isFilter){
            return $this->xssClean($data);
        }else{
            return $data;
        }
    }

    protected function getCookie($name, $default_value = null, $isFilter = true)
    {
        $data = $this->getRequest()->getCookie($name, $default_value);

        if($isFilter){
            return $this->xssClean($data);
        }else{
            return $data;
        }
    }

    /**
     * 数据安全过滤
     * @param $data
     * @return mixed
     */
    protected function xssClean($data)
    {
        if(is_array($data)){
            return filter_var_array($data, FILTER_SANITIZE_STRING);
        }else{
            return filter_var($data, FILTER_SANITIZE_STRING);
        }
    }
}
