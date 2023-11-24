# Comunidade-Explore
A Comunidade Explore é um projeto acadêmico destinado à disciplina de Laboratório Orientado a Objetos. O projeto consiste em uma comunidade online voltada para os entusiastas de viagens, organizada em três seções principais: "Diários de Viagem", "Guias de Viagem" e "Eventos".

## Configurações iniciais
### Links do Bootstrap para facilitar na hora da criação das funções
https://getbootstrap.com.br/docs/4.1/components/forms/
https://www.php.net/manual/en/function.password-hash.php
https://www.php.net/manual/en/function.password-hash.php
https://www.geeksforgeeks.org/how-to-upload-images-in-mysql-using-php-pdo/


### Geral
### Cadastro - Front-End
  - [X] Criar um componente **section**, pois ele será o esqueleto da página de Cadastro
  - [X] Dividir a seção em duas **div's**: uma para a imagem (**class="imagem"**) à esquerda e outra para o conteúdo (**class="conteudo"**) à direita.
  - [X] Adicionar uma imagem à div da esquerda.
  - [X] Inserir título e parágrafo de boas-vindas **conforme o protótipo de Telas**.
  - [X] Implementar o campo de upload de foto usando o componente de Upload de Arquivos do Bootstrap.
  - [X] Configurar o campo de e-mail utilizando o componente do Bootstrap para garantir a formatação correta.
  - [X] Adicionar campos de senha e confirmação de senha com rótulos correspondentes.
  - [ ] Incluir um botão para realizar o cadastro. **Prototipação das telas** - *Botão foi incluido, porém não estou conseguindo centraliza-lo*
  - [ ] Adicionar um parágrafo com um link para a tela de login.Conforme **Prototipação das telas** - *Falta modificar a cor do Link do Login, pois não consegui fazer só que com ela mude*
  - [X] Lembre-se que a tela deverá ter a aparencia que está flutuando. Dando a impressão 3D - **Anna Karolynna** tem o código css para isso

### Cadastro - Back-End
- [ ] Na **pasta Model** criar a classe do Usuário, que deverá conter os atributos: id, foto, email,senha. **Seguir o diagrama de classes**
- [ ] **Na controller**, validar se as senhas coincidem antes de enviar para o dao. Caso  haja inconsistencia enviar uma mensagem alertando ao usuário e não salvar no banco de dados
- [ ] na **classe Dao** - abrir uma conexao dentro do construct
- [ ] na **classe Dao** - criar uma função para cadastrar usuario
- [ ] na **classe Dao** - criar uma função para ver se o e-mai do usuário já está cadastrado, caso esteja na hora que a função cadastrar for chamada ela não permitirá e retornará uma mensagem para o usuário na tela.

<hr>

### Login - Front-End
- [ ] Criar um componente **section**, pois ele será o esqueleto da página de Login
- [ ] Dividir a seção em duas **div's**: uma para a imagem (**class="imagem"**) à esquerda e outra para o conteúdo (**class="conteudo"**) à direita.
- [ ] Adicionar uma imagem à div da esquerda.
- [ ] Inserir título e parágrafo de boas-vindas conforme o protótipo de Telas.
- [ ] Adicionar Label's e Input's nos campos de E-mail e de senha com rótulos correspondentes.
- [ ] Adicionar um paragrafo/ link para esqueci minha senha
- [ ]  Incluir um botão para realizar o login. **Prototipação das telas**.
- [ ]  dicionar um parágrafo com um link para a tela de Cadastro.Conforme **Prototipação das telas**
- [ ] Lembre-se que a tela deverá ter a aparencia que está flutuando. Dando a impressão 3D - **Anna Karolynna** tem o código css para isso

### Login - Back-End
- [ ] Na **Classe Dao** criar uma função para  buscar o usuário no banco de dados
- [ ] Na **Classe Controller** criar uma função para realizar login. Então nesta função você deverá verificar se a senha e o e-mail coincidem com os dados registrados no banco de dados.
- [ ] Na **Classe Controller** apos as validações ocorrerem deverá ser criado a **SESSÃO** em PHP
- [ ] Na **Classe Controller** utilizar uma função apropriada do PHP para iniciar a sessão
- [ ] Na **Classe Controller** armazenar as informações relevantes do usuário na superglobal **$_SESSION**.
- [ ] Na **Classe Controller** Verificar se a sessão foi iniciada com sucesso antes de redirecionar uma mensagem ao usuario de **Autenticado com sucesso**
- [ ] Garantir que qualquer informação sensível seja manipulada com segurança durante o processo de Login
- [ ] Levar usuário para a página principal do projeto.

<hr>

### Index - Front-End
- [ ] Criar um componente **section**, pois ele será o esqueleto da página de Cadastro
- [ ] Dividir a seção em duas **div's**: uma para a imagem (**class="imagem"**) à direita e outra para o conteúdo (**class="conteudo"**) à esquerda.
- [ ] A tela de Index deverá conter um menu horizontal no topo da página. Este mennu deverá ser responsável por levar o usuário para as telas de:
- [ ] criar link para a tela **HOME**, que é a tela index
- [ ] criar link para a tela **Saiba mais**, que deverá contar a história do aplicativo
- [ ] criar link para uma tela chamada **Desenvolvedores** que apresentará Janaína, Carol e Eu.
- [ ] Na tela Index ainda, deverá ter o texto de boas vinda **Comece sua jornada**
- [ ] Na tela de Index deverá tbm em baixo do título de boas vindas ter um pequeno paragrafo
- [ ] Deverá ser colocado dois botões  um que levará o usuário para a tela de Login e outro que levará o usuário para a tela de cadastro.
- [ ] Criar a Tela **Saiba mais**
- [ ] Criar a Tela **Desenvolvedores**

