<?php
namespace luoyy\AliCore\Pns\Request;

use luoyy\AliCore\RpcAcsRequest;

/**
 * 调用GetMobile完成一键登录取号
 */
class GetMobileRequest extends RpcAcsRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    protected $requestScheme = 'https';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Dypnsapi',
            '2017-05-25',
            'GetMobile',
            'dypns',
            'openAPI'
        );
    }

    /**
     * @param string $access_token
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->requestParameters['AccessToken'] = $access_token;
        $this->queryParameters['AccessToken'] = $access_token;
        return $this;
    }

    /**
     * @param string $out_id
     *
     * @return $this
     */
    public function setOutId($out_id)
    {
        $this->requestParameters['OutId'] = $out_id;
        $this->queryParameters['OutId'] = $out_id;
        return $this;
    }
}
