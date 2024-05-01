<?php 
    class EditMemberView
    {
        public function renderEditMember($data){
        $dataMember = null;
        $dataMember .= '<div class="card-header bg-primary">
                <h1 class="text-white text-center">  Edit Member </h1>
                </div><br>

                <input type="hidden" name="id" class="form-control" value="' . $data["members"]["id_member"] . '" required> <br>

                <label> NAME: </label>
                <input type="text" name="name" class="form-control" value="' . $data["members"]["name"] . '" required> <br>

                <label> EMAIL: </label>
                <input type="text" name="email" class="form-control" value="' . $data["members"]["email"] . '" required> <br>

                <label> PHONE: </label>
                <input type="text" name="phone" class="form-control" value="' . $data["members"]["phone"] . '" required> <br>';
        
                
        $dataMember .= '</select>
                <br><button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                <a class="btn btn-info" href="index.php"> Cancel </a><br>';
        
        $tpl = new Template("templates/create.html");
        $tpl->replace("CREATE_FORM", $dataMember);
        $tpl->write();
        }
    }
    
?>