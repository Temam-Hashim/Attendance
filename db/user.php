<?php
  class user{
    private $db;

    function __construct($conn){
      $this->db = $conn;
    } 
    public function insertUser($username,$pass){
      try
      {
        //insert only unique username
        $usercount = $this->getUserByUsername($username);
        if($usercount['num'] > 0){
          return false;
        }
        else{
            $new_password = md5($pass.$username);
            $sql = "INSERT INTO `user`(`username`, `pass`) VALUES (:username,:pass)";
            $stmt = $this->db->prepare($sql);
            // bind each value
            $stmt->bindparam(':username',$username);
            $stmt->bindparam(':pass',$new_password);
            // excute the query
            $stmt->execute();
            return true;
          }

      }
      catch(PDOException $e){
        echo $e->getMessage();
        return false;

      }

    }
    public function getUser($username,$pass){
        try{
    
                
            $sql = "SELECT * FROM `user` WHERE username=:username AND pass=:pass";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username',$username);
            $stmt->bindparam(':pass',$pass);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }
        catch(PDOException $e){
          echo $e->getMessage();
          return false;

        }

      }

    public function getUserByUsername($username){
      try{

    
        $sql = "SELECT count(*) AS num FROM `user` WHERE username=:username";
        $stmt = $this->db->prepare($sql);
        //bind parameter
        $stmt->bindparam(':username',$username);
        //excuete stmnt
        $stmt->execute();
        //fetch into result
        $result = $stmt->fetch();
        // return the result
        return $result;
      }
      catch(PDOException $e){
        echo $e->getMessage();
        return false;

      }

    }
    public function updatePassword($username,$pass){
      try{
        
        $sql = "UPDATE `user` set pass=:pass where username=:username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username',$username);
        $stmt->bindparam(':pass',$pass);
        $stmt->execute();
        return true;


      }
      catch(PDOException $e){
        echo $e->getMessage();
        return false;

      }

    }
}
?>