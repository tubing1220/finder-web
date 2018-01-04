<?php
namespace App\Lib\Model;


class TestModel extends BaseModel {


    public $id;
    public $student;


    public function test() {

        $pdo = $this->app->getContainer()->db;
        $sql = "SELECT * FROM test";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute()) {
            $r = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            $r = 0;
        }

        return $r;


    }


}