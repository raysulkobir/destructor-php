<?php include "inc/header.php";?>
    
    <div class="para">
      <?php
        class person{
            public $name;
            public  $age;
            public  $id;
            
            public function __construct($name,$age) {
            $this->name=$name;
            $this->age=$age;
            }
            
            function sesId($id){
                $this->id=$id;
            }
            
            function __destruct(){
                if(! empty($this->id)){
                    echo "Saving person";
                }
            }
        }
        
        $personOne = new person("Md.Raysul kobir", "20");
        $personOne->sesId(12);
        unset($personOne);
      ?>
       
    </div>
<?php include "inc/footer.php"; ?>