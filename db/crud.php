<?php
    class crud{
      private $db;

      function __construct($conn){
        $this->db = $conn;
      }

      public function insert($fname,$lname,$dob,$email,$pass,$contact,$specialty_id,$profile){
        try{
          $sql = "INSERT INTO `attend`(`firstname`, `lastname`, `dob`, `email`, `pass`, `contact`, `specialty_id`,`profile`) VALUES (:fname,:lname,:dob,:email,:pass,:contact,:specialty,:profile)";
          $stmt = $this->db->prepare($sql);
          // bind each value
         
          $stmt->bindparam(':fname',$fname);
          $stmt->bindparam(':lname',$lname);
          $stmt->bindparam(':dob',$dob);
          $stmt->bindparam(':email',$email);
          $stmt->bindparam(':pass',$pass);
          $stmt->bindparam(':contact',$contact);
          $stmt->bindparam(':specialty',$specialty_id);
          $stmt->bindparam(':profile',$profile);

          // excute the query
          $stmt->execute();
          return true;

        }
        catch(PDOException $e){
          echo $e->getMessage();
          return false;

        }

      }

    public function update($id,$firstname,$lastname,$dob,$email,$pass,$specialty_id,$contact,$profile){
      try{
        $sql = "UPDATE `attend` set firstname=:firstname,lastname=:lastname,dob=:dob,email=:email,
                pass=:pass,specialty_id=:specialty_id,contact=:contact,profile=:profile WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':firstname',$firstname);
        $stmt->bindparam(':lastname',$lastname);
        $stmt->bindparam(':dob',$dob);
        $stmt->bindparam(':email',$email);
        $stmt->bindparam(':pass',$pass);
        $stmt->bindparam(':specialty_id',$specialty_id);
        $stmt->bindparam(':contact',$contact);
        $stmt->bindparam(':profile',$profile);

        $stmt->execute();
        return true;
      }
      catch(PDOException $e){
        echo $e->getMessage();
        return false;

      }
    }
    public function delete($id){
      try{
        $sql = "DELETE FROM `attend` where attendee_id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        return true;
    }
      catch(PDOException $e){
        echo $e->getMessage();
        return false;

    }
    }

      public function getAttendee(){
        try{

    
          $sql = "SELECT * FROM `attend` a inner join `specialties` s on a.specialty_id=s.specialty_id";
          $result = $this->db->query($sql);
          return $result;
        }
        catch(PDOException $e){
          echo $e->getMessage();
          return false;

        }

      }
      public function getSpecialty(){
        try{
 
          $sql = "SELECT * FROM `specialties`";
          $result = $this->db->query($sql);
          return $result;
        }
        catch(PDOException $e){
          echo $e->getMessage();
          return false;

        }

      }

      public function getSpecialtyById($id){
        try{
 
          $sql = "SELECT * FROM `specialties` WHERE specialty_id=:id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(':id',$id);
          $stmt->execute();
          $result = $stmt->fetch();
          return $result;
        }
        catch(PDOException $e){
          echo $e->getMessage();
          return false;

        }

      }

      public function viewOne($id){
        try{
    
          $sql = "SELECT * FROM `attend` a inner join `specialties` s on a.specialty_id=s.specialty_id  WHERE `attendee_id` = :id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(':id',$id);
          $stmt->execute(); 
          $result = $stmt->fetch(); 
          return $result;
        }
        catch(PDOException $e){
          echo $e->getMessage();
          return false;

        }

      }
      public function search($searchVal){
        try{

          $sql = "SELECT * FROM `attend` WHERE `firstname` OR `lastname`  LIKE '%$searchVal%'";
          $result = $this->db->query($sql);
          return $result;
        }
        catch(PDOException $e){
          echo $e->getMessage();
          return false;

        }

      }


    }

?>