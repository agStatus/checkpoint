<?php
//novo arquivo salvar dentro de classes como banco.class.php

require_once(dirname(__FILE__)."/autoload.php");

Class banco{

	public $servidor = DBHOST;
    public $usuario = DBUSER;
    public $senha = DBPASS;
    public $nomebanco = DBNAME;

	function inserir(){}

	function alterar(){}

	function deletar(){}

	function selecionarTudo(){}

	function selecionarDados(){}

}