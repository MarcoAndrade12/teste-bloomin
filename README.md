Projeto de Site de Teste
Este repositório contém o código-fonte de um site de teste que requer um ambiente PHP para ser executado. Abaixo estão as instruções para configurar e rodar o projeto localmente na sua máquina.

Pré-requisitos
Antes de começar, certifique-se de que você tem os seguintes softwares instalados na sua máquina:

XAMPP ou Laragon: Ambos são pacotes que incluem um servidor web (Apache), PHP e MySQL. Escolha um deles para configurar o ambiente de desenvolvimento.

Download do XAMPP

Download do Laragon

Git: Para clonar o repositório.

Download do Git

Passos para Executar o Projeto
Clonar o Repositório

Abra o terminal ou prompt de comando e execute o seguinte comando para clonar o repositório para a sua máquina:

bash
Copy
git clone https://github.com/MarcoAndrade12/teste-bloomin/tree/main
Configurar o Ambiente PHP

XAMPP:

Inicie o XAMPP.

Inicie os módulos Apache e MySQL no painel de controle do XAMPP.

Mova a pasta do projeto clonado para o diretório htdocs dentro da pasta de instalação do XAMPP (geralmente C:\xampp\htdocs).

Laragon:

Inicie o Laragon.

Mova a pasta do projeto clonado para o diretório www dentro da pasta de instalação do Laragon (geralmente C:\laragon\www).

Acessar o Site

Abra o navegador e acesse o site localmente. O endereço será algo como:

XAMPP:

Copy
http://localhost/nome-da-pasta-do-projeto/
Laragon:

Copy
http://nome-da-pasta-do-projeto.test/
Substitua nome-da-pasta-do-projeto pelo nome da pasta onde você colocou o projeto.

Executar o Projeto

Agora que o ambiente está configurado, o site deve estar funcionando corretamente no seu navegador. Se houver alguma configuração adicional necessária, consulte o arquivo config.php ou README.md dentro da pasta do projeto.
