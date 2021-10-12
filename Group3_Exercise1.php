<html>
    <head>
        <title>Exercise 1 Group 3</title>
    </head>

    <body>
        <h1>Exercise 1 Group 3</h1>
        <?php

        #Abstraction
        abstract class Admin{

            #override $val parent class
            public $val = "admin";
            public abstract function view();
        }

        #Inheritance
        class Property extends Admin{

            #override $val child class
            public $val = "property";

            private $propertyName;
            private $propertyDescription;
            private $propertyLocation;
            private $propertyLotArea;
            private $propertyType;
            private $propertyPrice;
            private $propertyLot = array();
            public function view(){
                for($i = 0; $i<count($this->propertyLot); $i++){
                    print_r($this->propertyLot[$i] . "<br/>");
                }
            }
            public function createProperty($property){
                $this->propertyLot[] = $property;
        }
            public function setPropertyValues($name, $location, $price, $description, $lotArea, $pType){
                $this->propertyName = $name;
                $this->propertyLocation = $location;
                $this->propertyPrice = $price;
                $this->propertyDescription = $description;
                $this->propertyLotArea = $lotArea;
                $this->propertyType = $pType;
            }
        
            public function addProperty(){
                $newProperty = "Name: ". $this->propertyName . "<br/>" ."Description: ". $this->propertyDescription . "<br/>" ." location: ". $this->propertyLocation .  "<br/>" ."Lot Area: ". $this->propertyLotArea . "<br/>" . "Type: ". $this->propertyType . "<br/>" ." price: ". $this->propertyPrice ."<br/>";
                $this->createProperty($newProperty);
            }
            }
            $miguel = new Property();
            $miguel->setPropertyValues('House in Greenheights', 'Sucat Paranaque', '9 million', 'This is a 7 yr old house', '25 sqm', 'Townhouse');
            $miguel->addProperty();
            $miguel->setPropertyValues('House in Twinville', 'Marikina', '10 million', 'This is a 57 yr old house', '225 sqm', 'Mansion');
            $miguel->addProperty();
            $miguel->view();

            #override print
            echo $miguel->val . '<br>';
            echo $firstHouse->val . '<br>';
            

               
        ?>
    </body>
</html>