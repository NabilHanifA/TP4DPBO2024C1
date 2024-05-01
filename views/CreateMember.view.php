<?php 
    class CreateMemberView
    {
        public function renderCreateMember(){

            $dataMember = null;
            $dataMember .= '<div class="card-header bg-primary">
                    <h1 class="text-white text-center">  Create New Member </h1>
                    </div><br>

                    <label> NAME: </label>
                    <input type="text" name="name" class="form-control" required> <br>

                    <label> EMAIL: </label>
                    <input type="email" name="email" class="form-control" required> <br>
                    
                    <label> PHONE: </label>
                    <input type="tel" name="phone" class="form-control" required> <br>';

            $dataMember .= '</select>
                    <br><button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                    <a class="btn btn-info" href="index.php"> Cancel </a><br>';
            $tpl = new Template("templates/create.html");
            $tpl->replace("CREATE_FORM", $dataMember);
    
            $tpl->write();
        }
            
    }
?>