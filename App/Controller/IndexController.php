<?php

class IndexController extends AppController {

    private $_premium;
    private $_model;

    public function index() {
        $args = array(
            'title' => 'Insurance - Home'
        );
        $this->render('index/index', $args);
    }

    public function check() {
        extract($_POST);
        $this->_model = $this->loadModel('Amount');
        $premium = $this->_model->getAmount($amount);
        $this->_premium = (int)$premium[0]->value;
        echo $this->_calculate($this->_premium, $payment, $vehicleCondition);
    }
    private function _calculate($base, $payment, $vehicleCondition){
        $discount = $this->_model->getDiscount($payment, $vehicleCondition);
        $result = $base;
        for($i=0;$i<count($discount);$i++){
            $result *= (float)$discount[$i]->value;
        }
        return number_format(ceil($result),2);
        
    }

}

?>
