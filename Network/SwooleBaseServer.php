<?php
namespace Menory\Network;


class SwooleBaseServer 
{
    protected $swooleConfig = [];
    protected $serverConfig = [];

    protected $callbackFunc;

    public function setSwooleConfig(array $swooleConfig = [])
    {
        $this->swooleConfig = $swooleConfig;
    }

    public function setServerConfig(array $serverConfig = [])
    {
        $this->serverConfig = $serverConfig;
    }

    public function setCallbackFunc($callbackFunc)
    {
        $this->callbackFunc = $callbackFunc;
    }

}
