<?php
class ReservationModel extends Model {
    function get($id) {
        //Query database
        $sql = "SELECT *
                FROM reservasi
                WHERE id=:id";
        $params = array(
            ':id' => $id
        );
        $result = null;
        try {
            $sth = $this->connection->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            $sth->execute($params);
            $result = $sth->fetch();
            $sth->closeCursor();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            exit();
        }
        if (!$result) {
            $result = new stdClass();
            $result->id = 0;
            $result->name = '';
            $result->date = '';
            $result->time = '';
            $result->phone_number = '';
            $result->number_reserve = '';
            $result->email = '';
            $result->special_note = '';
        }
        return $result;
    }

    function getAll() {
        //TODO: implementasi paging
        //TODO: implementasi filter

        //Query database
        $sql = "SELECT *
                FROM reservasi
                ORDER BY name";
        $params = array();
        $result = array();
        try {
            $sth = $this->connection->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            $sth->execute($params);
            while (($obj = $sth->fetch()) == true) {
                $result[] = $obj;
            }
            $sth->closeCursor();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            exit();
        }
        return $result;
    }

    function save($id) {
        $name = trim($_REQUEST['name']) ? $_REQUEST['name'] : '';
        $date= trim($_REQUEST['date']) ? $_REQUEST['date'] : '0000-00-00';
        $time = trim($_REQUEST['time']) ? $_REQUEST['time'] : '';
        $phone_number = trim($_REQUEST['phone_number']) ? $_REQUEST['phone_number'] : '';
        $number_reserve = trim($_REQUEST['number_reserve']) ? $_REQUEST['number_reserve'] : '';
        $email = trim($_REQUEST['email']) ? $_REQUEST['email'] : '';
        $special_note = trim($_REQUEST['special_note']) ? $_REQUEST['special_note'] : '';


        $error = array();

        //TODO: nim harus unik
        if (strlen($name) < 4) {
            $error[] = "Panjang nama harus lebih dari 4 karakter, harap diisi dengan nama lengkap anda";
        } 
                //Tanggal lahir berbeda format antara database Y-m-d dengan tampilan d-m-Y
                if ($date == '' || $date == '0000-00-00') {
                    $error[] = "Tanggal Lahir belum diisi";
                } else {
                    $date = date("Y-m-d", strtotime($date));
                }

                if ($time == '' || $time == '00-00') {
                    $error[] = "Tanggal Lahir belum diisi";
                }

        
        if (count($error) == 0) {
            if ($id == 0) {
                $sql = "INSERT INTO reservasi (
                            name, date, time, phone_number, number_reserve, email, special_note 
                        ) VALUES (
                            :name, :date, :time, :phone_number, :number_reserve, :email, :special_note
                        )";
                $params = array(
                    ':name' => $name,
                    ':date' => $date,
                    ':time' => $time,
                    ':phone_number' => $phone_number,
                    ':number_reserve' => $number_reserve,
                    ':email' => $email,
                    ':special_note' => $special_note,
                );
            } else {
                $sql = "UPDATE reservasi
                        SET name=:name, date=:date, time=:time, phone_number=:phone_number, number_reserve=:number_reserve, email=:email, special_note=:special_note 
                        WHERE id='".$id."'";
        $params = array(
            ':name' => $name,
            ':date' => $date,
            ':time' => $time,
            ':phone_number' => $phone_number,
            ':number_reserve' => $number_reserve,
            ':email' => $email,
            ':special_note' => $special_note,
        );
            }
            try {
                $sth = $this->connection->prepare($sql);
                $sth->setFetchMode(PDO::FETCH_OBJ);
                $sth->execute($params);
                $sth->closeCursor();

                $id = $this->connection->lastInsertId();
              
            } catch (PDOException $ex) {
                echo $ex->getMessage();
                exit();
            }
        }
        
        return $error;
    }
    function delete($id) {
        //Query database
        $sql = "DELETE
                FROM reservasi
                WHERE id=:id";
        $params = array(
            ':id' => $id
        );
        $rowCount = 0;
        try {
            $sth = $this->connection->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);
            $sth->execute($params);
            $rowCount = $sth->rowCount();
            $sth->closeCursor();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            exit();
        }
        return $rowCount;
    } 
}
?>


