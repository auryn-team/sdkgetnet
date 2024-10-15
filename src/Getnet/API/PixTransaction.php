<?php
namespace Getnet\API;
/**
 * Class PixTransaction
 * @package Getnet\API
 */
class PixTransaction {

    /**
     * @var
     */
    private $amount;
    /**
     * @var
     */
    private $currency;
    /**
     * @var
     */
    private $order_id;
    /**
     * @var
     */
    private $customer_id;
    /**
     * @var
     */
    private $headers;


    /**
     * @return mixed
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount) {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getOrderId() {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id) {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getCustomerId() {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_id
     */
    public function setCustomerId($customer_id) {
        $this->customer_id = $customer_id;
    }

    /**
     * @return string
     */
    public function getHeaders() {
        return $this->headers;
    }

    /**
     * @param string $headers
     */
    public function setHeaders($headers) {
        $this->headers = $headers;
    }


    /**
     * @return string
     */
    public function toJSON() {

        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);

    }
}