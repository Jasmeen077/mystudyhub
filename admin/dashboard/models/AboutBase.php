<?php
include_once __DIR__ . '/../config/Config.php';

class AboutBase extends Config
{
    // Add or update about
    public function About($table, $params = [], $where = [], $file = [])
    {
        if (!isset($params['title']) || empty($params['title'])) {
            return false;
        }
        if (!isset($params['heading']) || empty($params['heading'])) {
            return false;
        }
        if (!isset($params['description']) || empty($params['description'])) {
            return false;
        }

        if (!empty($file['name']) && !empty($file['tmp_name'])) {
            $imageName = $file['name'];
            $path = "../uploads/" . $imageName;
            if (move_uploaded_file($file['tmp_name'], $path)) {
                $params['image_url'] = $imageName;
            }
        }

        // Step 3: Escape string values
        foreach ($params as $key => $value) {
            if (is_string($value)) {
                $params[$key] = $this->conn->real_escape_string($value);
            }
        }

        $whereClause = '';
        if (!empty($where) && is_array($where)) {
            $whereParts = [];
            foreach ($where as $condition) {
                foreach ($condition as $key => $value) {
                    $value = $this->conn->real_escape_string($value);
                    $whereParts[] = "$key='$value'";
                }
            }
            $whereClause = implode(" AND ", $whereParts);
        }

        $rowExists = false;
        if (!empty($whereClause)) {
            $checksql = "SELECT * FROM $table WHERE $whereClause";
            $result = $this->conn->query($checksql);

            if ($result && $result->num_rows > 0) {
                $rowExists = true;
            }
        }

        // Step 6: Update if exists
        if ($rowExists) {
            $updateFields = [];
            foreach ($params as $key => $value) {
                $updateFields[] = "$key='$value'";
            }

            $sql = "UPDATE $table SET " . implode(", ", $updateFields);
            if (!empty($whereClause)) {
                $sql .= " WHERE " . $whereClause;
            }

            return $this->conn->query($sql) ? true : false;
        } else {
            // Step 7: Insert new row
            $columns = implode(",", array_keys($params));
            $values = implode("','", $params);

            $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
            return $this->conn->query($sql) ? true : false;
        }
    }



    //get about data 
    public function getData($table, $columns = [], $condition = [])
    {
        // Columns
        if (!empty($columns)) {
            $col = implode(",", $columns);
        } else {
            $col = "*";
        }

        // Base query
        $sql = "SELECT $col FROM $table";

        // Conditions
        if (!empty($condition)) {
            $sql .= " WHERE " . implode(" AND ", $condition);
        }

        // Execute query
        $result = $this->conn->query($sql);

        // Result
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    //add categories
    public function addCategories($table, $params = [])
    {
        if (!isset($params['name']) || empty($params['name'])) {
            return false;
        }

        $columns = implode(",", array_keys($params));
        $values = implode("','", array_values($params));

        $sql = "INSERT INTO $table($columns) VALUES('$values')";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    //add notes
    public function addNotes($table, $params = [], $image = [], $pdf = [])
    {
        $required = ['chapter_name', 'topic_name', 'short_explanation', 'text_notes', 'cid', 'sid'];

        foreach ($required as $field) {
            if (empty($params[$field])) {
                return false;
            }
        }

        if (!empty($image['name']) && !empty($image['tmp_name'])) {
            $imageName = $image['name'];
            $imagePath = "../uploads/notes/" . $imageName;

            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                $params['image_url'] = $imageName;
            } else {
                return false;
            }
        }

        if (!empty($pdf['name']) && !empty($pdf['tmp_name'])) {
            $pdfName = $pdf['name'];
            $pdfPath = "../uploads/pdf/" . $pdfName;

            if (move_uploaded_file($pdf['tmp_name'], $pdfPath)) {
                $params['pdf'] = $pdfName;
            } else {
                return false;
            }
        } else {
            return false;
        }

        foreach ($params as $key => $value) {
            if (is_string($value)) {
                $params[$key] = $this->conn->real_escape_string($value);
            }
        }

        $columns = implode(",", array_keys($params));
        $values  = implode("','", array_values($params));

        $sql = "INSERT INTO $table ($columns) VALUES ('$values')";

        return $this->conn->query($sql);
    }


    //get categories
    public function getAllData($table, $params = [], $where = [])
    {
        // Columns
        if (!empty($params)) {
            $col = implode(", ", $params);
        } else {
            $col = "*";
        }

        // Base query
        $sql = "SELECT $col FROM $table";

        // WHERE condition
        if (!empty($where)) {
            $conditions = [];
            foreach ($where as $key => $value) {
                $conditions[] = "$key = '$value'";
            }
            $sql .= " WHERE " . implode(" AND ", $conditions);
        }

        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    // get name by id 
    public function getNames()
    {

        $query = "
        SELECT 
            n.chapter_name,
            n.topic_name,
            s.name,
            c.name AS classroom
        FROM notes n
        LEFT JOIN subjects s ON n.sid = s.id
        LEFT JOIN classrooms c ON n.cid = c.id
    ";


        $result = $this->conn->query($query);

        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }

    //submit contact 
    public function addContact($table, $params = [])
    {
        $name = $params['name'];
        $email = $params['email'];
        $address = $params['address'];
        $city = $params['city'];

        if (empty($name) || empty($email) || empty($address) || empty($city)) {
            return false;
        }

        // seperate columns and keys
        $columns = implode(",", array_keys($params));
        $value = implode("','", array_values($params));

        $sql = "INSERT INTO $table($columns) VALUES('$value')";
        $result = $this->conn->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
