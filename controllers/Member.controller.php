<?php 
include_once("conf.php");
include_once("models/Member.class.php");
include_once("views/Member.view.php");
include_once("views/CreateMember.view.php");
include_once("views/EditMember.view.php");

class MemberController
{
    private $members;

    function __construct(){
        $this->members = new Member(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function readMember(){
        $this->members->open();
        $this->members->getMember();

        $data = array(
            'member' => array()
        );

        while ($row = $this->members->getResult()) {
            array_push($data['member'], $row);
        }

        $this->members->close();
        $view = new MemberView();
        $view->render($data);
    }

    public function createMember(){
        $view = new CreateMemberView();
        $view->renderCreateMember();
    }

    public function editMember($id){
        $this->members->open();
        $this->members->getMember();
        $this->members->getMemberById($id);


        $data['members'] = $this->members->getResult();
        
        $this->members->close();

        $view = new EditMemberView();
        $view->renderEditMember($data);
    }
    
    function delete($id){
        $this->members->open();
        $this->members->delete($id);
        $this->members->close();

        header("location:index.php");
    }

    function update($data, $id)
    {
        $this->members->open();
        $this->members->update($data, $id);
        $this->members->close();

        header("location:index.php");
    }

    function add($data)
    {
        $this->members->open();
        $this->members->add($data);
        $this->members->close();

        header("location:index.php");
    }
}

?>