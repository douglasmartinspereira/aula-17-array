
<?php
//1. Criar as seguintes variáveis e mostrá-las usando echo e var_dump :
//a. Uma variável com um número inteiro
$numeroInteiro = 10;
var_dump($numeroInteiro);
//b. Uma variável com um número decimal.
echo "<br>";
$numeroDecimal = 3.7;
var_dump ($numeroDecimal);
echo "<br>";
//c. Uma variável com um caractere, usando aspas duplas.
$nomeDeCasado = "Douglas Martins Pereira";
var_dump ($nomeDeCasado);
echo "<br>";
//d. Uma variável com um caractere, usando aspas simples.
$nomeDeSolteiro = 'Douglas Martins';
var_dump($nomeDeSolteiro) ;
echo "<br>";
//e. Uma variável com uma cadeia, usando aspas simples.
$endereco = 'Rua Doutor Luiz Migliano';
echo $endereco;
echo "<br>";
//f. Uma variável com uma cadeia, usando aspas duplas.
$enderecoComercial = "Rua Sr Manoel Vicente";
var_dump($enderecoComercial);
echo "<br>";
//g. Atribuir uma cadeia de caracteres à variável do ponto a .
$pontoA = "Olá Mundo";
$numeroInteiro = $pontoA;
var_dump($numeroInteiro);
echo "<br>";
//h.Atribuir um número decimal à variável do ponto e.
$variavelDecimal = 12.56;
$endereco = $variavelDecimal;
var_dump($endereco);
//i. O que acontece com o tipo de dado das variáveis do ponto g e do ponto h ?
echo "<br>";
echo "Ponto G passa de um número inteiro para string e o Ponto h de uma string para um float.";
//j. O que acontece se atribuirmos outro valor numérico à variável do ponto a , mas entre aspas?
echo "<br>";
echo "números entre aspas corresponde a uma string.";


echo "<br>";

// 2- Com base na frase “ Três pratos de trigo para três tigres tristes ”, criar uma variável
//para cada palavra, de forma que o nome de cada variável indique a posição da
//palavra na frase:";
echo "<br>";

$frase = [];
$palavra1[0] = "Três";
$palavra1[1] = "pratos";
$palavra1[2] = "de";
$palavra1[3] = "Trigo";
$palavra1[4] = "para";
$palavra1[5] = "Três";
$palavra1[6] = "Tigres";

//2a. É possível atribuir um número ($1, $2, $3) como nome da variável?
// não funciona com representação númerica.

// 2b- Atribuir a cada variável sua posição numérica escrita como texto ($um,$dois, $tres).echo "<br>";
$um = "Três";
$dois = "pratos";
$tres = "de";
$quatro = "Trigo";
$cinco = "para";
$seis = "três";
$sete = "tigres.";

//2c-Imprimir a frase usando todas as variáveis declaradas.

echo "$um $dois $tres $quatro $cinco $seis $sete";
echo "<br>";


// 2d - Imprimir uma oração usando pelo menos duas variáveis já declaradas no ponto anterior.

echo "$seis $sete";

echo "<br>";
echo "<br>";


//3. Declarar as variáveis a seguir e executar o seguinte código. Substituir a variável
//$meuDado pelas variáveis declaradas no nosso arquivo. Por último, executar o
//arquivo e observar se o tipo de dado retorna true ou false.

$variable01 = true;
$variable02 = false;
$variable03 = 0;
$variable04 = 1;
$variable05 = 6;
$variable06 = '';
$variable07 = "3";
$variable08 ="true";
$variable09 ='false';
$variable10 = null;

function tipoDado($varN){
    if ( $varN == true )
    {
        echo 'o valor' . $varN . 'é verdadeiro.';
    }
    else
    {   
        echo 'o valor' . $varN . 'é falso.';
    }
}

tipoDado($variable06);


//4 Criar um array numérico com 5 strings de animais diferentes. Em seguida, executar
//um var_dump para ver os resultados.
echo "<br>";
//4a - Adicionar mais 2 animais ao final do array e executar outro var_dump para ver os resultados
$animalAssociativo = [
    "animal1" => "Tatu",
    "animal2" => "Gato",
    "animal3" => "Cachorro",
    "animal4" => "papagaio",
    "animal5" => "cavalo",

];
$animalAssociativo[0] = "Macaco";
$animalAssociativo[5] = "Elefante";
$animalAssociativo[16] = "Cobra";
$animalAssociativo[100] = "boi";
var_dump($animalAssociativo);

echo "<br>";

$animal1 = "Pato";
$animal2 = "Gato";
$animal3 = "Cachorro";
$animal4 = "papagaio";
$animal5 = "cavalo";
echo "<br>";    
var_dump($animal1);
echo "<br>";
var_dump($animal2);
echo "<br>";
var_dump($animal3);
echo "<br>";
var_dump($animal4);
echo "<br>";
//4a - Adicionar mais 2 animais ao final do array e executar outro var_dump para ver os resultados
$animais = array("Pato","Gato","Cachorro","Papagaio","Cavalo");
$animais[]="Girafa";
$animais[]="Macaco";
var_dump($animais);
echo "<br>";
// 4bImprimir a seguinte oração “Eu gosto de animais: animal1, animal2, ...” com os 7 animais que declaramos.
echo " Eu gosto de $animal1 , $animal2 , $animal3";
echo "<br>";

// 5-Criar um array associativo que contenha as seguintes propriedades de um carro:
//Marca, Modelo, Cor, Ano e Placa. Em seguida, executar um var_dump para ver os
//resultados.
    $veiculo = [
    "Marca" => "BWM",
    "Modelo" => "X5",
    "Placa" => "EEO 1985",
    "Cor" => "Branca",
    "ano" => 2015,

];

    $veiculo = [
        "dono" => "Douglas",
    ]+$veiculo;

var_dump($veiculo);

// 5b. Adicionar a empresa seguradora na posição 14 e imprimir o resultado.

echo "<br>";
$variavel1 = "dono";
$variavel2 = "Douglas";
$variavel3= "Marca";
$variavel4= "BMW";
$variavel5= "Modelo";
$variavel6 = "X5";
$variavel7 = "Placa";
$variavel8= "EE0 1985";
$variavel9= "Cor";
$variavel10= "Branca";
$variavel11 = "Ano";
$variavel12= "2015";
$variavel13= "Empresa Seguradora";
$variavel14 = "Azul";
$variavel15 = "apolice 123-1003";
echo "<br>";
$modificarplaca = "GEL 1868";
$variavel8 = $modificarplaca;
$modificardono = "Alessandra";
$variavel2 = $modificardono;
//echo "$variavel1 $variavel2 $variavel3 $variavel4 $variavel5 $variavel6 $variavel7 $variavel8 $variavel9 $variavel10 $variavel11 $variavel12 $variavel13 $variavel14 $variavel15"

//6 Declarar a variável $inteiro e $decimal, com os respectivos valores.
// 6.a Executar um echo com a soma dos dois valores.
$numeroInteiro= 20;
$numeroDecimal= 3.0;
$adicionarinteiro = 5;
$adicionarDecimal = 0.6;

$somadosvalores = $numeroInteiro + $numeroDecimal;
echo " A soma dos valores é $somadosvalores";
echo "<br>";

$subtracao = $numeroInteiro - $numeroDecimal;
echo " A subtracao dos valores é $subtracao";
echo "<br>";

$divisaodosvalores = $numeroInteiro / $numeroDecimal;
echo " A divisao dos valores é $divisaodosvalores";
echo "<br>";
$multiplica = $numeroInteiro * $numeroDecimal;
echo " A multiplicacao dos valores é $multiplica";
echo "<br>";
$modulo = $numeroInteiro % $numeroDecimal;
echo " O modulo é $modulo";
echo "<br>";
$varf = $modulo + $adicionarinteiro + $adicionarDecimal;
echo "primeiro resultado é $varf";
echo "<br>";
$resultado = ($numeroInteiro * 2 + $adicionarDecimal) / ($numeroInteiro / 2);
//echo $resultado;

$varf2 = $modulo + $resultado;
echo "segundo resultado é $varf2";


// 7 Declarar uma variável com a string ‘Olá’ e outra com a string ‘mundo!’.
// a. Em uma nova variável, concatenar as variáveis criadas recentemente para formar “Olá mundo!”.

$primeiravariavel = "Ola";
$segundavariavel = "Mundo";
echo "<br>";
echo " $primeiravariavel  $segundavariavel";
echo "<br>";
$phpmaximo = "PHP é o Máximo";
echo "$phpmaximo $modificardono";


?>



