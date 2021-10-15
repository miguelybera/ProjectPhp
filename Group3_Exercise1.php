<html>

<head>
    <title>Exercise 1 Group 3</title>
</head>

<body>
    <h1>Exercise 1 Group 3</h1>
    <?php

    #Abstraction
    abstract class Admin
    {

        public abstract function view();
    }

    #Inheritance
    class Property extends Admin
    {

        #override $val parent class
        public $val = "property";

        public $propertyName;
        private $propertyDescription;
        private $propertyLocation;
        private $propertyLotArea;
        private $propertyType;
        private $propertyPrice;
        private $propertyLot = array();
        public function view()
        {
            for ($i = 0; $i < count($this->propertyLot); $i++) {
                print_r($this->propertyLot[$i] . "<br/>");
            }
        }

        public function createProperty($property)
        {
            $this->propertyLot[] = $property;
        }
        public function setPropertyValues($name, $location, $price, $description, $lotArea, $pType)
        {
            $this->propertyName = $name;
            $this->propertyLocation = $location;
            $this->propertyPrice = $price;
            $this->propertyDescription = $description;
            $this->propertyLotArea = $lotArea;
            $this->propertyType = $pType;
        }

        public function addProperty()
        {
            $newProperty = "Name: " . $this->propertyName . "<br/>" . "Description: " . $this->propertyDescription . "<br/>" . " location: " . $this->propertyLocation .  "<br/>" . "Lot Area: " . $this->propertyLotArea . "<br/>" . "Type: " . $this->propertyType . "<br/>" . " price: " . $this->propertyPrice . "<br/>";
            $this->createProperty($newProperty);
        }

        public function display($var)
        {
            #overriding #2 
            echo 'This is example of overriding in PROPERTY class <br>';
            echo $var->propertyName . '<br>';
            echo $var->propertyDescription . '<br>';
            echo $var->propertyLocation . '<br>';
            echo $var->propertyLotArea . '<br>';
            echo $var->propertyType . '<br>';
            echo $var->propertyPrice . '<br>';
        }

        #overloading method
        function __call($addTag, $tags)
        {
            if($addTag == "addTag"){
                $counter = count($tags);
                switch ($counter) {
                    case 2:
                        echo "There are " . $counter . " user inputs of " . ": " . $tags[0] . " " . $tags[1];
                        break;
                    case 3:
                        echo "There are " . $counter . " user inputs of " . ": " . $tags[0] . " "  . $tags[1] . " "  . $tags[2];
                        break;
                    default:
                        echo "Accepts only up to 3 tags";
                }
            }
           
        }
    }

    class Unit extends Property
    {
        #override $val child class
        public $val = "This is example of overriding in UNIT Class";

        public function display($var)
        {
            #overriding #2 
            echo $var->val . '<br>';
        }
    }


    $groupActOne = new Property();
    $groupActOne->setPropertyValues('House in Greenheights', 'Sucat Paranaque', '9 million', 'This is a 7 yr old house', '25 sqm', 'Townhouse');
    $groupActOne->addProperty();
    $groupActOne->view();

    
    #execute override parent class
    $groupActOne->display($groupActOne);
    echo '<br>';

    # executing overload method
    $groupActOne->addTag("quezon", "city", "manila");
    echo '<br>';

    #execute override child class
    $groupActTwo = new Unit();
    $groupActTwo->display($groupActTwo);

    ?>

</body>

</html>