<html>
    <head>
        <title>Exercise 1 Group 3</title>
    </head>

    <body>
        <h1>Exercise 1 Group 3</h1>
        <?php
        class Property{
            private $propertyLot = array();

            public function getProperty(){
                for($i = 0; $i<count($this->propertyLot); $i++){
                    print_r($this->propertyLot[$i] . "<br/>");
                }
            }
            public function setProperty($property){
                $this->propertyLot[] = $property;
        }
        }

        class Unit extends Property{
            private $propertyName;
            private $propertyLocation;
            private $propertyPrice;

            public function setThree($name, $location, $price){
                $this->propertyName = $name;
                $this->propertyLocation = $location;
                $this->propertyPrice = $price;
            }
            public function addProperty(){
                $newProperty = "Name: ". $this->propertyName . " location: ". $this->propertyLocation . " price: ". $this->propertyPrice;
                $this->setProperty($newProperty);
            }
            }
            $miguel = new Unit();
            $miguel->setThree('House in Paranaque', 'Paranaque', '8.5 mill');
            $miguel->addProperty();
            $miguel->setThree('House in QC', 'QC', '8.8 mill');
            $miguel->addProperty();
            $miguel->getProperty();
    

        ?>
    </body>
</html>