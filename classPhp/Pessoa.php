<?php
/**@author Manuela Kleinkauf */
    class Pessoa{
        private $nome;
        private $dataNascimento;
        private $cpf;
        private $rg;
        
        /**Função para obter o nome de uma pessoa
         * @access public
         * @return String nome
         */
        public function getNome() {
            return $this->nome;
          }
          /**Função que define o nome da pessoa
         * @access public
         * @param String $nome
         */
          public function setNome($nome) {
            $this->nome= $nome;
          }
          /**Função para obter a data nascimento de uma pessoa
         * @access public
         * @return String da data de nascimento
         */
          public function getDataNascimento() {
            return $this->dataNascimento;
          }
          /**Função que define a data de nascimento da pessoa
         * @access public
         * @param String $dataNascimento
         */
          public function setDataNascimento($dataNascimento) {
            $this->dataNascimento= $dataNascimento;
          }
          /**Função para obter o CPF de uma pessoa
         * @access public
         * @return String da data de nascimento
         */
          public function getCpf(){
            return $this->cpf;
          }
          /**Função que define o CPF da pessoa
         * @access public
         * @param String $cpf
         */
          public function setCpf($cpf){
            $this->cpf= $cpf;
          }
          /**Função para obter o RG de uma pessoa
         * @access public
         * @return String RG
         */
          public function getRg(){
            return $this->Rg;
          }
          /**Função que define o RG da pessoa
         * @access public
         * @param String $Rg
         */
          public function setRg($Rg){
            $this->Rg= $Rg;
          }
          
    }
?>