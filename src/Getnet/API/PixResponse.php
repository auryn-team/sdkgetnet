<?php

namespace Getnet\API;

class PixResponse extends BaseResponse {
    
    public $payment_id;
    public $status;
    public $description;
    public $transaction_id;
    public $qr_code;
    public $creation_date_qrcode;
    public $expiration_date_qrcode;
    public $psp_code;

    /**
     * @return mixed
     */
    public function getPaymentId() {
        return $this->payment_id; 
    }

    /**
     * @param mixed $payment_id
     * @return PixResponse
     */
    public function setPaymentId($payment_id) {
        $this->payment_id = $payment_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return PixResponse
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return PixResponse
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTransactionId() {
        return $this->transaction_id;
    }

    /**
     * @param mixed $transaction_id
     * @return PixResponse
     */
    public function setTransactionId($transaction_id) {
        $this->transaction_id = $transaction_id;
    }

    /**
     * @return mixed
     */
    public function getQrCode() {
        return $this->qr_code;
    }

    /**
     * @param mixed $qr_code
     * @return PixResponse
     */
    public function setQrCode($qr_code) {
        $this->qr_code = $qr_code;
    }

    /**
     * @return mixed
     */
    public function getCreationDateQrCode() {
        return $this->creation_date_qrcode;
    }

    /**
     * @param mixed $creation_date_qrcode
     * @return PixResponse
     */
    public function setCreationDateQrCode($creation_date_qrcode) {
        $this->creation_date_qrcode = $creation_date_qrcode;
    }

    /**
     * @return mixed
     */
    public function getExpirationDateQrCode() {
        return $this->expiration_date_qrcode;
    }

    /**
     * @param mixed $expiration_date_qrcode
     * @return PixResponse
     */
    public function setExpirationDateQrCode($expiration_date_qrcode) {
        $this->expiration_date_qrcode = $expiration_date_qrcode;
    }

    /**
     * @return mixed
     */
    public function getPspCode() {
        return $this->psp_code;
    }

    /**
     * @param mixed $psp_code
     * @return PixResponse
     */
    public function setPspCode($psp_code) {
        $this->psp_code = $psp_code;
    }

    /**
     * @return mixed
     */
    public function getIdEmpotencyKey() {
        return $this->psp_code;
    }

    /**
     * @param mixed $idempotency_key
     * @return PixResponse
     */
    public function setIdEmpotencyKey($psp_code) {
        $this->psp_code = $psp_code;
    }
}