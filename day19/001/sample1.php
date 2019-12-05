<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/5/2019
 * Time: 6:26 PM
 */
class Car {
    /**
     * Khai báo các thuộc tính bên trong class
     * Thuộc tính chỉ ra tính chất đặt điểm cho 1 đối tượng
     * thuộc tính tên, model , khối lượng, giá cả, năm sản xuất
     * nhà sản xuất
     * Thuộc tính ( property )
     */
    public $name;
    public $model;
    public $weight;
    public $price;
    public $year_publish;
    public $manufacture;
    /**
     * Khai báo các phương thức bên trong class
     * Phương thức ( method )
     * chỉ ra hành động cụ thể của 1 đối tượng
     * - khởi động
     * - lái xe
     * - dừng xe
     */
    public function start() {
        echo "<br> Khởi động xe";
    }
    public function drive() {
        echo "<br> Lái xe";
    }
    public function stop() {
        echo "<br> Dừng xe";
    }
}
// khởi tạo đối tượng từ class bằng từ khóa new
// Muốn truy cập đến thuộc tính $tên_đối_tương->tên_thuộc tính
// Chú ý tên thuộc tính sẽ không $
$mazda = new Car();
$mazda->name = "Mazda CX5";
$mazda->model = "CX5";
$mazda->weight = "1 tấn";
$mazda->price = 1200000000;
$mazda->year_publish = 2017;
$mazda->manufacture = "Mazda";
echo "<pre>";
print_r($mazda);
echo "</pre>";
// gọi đến 1 phương thức trong class
$mazda->start();
$mazda->drive();
$mazda->stop();