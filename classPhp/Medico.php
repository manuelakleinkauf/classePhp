<?php
/**@author Manuela Kleinkauf */
    class Medico extends Pessoa{
        private $crm;

        /**Função para obter o crm de um médico
         * @access public
         * @return String crm
         */
        public function getCrm() {
            return $this->crm;
          }
        
        /**Função que define o crm do médico
         * @access public
         * @param String $crm
         */
        public function setCrm($crm) {
            return $this->crm= $crm;
          }
    }
?>