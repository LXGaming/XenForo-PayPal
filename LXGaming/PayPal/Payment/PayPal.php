<?php

namespace LXGaming\PayPal\Payment;

use XF\Entity\PurchaseRequest;
use XF\Purchasable\Purchase;

class PayPal extends XFCP_PayPal {

    protected function getPaymentParams(PurchaseRequest $purchaseRequest, Purchase $purchase) {
        $params = parent::getPaymentParams($purchaseRequest, $purchase);
        $params["cmd"] = "_donations";
        return $params;
    }
}
