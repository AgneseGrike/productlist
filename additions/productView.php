<?php 

class productView extends productDB {

    public function outputProducts() {
        $datas = $this->getProducts();
        if ($datas != 0) {
            foreach ($datas as $data) {
                echo "<tr><td><input type='checkbox' class='selectOne' name='selectOne[{$data['ID_SKU']}]'</td>";
                echo "<td>" . $data['ID_SKU'] . "</td><td>" . $data['sku'] . "</td><td>" . $data['name'] . "</td><td>" . $data['price'] . "</td><td>" . $data['type'] . "</td><td>" . $data['value'] . "</td><tr>";
            }
        }
    }
}