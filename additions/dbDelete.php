<?php

class dbDelete extends database {

    function delete($key) {
        $sql = "delete from product where ID_SKU=$key";
        $result = $this->connect()->query($sql);
        return;
    }

    function truncate() {
        $sql = "truncate table product";
        $result = $this->connect()->query($sql);
        return;
    }
}