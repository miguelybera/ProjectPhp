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
            $this->create($newProperty);
        }

        

    }

    class Inquiries extends Admin{
        public $customerInquiries = array();
        public function view()
        {
            for ($i = 0; $i < count($this->customerInquiries); $i++) {
                print_r($this->customerInquiries[$i] . "<br/>");
            }
        }
        public function create($inquiryMsg)
        {
            $this->customerInquiries[] = $inquiryMsg;
        }

        public function setInquiryValues($fullName, $email, $contactNumber, $message, $concernType, $dateCreated)
        {
            $this->fullName = $fullName;
            $this->email = $email;
            $this->contactNumber = $contactNumber;
            $this->message = $message;
            $this->concernType = $concernType;
            $this->dateCreated = $dateCreated;
        }
        public function addInquiry()
        {
            $newInquiry = "Name: " . $this->fullName . "<br/>" . "Email: " . $this->email . "<br/>" . " Contact Number: " . $this->contactNumber .  "<br/>" . "Message: " . $this->message . "<br/>" . "Concern Type: " . $this->concernType . "<br/>" . " Date: " . $this->dateCreated . "<br/>";
            $this->create($newInquiry);
        }

    }
    echo 'Properties' . '<br/>';
    $prop = new Property();
    $prop->setPropertyValues('House in Greenheights', 'Sucat Paranaque', '9 million', 'This is a 7 yr old house', '25 sqm', 'Townhouse');
    $prop->addProperty();
    $prop->setPropertyValues('House in Ermita', 'Manila', '9 million', 'This is a 17 yr old house', '35 sqm', 'Mansion');
    $prop->addProperty();
    $prop->view();

    echo 'Inquiries' . '<br/>';
    $inq = new Inquiries();
    $timezone = date_default_timezone_get();
    $inq->setInquiryValues('Jose Miguel Ybera', 'josemiguel.ybera.iics@ust.edu.ph', '09123456789', 'Hi i would like to inquire for a house in your page', 'inquiry', date("Y/m/d"));
    $inq->addInquiry();
    $inq->view();
 


    ?>

</body>

</html>