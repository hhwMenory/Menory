<?php
/**
 * @todo 
 * @author Menory
 * @date 2016年9月3日 21:04:11
 */
namespace Menory\Network;

use \Menory\Network\SwooleBaseServer;

class SwooleTcpServer extends SwooleBaseServer
{
    /**
     * @todo
     */
    public function run()
    {
        $swooleTcpServer = new \Swoole\Server('0.0.0.0', 9500);

        $swooleTcpServer->on('Receive', [$this, 'onReceive']);

        $swooleTcpServer->start();
    }

    public function onReceive(\Swoole\Server $server, $fd, $fromId, $data)
    {
        call_user_func($this->callbackFunc, $server, $fd, $fromId, $data);
    }
}
