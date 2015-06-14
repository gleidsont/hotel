<?php

class Conexao {

    private $servidor = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $db = 'mydb';
    protected $conexao;
    protected $resultado;

    public function getResultado() {
        return $this->resultado;
    }

    public function conectar() {
        $this->conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha)
                or die('Erro ao conectar no banco de dados');

        mysqli_select_db($this->conexao, $this->db)
                or die('Erro ao selecionar DB');
    }

    public function desconectar() {
        mysqli_close($this->conexao);
    }

    public function executar($sql) {
        $this->conectar();
        $this->resultado = mysqli_query($this->conexao, $sql);
        $this->desconectar();
    }

    public function recuperarDados($sql) {
        $this->conectar();
        $this->resultado = mysqli_query($this->conexao, $sql);

        $registros = array();

        while ($dados = mysqli_fetch_assoc($this->resultado)) {
            $registros[] = $dados;
        }

        $this->desconectar();
        return $registros;
    }

}
