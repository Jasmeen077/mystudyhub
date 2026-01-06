<?php
include "../admin/dashboard/config/Config.php";

class Base extends Config
{
    //register admin 
    public function registerAdmin($table, $params = [])
    {
        $name = $params['name'];
        $email = $params['email'];

        if (empty($name) || empty($email)) {
            return false;
        }

        $checkduplicate = "SELECT id FROM $table WHERE email = '$email'";
        $result = $this->conn->query($checkduplicate);

        if ($result->num_rows > 0) {
            return false;
        }

        $columnKeys = implode(",", array_keys($params));
        $columnValues = implode("','", array_values($params));

        $sql = "INSERT INTO $table($columnKeys) VALUES ('$columnValues')";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    // login admin
    public function loginAdmin($email, $password)
    {
        if(empty($email) || empty($password))
        {
            return false;
        }
        
        $stmt = $this->conn->prepare("SELECT * FROM admin WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                return $row;
            }
        }
        return false;
    }

    //add about 

}
