<?php

namespace Apps\Fintech\Middlewares\IpFilter;

use System\Base\BaseMiddleware;

class IpFilter extends BaseMiddleware
{
    public function process($data)
    {
        if ($this->access->ipFilter->checkList()) {
            return true;
        }

        $this->response->setStatusCode(404);

        $this->response->send();

        exit;
    }
}