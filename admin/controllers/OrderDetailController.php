<?php

class OrderDetailController {
  public function getDetail() {
    try {
        $OrderDetailModel = new OrderDetailModel();
        $resultInfoUserOrder = $OrderDetailModel->getInfoUserOrder(1);
        $resultInfoOrder = $OrderDetailModel->getInfoOrder(1);
        $resultAllProducts = $OrderDetailModel->getAllProducts();
        $resultTotalPrice = $OrderDetailModel->getTotalPrice();
        $listStatusOrder = $OrderDetailModel->getAllStatusOrder();

        $resultDiscount = 0.1;

        $resultTotalMoneyFinal = $resultTotalPrice['tong_tien'] - ($resultTotalPrice['tong_tien'] * $resultDiscount);

        require_once "./views/orderDetail/listOrderDetail.php";
      } catch (\Throwable $th) {
        throw $th;
      }
  }

  public function editDetail() {
    try {
        $OrderDetailModel = new OrderDetailModel();
        if (isset($_POST["save"]) && $_POST["save"]) {
          $status = $_POST["status"];
          $id = $_POST["id"];
          $result = $OrderDetailModel->updateDetailOrder($status, $id);
        }
        header("Location: http://localhost/seven-store/admin/");
      } catch (\Throwable $th) {
        throw $th;
      }
  }
}