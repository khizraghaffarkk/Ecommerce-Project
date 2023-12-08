<?php
 /*$conn=mysqli_connect("localhost","root","","authentication");
 
 if($conn){
     echo "Successfully Connected"."<hr>";
 }

echo $_POST['user-email'];*/
 class dbconn
{  
    public $dsn;
    public $username;
    public $password;
    private $db;
   function __construct()
   {  
    $this->dsn="mysql:host=localhost;dbname=webproject";
    $this->username="root";
    $this->password="";
    try
    {
      $this->db=new PDO($this->dsn,$this->username,$this->password);
      $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
      echo "Not Connected <br>";
      print "Database Problem: ". $e->getMessage();
    }
   }
   public function loaddata()
   {
    $sql="SELECT `Product_ID`, `Product_image`, `Product_color`, `Product_price` FROM `products` order by Product_ID ASC"; 
    //$sql="SELECT * FROM users";
    $result=$this->db->query($sql);
    return $result->fetchAll();
   }
   public function loaddata1()
   {
    $sqlm="SELECT `Makeup_ID`, `Makeup_image`, `Makeup_name`, `Makeup_price` FROM `makeup_products` order by Makeup_ID ASC"; 
    $resultm=$this->db->query($sqlm);
    return $resultm->fetchAll();
   }
   public function loaddata2()
   {
    $sqlsh="SELECT `Shoes_ID`, `Shoes_image`, `Shoes_des`, `Shoes_price` FROM `shoes_products` order by Shoes_ID ASC"; 
    $resultsho=$this->db->query($sqlsh);
    return $resultsho->fetchAll();
   }
   public function forView_cartData($value)
   {
    $sql1="SELECT * FROM `products` WHERE Product_ID='{$value}' "; 
    //$sql="SELECT * FROM users";
    $result=$this->db->query($sql1);
    return $result->fetch();
   }
   public function MakeupforView_cartData($valuemv)
   {
    $sqlmv="SELECT * FROM `makeup_products` WHERE Makeup_ID='{$valuemv}' "; 
    $resultmv=$this->db->query($sqlmv);
    return $resultmv->fetch();
   }
   public function ShoesforView_cartData($valuesh)
   {
    $sqlsho="SELECT * FROM `shoes_products` WHERE Shoes_ID='{$valuesh}' "; 
    $resultsho=$this->db->query($sqlsho);
    return $resultsho->fetch();
   }

   public function insertOrder($opr_id,$ord_qty,$price)
   {
     $ordersql="INSERT INTO `order_t`(`Product_ID`,`Order_Quantity`,`Order_Price`) VALUES (?,?,?)";
     $add=$this->db->prepare($ordersql);
     $add->execute(array($opr_id,$ord_qty,$price));
     return $add->rowCount();
   }
   

   public function MakeupinsertOrder($makeupopr_id,$makeupord_qty,$makeupprice)
   {
    $makeordersql="INSERT INTO `makeup_order_t`(`Makeup_ID`,`Order_Quantity`,`Order_Price`) VALUES (?,?,?)";
    $makeadd=$this->db->prepare($makeordersql);
    $makeadd->execute(array($makeupopr_id,$makeupord_qty,$makeupprice));
    return $makeadd->rowCount();
   }
   public function ShoesinsertOrder($shoesopr_id,$shoesord_qty,$shoesprice)
   {
     $ordersql="INSERT INTO `shoes_order_t`(`Shoes_ID`,`Order_Quantity`,`Order_Price`) VALUES (?,?,?)";
     $add=$this->db->prepare($ordersql);
     $add->execute(array($shoesopr_id,$shoesord_qty,$shoesprice));
     return $add->rowCount();
   }

   public function insertemail($user_email)
    {
      
      $sql1="INSERT INTO email_t (user_email) VALUES (?)";
      $add_row=$this->db->prepare($sql1);
      $add_row->execute(array($user_email));
      return $add_row->rowCount();
    }
    
  //  public function deleteorder($del_o)
  //  {
     
  //    $sql4="DELETE FROM order_t WHERE Order_ID=:Order_ID";
  //    $del_row=$this->db->prepare($sql4);
  //    $del_row->bindParam(':Order_ID',$Order_ID,PDO::PARAM_INT);
  //    $Order_ID=$del_o;
  //    $del_row->execute();
     
  //    return $del_row->rowCount();
     
  //  }

  
    /*public function selectUser($usr_id_for_select)
    {
      
    $sql2="SELECT FROM users WHERE user_id= :user_id ";
     
    $result=$this->db->prepare($sql2);
    $result->bindParam(':user_id',$user_id,PDO::PARAM_INT);
    $user_id=$usr_id_for_select;
    #$result->execute();
    return $result->fetch(PDO::FETCH_ASSOC);
    }*/

    /*public function updatedata($first_usr,$sec_em,$third_pass)
    {
      $sql2="UPDATE users SET Username='$first_usr', Email='$sec_em', Password='$third_pass' WHERE user_id=:user_id";
      $update_row=$this->db->prepare($sql2);
      $update_row->execute(array($first_usr,$sec_em,$third_pass));
      return $update_row->rowCount();
    }*/
    /*public function authUser($userarray)
    {
      /*$query="SELECT user_id from users WHERE Username=? and Password=?";
      $prepared=$this->db->prepare($query);
      $res=$prepared->execute($userarray);
      return $res->fetchAll();*/
      /*$st=$this->db->prepare("SELECT user_id from users WHERE Username=? and Password=?");
      $st->execute($userarray);
      if ($st->rowCount() >0)
      {
        $row=$st->fetch();
        //echo "Cou: ".$st->rowCount();
        return $row[0];
      }
      else
      {
        return false;
      }
    }
 
    // echo $_POST['user-email'];
    // public function insertdata($name,$food,$enter_by)
    // {
      
    //   $sql2="INSERT INTO bird_detail (Bird_name,Food,Entered_by) VALUES (?,?,?)";
    //   $add_row=$this->db->prepare($sql2);
    //   $add_row->execute(array($name,$food,$enter_by));
    //   return $add_row->rowCount();
    // }

   
}

   $db=new dbconn();*/
   
}
?>