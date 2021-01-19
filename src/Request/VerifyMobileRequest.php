<?php
namespace luoyy\AliCore\Pns\Request;

use luoyy\AliCore\RpcAcsRequest;

/**
 * 调用VerifyMobile完成本机号码校验认证。
 */
class VerifyMobileRequest extends RpcAcsRequest
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
            'VerifyMobile',
            'dypns',
            'openAPI'
        );
    }

    /**
     * @param string $access_code
     *
     * @return $this
     */
    public function setAccessCode($access_code)
    {
        $this->requestParameters['AccessCode'] = $access_code;
        $this->queryParameters['AccessCode'] = $access_code;
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
