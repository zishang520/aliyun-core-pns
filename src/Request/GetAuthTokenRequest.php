<?php
namespace luoyy\AliCore\Pns\Request;

use luoyy\AliCore\RpcAcsRequest;

/**
 * 调用GetAuthToken获取授权token用于H5本机号码校验的鉴权，返回结果包括AccessToken和JwtToken。
 * 说明 调用此接口之前，请您先完成阿里云账号注册，获取阿里云访问秘钥，创建认证方案。
 */
class GetAuthTokenRequest extends RpcAcsRequest
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
            'GetAuthToken',
            'dypns',
            'openAPI'
        );
    }

    /**
     * @param string $origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->requestParameters['Origin'] = $origin;
        $this->queryParameters['Origin'] = $origin;
        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->requestParameters['Url'] = $url;
        $this->queryParameters['Url'] = $url;
        return $this;
    }
}
