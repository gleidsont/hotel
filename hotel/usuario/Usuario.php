<?php

class Usuario {

    protected $id;
    protected $nome;
    protected $cpf;
    protected $cidade;
    protected $telefone;
    protected $estado;
    protected $login;
    protected $email;
    protected $senha;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->email = $login;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->email = $senha;
    }

    public function recuperarTodos() {
        $sql = "select * from usuarios";

        $conexao = new Conexao();
        return $conexao->recuperarDados($sql);
    }

    public function excluir($id) {
        $sql = "delete from usuario where id_usuario = $id";

        $conexao = new Conexao();
        $conexao->executar($sql);
        return $conexao->getResultado();
    }

    public function alterar($dados) {
        $nome = $dados['nome'];
        $cpf = $dados['cpf'];
        $cidade = $dados['cidade'];
        $telefone = $dados['telefone'];
        $estado = $dados['estado'];
        $login = $dados['login'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $id_usuario = $dados['id_usuario'];


        $sql = "update usuarios set
					nome 	  = '$nome',
                                        cpf 	  = '$cpf',
                                        cidade 	  = '$cidade',
					telefone  = '$telefone',
                                        estado 	  = '$estado',
                                        login 	  = '$login',
					email 	  = '$email',
					senha     = '$senha',
				where id_usuario  = $id_usuario";

        $conexao = new Conexao();
        $conexao->executar($sql);
        return $conexao->getResultado();
    }

    public function inserir($dados) {
        $nome = $dados['nome'];
        $cpf = $dados['cpf'];
        $cidade = $dados['cidade'];
        $telefone = $dados['telefone'];
        $estado = $dados['estado'];
        $login = $dados['login'];
        $email = $dados['email'];
        $senha = $dados['senha'];

        $sql = "insert into usuarios
				(nome, cpf, cidade, telefone, estado, login, email, senha)
				values
				('$nome', '$cpf', '$cidade', '$telefone', '$estado', '$login', '$email' , '$senha')";

        $conexao = new Conexao();
        $conexao->executar($sql);
        return $conexao->getResultado();
    }

    public function carregar($id) {
        $sql = "select * from usuarios where id_usuarios = $id";

        $conexao = new Conexao();
        $dados = $conexao->recuperarDados($sql);

        $this->id = $dados[0]['id_usuario'];
        $this->nome = $dados[0]['nome'];
        $this->cpf = $dados[0]['cpf'];
        $this->cidade = $dados[0]['cidade'];
        $this->telefone = $dados[0]['telefone'];
        $this->estado = $dados[0]['estado'];
        $this->login = $dados[0]['login'];
        $this->email = $dados[0]['email'];
        $this->senha = $dados[0]['senha'];
        
    }

}
