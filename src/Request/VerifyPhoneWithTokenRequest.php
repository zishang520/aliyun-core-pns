<?php
namespace luoyy\AliCore\Pns\Request;

use luoyy\AliCore\RpcAcsRequest;

/**
 * 调用VerifyPhoneWithToken完成H5本机号码校验。
 */
class VerifyPhoneWithTokenRequest extends RpcAcsRequest
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
            'VerifyPhoneWithToken',
            'dypns',
            'openAPI'
        );
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
     * @param string $sp_token
     *
     * @return $this
     */
    public function setSpToken($sp_token)
    {
        $this->requestParameters['SpToken'] = $sp_token;
        $this->queryParameters['SpToken'] = $sp_token;
        return $this;
    }
}
