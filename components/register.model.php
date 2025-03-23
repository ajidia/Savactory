<?php
class RegisterModel extends Model {
    function get($id) {
        //Query database
        $sql = "SELECT *
                FROM pengguna
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
            $result->username = '';
            $result->password = '';
            $result->name = '';
            $result->email = '';
            $result->phone_number = '';
        }
        return $result;
    }

    function getAll() {
        //TODO: implementasi paging
        //TODO: implementasi filter

        //Query database
        $sql = "SELECT *
                FROM pengguna
                ORDER BY username";
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
        $username = trim($_REQUEST['username']) ? $_REQUEST['username'] : '';
        $password = trim($_REQUEST['password']) ? $_REQUEST['password'] : '';
        $name = trim($_REQUEST['name']) ? $_REQUEST['name'] : '';
        $email = trim($_REQUEST['email']) ? $_REQUEST['email'] : '';
        $phone_number = trim($_REQUEST['phone_number']) ? $_REQUEST['phone_number'] : '';


        $error = array();

        //TODO: nim harus unik
        if (strlen($username) < 4) {
            $error[] = "Panjang username harus lebih dari 4 karakter";
        } elseif (strlen($password) < 8) {
                $error[] = "Panjang password harus lebih dari 8 karakter";
        }


        $password = md5($password);

        
        if (count($error) == 0) {
            if ($id == 0) {
                $sql = "INSERT INTO pengguna (
                            username, password, name, email, phone_number
                        ) VALUES (
                            :username, :password, :name, :email, :phone_number
                        )";
                $params = array(
                    ':username' => $username,
                    ':password' => $password,
                    ':name' => $name,
                    ':email' => $email,
                    ':phone_number' => $phone_number
                );
            } else {
                $sql = "INSERT INTO pengguna (
                            username, password, name, email, phone_number
                        ) VALUES (
                            :username, :password, :name, :email, :phone_number
                        )";
                $params = array(
                    ':username' => $username,
                    ':password' => $password,
                    ':name' => $name,
                    ':email' => $email,
                    ':phone_number' => $phone_number
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
            echo '<script language="javascript">
            alert ("Registrasi Berhasil Di Lakukan!");
            window.location="login.php";
            </script>';
            exit();
        }
        
        return $error;
        
                    
    }
}
?>
