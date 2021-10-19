<html>

<head>
    <title>Lab Act 1 Group 3</title>
</head>

<body>
    <h1>Lab Act 1 Group 3</h1>
    <?php

    #Abstraction
    abstract class Admin
    {
        public abstract function view();
        public abstract function create($valueVar);
    }

    #Inheritance
    class Property extends Admin
    {
        public $propertyName;
        public $propertyDescription;
        public $propertyLocation;
        public $propertyLotArea;
        public $propertyType;
        public $propertyPrice;
        public $inquiryMsg;
        public $propertyTags = array();
        public $myProperties = array();
        public function view()
        {
            for ($i = 0; $i < count($this->myProperties); $i++) {
                print_r($this->myProperties[$i] . "<br/>");
            }
        }

        public function create($property)
        {
            $this->myProperties[] = $property;
        }
        public function setPropertyValues($name, $location, $price, $description, $lotArea, $pType, $pTags)
        {
            $this->propertyName = $name;
            $this->propertyLocation = $location;
            $this->propertyPrice = $price;
            $this->propertyDescription = $description;
            $this->propertyLotArea = $lotArea;
            $this->propertyType = $pType;
            $this-> propertyTags = $pTags;
        }

        public function addProperty()
        {
            $newProperty = "Name: " . $this->propertyName . "<br/>" . "Description: " . $this->propertyDescription . "<br/>" . " location: " . $this->propertyLocation .  "<br/>" . "Lot Area: " . $this->propertyLotArea . "<br/>" . "Type: " . $this->propertyType . "<br/>" . " price: " . $this->propertyPrice . "<br/>". " tags: " . implode(" ",$this->propertyTags) . "<br/>";
            $this->create($newProperty);
        }

        public function createInquiry($inquiryMsg)
        {
            $this->inquiryMsg = $inquiryMsg;
        }

        public function displayInquiry()
        {
            echo "Inquiry: " . $this->inquiryMsg;
        }

    }

    $groupActOne = new Property();
    $groupActOne->setPropertyValues('House in Greenheights', 'Sucat Paranaque', '9 million', 'This is a 7 yr old house', '25 sqm', 'Townhouse', ['brand new house', 'new']);
    $groupActOne->addProperty();
    $groupActOne->setPropertyValues('House in Ermita', 'Manila', '9 million', 'This is a 17 yr old house', '35 sqm', 'Mansion', ['old house', 'duplex', 'far']);
    $groupActOne->addProperty();
    $groupActOne->view();

    $groupActOne->createInquiry('How much for this house? I would like to inquire and maybe book an appointment');
    $groupActOne->displayInquiry();
 


    ?>

</body>

</html>