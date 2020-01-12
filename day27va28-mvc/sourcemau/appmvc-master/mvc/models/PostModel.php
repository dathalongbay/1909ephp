<?php
namespace MVC\Models;

class PostModel extends Database {


    public function getAll() {

        $sqlSelect = "SELECT * FROM posts_table";
        /**
         * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
         * tham số 1 chính là biến kết nối CSDL $connection
         * tham số 2 chính là câu query sql
         */
        $result = mysqli_query($this->connection, $sqlSelect);

        return $result;
    }


    public function getSingle($employee_id = 0) {

        $sqlSelect = "SELECT * FROM posts_table WHERE id = " . $employee_id;

        $result = mysqli_query($this->connection, $sqlSelect);

        $row = mysqli_fetch_assoc($result);

        return $row;
    }


    public function store($data) {

        $name = $data["name"];
        $address = $data["desc"];
        $salary = (int)$data["view"];

        if (empty($name) || empty($address)) {
            return false;
        }

        $sqlInsert = "INSERT INTO posts_table (name, desc, view) VALUES ('$name', '$address', $salary)";

        if (mysqli_query($this->connection, $sqlInsert)) {
            return true;
        }

        return false;
    }

    public function update($data) {

        $name = $data['name'];
        $address = $data['desc'];
        $salary = (int)$data['view'];
        $id = (int)$data['id'];

        if (empty($name) || empty($address)) {
            return false;
        }

        $sql = "UPDATE posts_table SET name='$name',desc='$address',view=$salary WHERE id = " . (int) $id;

        echo $sql;
        if (mysqli_query($this->connection, $sql)) {
            echo "Update thanh cong";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php');
            exit;
        } else {
            return false;
        }
    }


    public function delete($id) {

        $sqlDelete = "DELETE FROM posts_table WHERE id = $id";
        if (mysqli_query($this->connection, $sqlDelete)) {
            return true;
        }

        return false;

    }
}