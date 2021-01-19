<?php
namespace luoyy\AliCore\Pns\Request;

use luoyy\AliCore\RpcAcsRequest;

/**
 * 通过活体认证token查询最终认证结果
 */
class GetCertifyResultRequest extends RpcAcsRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Dypnsapi',
            '2017-05-25',
            'GetCertifyResult',
            'dypns',
            'openAPI'
        );
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->requestParameters['Token'] = $token;
        $this->queryParameters['Token'] = $token;
        return $this;
    }
}
