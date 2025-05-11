<?php
    class Produto{
      
        protected string $nome;
        protected string $descricao;
        protected float $preco;

        public function __construct(string $nome, string $descricao, float $preco) {
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->preco = $preco;
        }
     public function exibirDetalhes() {
        echo "Nome: " . $this->nome . "\n";
        echo "Descrição: " . $this->descricao . "\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }

    }

    class Livro extends Produto{
        protected string $autor;
        protected string $numeroPaginas;
      
        public function __construct(string $nome, string $descricao, float $preco, string $autor, string $numeroPaginas) {
            parent::__construct($nome, $descricao, $preco);
            $this->autor = $autor;
            $this->numeroPaginas = $numeroPaginas;
        }

        public function exibirDetalhes() {
            parent::exibirDetalhes();
            echo "Autor: " . $this->autor . "\n";
            echo "Páginas: " . $this->numeroPaginas . "\n";
        }
    }
    class Eletronico extends Produto{
        protected string $voltagem;
        protected bool $ligado;
        
        public function __construct(string $nome, string $descricao, float $preco, string $voltagem, bool $ligado) {
            parent::__construct($nome, $descricao, $preco);
            $this->voltagem = $voltagem;
            $this->ligado = $ligado;
        }
        public function exibirDetalhes(){
            parent::exibirDetalhes();
            echo "Voltagem: " . $this->voltagem . "\n";
            echo "Status: " . ($this->ligado ? "Ligado" : "Desligado") . "\n";
        }
}


$produto = new Produto("Produto Genérico", "Sem categoria específica", 49.90);
$livro = new Livro("1984", "Romance distópico", 39.90, "George Orwell", "328");
$eletronico = new Eletronico("Smartphone", "Celular Android", 1999.99, "220V", true);

$produto->exibirDetalhes();
echo "-------------------------\n";
$livro->exibirDetalhes();
echo "-------------------------\n";
$eletronico->exibirDetalhes();
