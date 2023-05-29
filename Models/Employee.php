<?php 
    class Employee {
        
        private $idEmployee;
        private $name;
        private $address;
        private $phoneNumber;
        private $email;
        private $employeeType;
        
        public function __construct($idEmployee, $name, $address, $phoneNumber, $email, $employeeType) 
        {
            $this -> idEmployee = $idEmployee;
            $this -> name = $name;
            $this -> address = $address;
            $this -> phoneNumber = $phoneNumber;
            $this -> email = $email;
            $this -> employeeType = $employeeType;
        }
        
        public function getIdEmployee() {
            return $this->idEmployee;
        }
        
        public function setIdEmployee($idEmployee) {
            $this -> idEmployee = $idEmployee;
        }
        
        public function getName() {
            return $this -> name;
        }
        
        public function setName($name) {
            $this -> name = $name;
        }
        
        public function getAddress() {
            return $this -> address;
        }
        
        public function setAddress($address) {
            $this -> address = $address;
        }
        
        public function getPhoneNumber() {
            return $this -> phoneNumber;
        }
        
        public function setPhoneNumber($phoneNumber) {
            $this -> phoneNumber = $phoneNumber;
        }
        
        public function getEmail() {
            return $this -> email;
        }
        
        public function setEmail($email) {
            $this -> email = $email;
        }
        
        public function getEmployeeType() {
            return $this -> employeeType;
        }
        
        public function setEmployeeType($employeeType) {
            $this -> employeeType = $employeeType;
        }
        
    }

?>