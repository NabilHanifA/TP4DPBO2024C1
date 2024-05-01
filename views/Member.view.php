<?php 
    class MemberView{
        public function render($data){
            $no = 1;
            $dataMember = null;
            foreach($data['member'] as $val){
                list($id, $name, $email, $phone, $join_date) = $val;
                $dataMember .= "<tr>
                <th>" . $no++ . "</th>
                <td>" . $name . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . $join_date . "</td>
                <td>
                          <a class='btn btn-success' href='editMember.php?id_edit=" . $id ."'>Edit</a>
                          <a class='btn btn-danger' href='index.php?id_hapus=" . $id ."'>Delete</a>
                        </td>
              </tr>";
            }
            $tpl = new Template("templates/index.html");
            $tpl->replace("DATA_TABEL", $dataMember);
            $tpl->write(); 
        }
    }

?>