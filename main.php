<?
class Filme {
  public $nome_filme;
  public $genero;
  public $classificacao;
  public $sessao;
  public $duracao;

   public function set_Nome_Filme($nome_filme){
    $this->nome_filme = $nome_filme;
  }
   public function get_Nome_Filme(){
    return $this->nome_filme;
  }


   public function setGenero($genero){
    $this->genero = $genero;
  }
   public function getGenero(){
    return $this->genero;
  }


   public function setClassificacao($classificacao){
    $this->classificacao = $classificacao;
  }
   public function getClassificacao(){
    return $this->classificacao;
  }


   public function setSessao($sessao){
    $this->sessao = $sessao;
  }
   public function getSessao(){
    return $this->sessao;
  }


   public function setDuracao($duracao){
    $this->duracao = $duracao;
  }
   public function getDuracao(){
    return $this->duracao;
  }
}
class Cliente{
  private $nome_cliente;
  private $idade;
  private $email;
  private $valor;

  public function setValor($valor){
    $this->valor = $valor;
  }
  public function getValor(){
    return $this->valor;
  }
  //insere nome do cliente
  public function setNome($nome){
    $this->nome_cliente = $nome;
  }
  //retorna o nome inserido
  public function getNome(){
    return $this->nome_cliente;
  }

  //insere idade
  public function setIdade($idade){
    $this->idade = $idade;
  }
  //retorna o idade inserido
  public function getIdade(){

    if($this->idade < 18){
      return "Você não pode comprar ingresso.";
    }else{
      return "Você pode comprar ingresso.";
    }
  }


  //insere email
  public function setEmail($email){
    $this->email = $email;
  }
  //retorna o email inserido
  public function getEmail(){
    return $this->email;
  }
}





//impressão do cliente
$cliente = new Cliente();
$cliente->setNome("João Pedro");
$cliente->setIdade(19);
$cliente->setValor(10);
$cliente->setEmail("meninodoido@example.com");
echo "Seu nome: " . $cliente->getNome() . "\n". $cliente->getIdade() ."\nValor: ".$cliente->getValor(). "\n"."Seu email: " . $cliente->getEmail() . "\n"; 



//impressão do filme
$filme = new Filme();
$filme->set_Nome_Filme("O Poderoso Chefão");
$filme->setGenero("Drama");
$filme->setClassificacao("16 anos");
$filme->setSessao("Sala 1");
$filme->setDuracao("2h");
echo "\n"."Nome do filme: " . $filme->get_Nome_Filme() . "\n"."Gênero: " . $filme->getGenero() . "\n" . "Classificação: " . $filme->getClassificacao() . "\n" . "Sessão: " . $filme->getSessao() . "\n" . "Duração: " . $filme->getDuracao();
