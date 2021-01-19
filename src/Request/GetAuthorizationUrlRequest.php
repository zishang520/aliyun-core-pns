<?php
namespace luoyy\AliCore\Pns\Request;

use luoyy\AliCore\RpcAcsRequest;

/**
 * 调用GetAuthorizationUrl获取支付宝授权链接。
 */
class GetAuthorizationUrlRequest extends RpcAcsRequest
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
            'GetAuthorizationUrl',
            'dypns',
            'openAPI'
        );
    }

    /**
     * @param string $phone_no
     *
     * @return $this
     */
    public function setPhoneNo($phone_no)
    {
        $this->requestParameters['PhoneNo'] = $phone_no;
        $this->queryParameters['PhoneNo'] = $phone_no;
        return $this;
    }

    /**
     * @param int $scheme_id
     *
     * @return $this
     */
    public function setSchemeId($scheme_id)
    {
        $this->requestParameters['SchemeId'] = $scheme_id;
        $this->queryParameters['SchemeId'] = $scheme_id;
        return $this;
    }

    /**
     * @param string $end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->requestParameters['EndDate'] = $end_date;
        $this->queryParameters['EndDate'] = $end_date;
        return $this;
    }
}
