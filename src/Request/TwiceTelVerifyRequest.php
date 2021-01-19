<?php
namespace luoyy\AliCore\Pns\Request;

use luoyy\AliCore\RpcAcsRequest;

/**
 * 调用TwiceTelVerify完成两次电话验证(文档都没有，md)
 */
class TwiceTelVerifyRequest extends RpcAcsRequest
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
            'TwiceTelVerify',
            'dypns',
            'openAPI'
        );
    }

    /**
     * @param string $since
     *
     * @return $this
     */
    public function setSince($since)
    {
        $this->requestParameters['Since'] = $since;
        $this->queryParameters['Since'] = $since;
        return $this;
    }

    /**
     * @param string $phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->requestParameters['PhoneNumber'] = $phone_number;
        $this->queryParameters['PhoneNumber'] = $phone_number;
        return $this;
    }
}
