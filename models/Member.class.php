<?php 
    class Member extends DB{
        function getMember(){
            $query = "SELECT * from members";
            return $this->execute($query);
        }

        function getMemberById($id)
        {
            $query = "SELECT * FROM members WHERE id_member = $id";
            return $this->execute($query);
        }

        function add($data)
        {
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $join_date = date('Y-m-d'); // Tanggal saat ini

            $query = "INSERT INTO members VALUES ('', '$name', '$email', '$phone', '$join_date')";

            // Mengeksekusi query
            return $this->execute($query);
        }

        function delete($id)
        {

            $query = "DELETE FROM members WHERE id_member = '$id'";

            // Mengeksekusi query
            return $this->execute($query);
        }

        function update($data, $id)
        {

            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];

            $query = "UPDATE members SET name = '$name', email = '$email', phone = '$phone' WHERE id_member = '$id'";

            // Mengeksekusi query
            return $this->execute($query);
        }
    }
?>