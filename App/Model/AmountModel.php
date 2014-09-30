<?php

class AmountModel extends AppModel {

    public function getAmount($amount) {
        $output = array();
        $handler = $this->getDbObject();
        $result = $handler->query("SELECT value FROM Amount WHERE {$amount} BETWEEN bottom AND top");
        while ($row = $result->fetch_object()) {
            $output[] = $row;
        }
        return $output;
    }

    public function getDiscount($payment, $vehicleCondition) {
        $output = array();
        $handler = $this->getDbObject();
        $result = $handler->query("SELECT value FROM Discounts WHERE name = '{$payment}' OR name = '{$vehicleCondition}'");
        while ($row = $result->fetch_object()) {
            $output[] = $row;
        }
        return $output;
    }

}

?>
