<?php
namespace lspbupt\Jpush;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Jpush extends Component
{
    public $app_key;
    public $app_secret;

    private $jpush;

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        if(empty($this->appkey) || empty($this->app_secret)) {
            throw new InvalidParamException("app_key和app_secret必须设置"); 
        }
        $this->jpush = new \jpush\jpush\JPush($app_key, $app_secret);
    }
    
    public function __call($method, $args = [])
    {
        return call_user_func_array(array($this->soundcloud, $method), $args);
    }
}
