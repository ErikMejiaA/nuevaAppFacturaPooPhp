<?php 
    class Invoice {
        
        private $numberInvoice;
        private $dateInvoice;
        private $idCustomer;
        private $subtotalInvoice;
        private $taxes;
        private $total;
        private $warranty;
        
        public function __construct($numberInvoice, $dateInvoice, $idCustomer, $subtotalInvoice, $taxes, $total, $warranty)
        {
            $this -> numberInvoice = $numberInvoice;
            $this -> dateInvoice = $dateInvoice;
            $this -> idCustomer = $idCustomer;
            $this -> subtotalInvoice = $subtotalInvoice;
            $this -> taxes = $taxes;
            $this -> total = $total;
            $this -> warranty = $warranty;
        }
        public function getNumberInvoice() {
            return $this -> numberInvoice;
        }

        public function setNumberInvoice($numberInvoice) {
            $this -> numberInvoice = $numberInvoice;
        }
        
        public function getDateInvoice() {
            return $this -> dateInvoice;
        }

        public function setDateInvoice($dateInvoice) {
            $this -> dateInvoice = $dateInvoice;
        }
        
        public function getIdCustomer() {
            return $this -> idCustomer;
        }

        public function setIdCustomer($idCustomer) {
            $this -> idCustomer = $idCustomer;
        }
        
        public function getSubtotalInvoice() {
            return $this -> subtotalInvoice;
        }

        public function setSubtotalInvoice($subtotalInvoice) {
            $this -> subtotalInvoice = $subtotalInvoice;
        }
        
        public function getTaxes() {
            return $this -> taxes;
        }

        public function setTaxes($taxes) {
            $this -> taxes = $taxes;
        }
        
        public function getTotal() {
            return $this -> total;
        }

        public function setTotal($total) {
            $this -> total = $total;
        }
        
        public function getWarranty() {
            return $this -> warranty;
        }
        
        public function setWarranty($warranty){
            $this -> warranty = $warranty;
        }
    }
?>