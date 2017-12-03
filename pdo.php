connection :

try {

       $this->con = new PDO("mysql:host=$this->host;dbname=$this->databasename", $this->username, $this->password);

       // set the PDO error mode to exception

       $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       echo "Connected successfully"; 

     }
     
catch(PDOException $e) {

      echo "Connection failed: " . $e->getMessage();

 }


_________________________________________



Insert :->


$object = new webapps;
  
$insert="insert into comments values('','$name','$comment',CURRENT_TIMESTAMP)";

$object->insert($insert);
  
  
--------
  
public function insert($insert){

    $insert = $this->con->exec($insert);

}




_____________________________________


View :


  $select = "select * from table where name='$name'";
  
  $select1 = $object->select($select);
  
  $select1->execute();		// for work this in foreach
  
  $result = $select1->fetchAll();
  
  foreach($result as $row){ ?>
	  
	<?php echo $row['name']?>
			
  <?php
  
  }
  
  --------
  
  public function select($select){
  
       $select = $this->con->prepare($select);
       return $select;
       
 }