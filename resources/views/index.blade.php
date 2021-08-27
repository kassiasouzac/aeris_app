<!DOCTYPE html>
<html lang="PT-BR">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aeris</title>
  <!-- ==================================================================================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- ==================================================================================== -->    
  <link rel="stylesheet" href="./css/style.css">
  <!-- ==================================================================================== -->


<title>index</title>

<body>
  <div id="background-sections">

    <!--section initial-->
      <div class="container class-initial">
        <div class="row">
          <div class="col col-center">
            <img src="./img/logo.png" alt="Logo Aeris">
            <h1 class="title-initial">Projeto Aeris</h1> 
            <h3 class="subtitle-initial">Venha fazer a consultoria do seu negócio conosco.</h3>
            <a href="#form-registrar"><button class="btn btn-dark">Cadastre-se</button></a> <!-- colocar o id do form no href-->
          </div>
          <div class="col col-center">
            <img src="./img/initial.png" alt="Vetor Homem no Computador">
          </div>
        </div>
      </div>

    <!--section about-->
      <div class="container container-style class-about">
        <div class="row">
          <div class="col col-center">
            <img src="./img/img-about.png" alt="Placeholder image">
          </div>
          <div class="col col-center">
            <span class="span-all">SOBRE</span>
            <h2 class="subtitle-about">
              O objetivo do Projeto Aeris é fornecer formação rápida, prática e gratuita para os alunos e colaboradores que
              decidiram empreender no cenário atual.
            </h2>
          </div>
        </div>
      </div>
    
    <!--section moment-->
      <div class="container container-style">
        <div class="row">
          <div class="col col-center">
            <img src="./img/img-moment.png" alt="Placeholder image">
          </div>
          <div class="col col-center">
            <span class="span-all">MOMENTO</span>
            <h2 class="subtitle-all">
              A crise decorrente da pandemia de Covid-19 é um fato indiscutível e afeta de forma geral a nossa sociedade. Além das questões relacionadas à saúde, a área econômica sente diretamente todos os efeitos negativos do momento. Sob essa perspectiva e pensando em uma maneira de incrementar a formação dos alunos de todas as unidades do Projeção, com a celeridade que o momento pede, as professoras Élida Borges, coordenadora da Agência Experimental Galo Canta e Tatiana Reis, coordenadora da Consultoria Junior Inove, criaram o Projeto Aeris. Com o apoio de setores fundamentais da instituição, como o NEX e o NEAD, o Projeto, que visa o incentivo ao empreendedorismo de maneira correta, já está em andamento e se encontra em fase de inscrições.
            </h2>
          </div>
        </div>
      </div>

    <!--section form-->
    <div class="container container-style">
      <div class="row">
        <div class="col col-center">
          <span class="span-form">COMO PARTICIPAR</span>
          <img id="img-form" src="./img/img-form.png" alt="Placeholder image">
          <h2 class="subtitle-all">
            Os participantes do projeto terão acesso gratuitamente a um programa de treinamento intensivo para
            alavancar seus negócios em três fases: mini-cursos práticos na plataforma AVA, mentoria com acompanhamento
            personalizado e divulgação de seus produtos e serviços através da Rede Aeris, que irá providenciar
            encartes voltados para a região em que o negócio se encontra, considerando que serão divulgados para toda
            a comunidade Projeção. Para participar, basta que o aluno preencha o formulário de cadastro ao lado e
            aguarde por maiores instruções.
          </h2>
        </div>
        <div class="col col-center-form col-style-form">
          <form action="{{ route('site.pedido') }}" method="post" id="form-registrar">
            @csrf
            <p class="title-form">Cadastre-se</p>
            <div class="col-12 mb-3">
              <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" id="nome-completo" placeholder="Nome Completo" required>
            </div>
            <div class="col-12 mb-3">
              <input type="text" name="nomeEmpresa" value="{{ old('nomeEmpresa') }}" class="form-control" id="nome-empresa" placeholder="Nome da empresa" required>
            </div>
            <div class="col-12 mb-3">
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail" required>
            </div>
            <div class="row">
              <div class="col-6 mb-3">
                <input type="password" name="senha" value="{{ old('senha') }}" class="form-control" id="senha" placeholder="Senha" required>
              </div>
              <div class="col-6 mb-3">
                <input type="password" name="confirmaSenha" value="{{ old('confirmaSenha') }}" class="form-control" id="senha" placeholder="Confirmar Senha" required>
              </div>
            </div>
            <div class="col-12 mb-3">
              <input type="text" name="telefone" value="{{ old('telefone') }}"  class="form-control" id="telefone" placeholder="Telefone" required>
            </div>
            <div class="col-12 mb-3">
              <textarea name="descricao" value="{{ old('descricao') }}" class="form-control" id="descricao-negocio" placeholder="Descrição do negócio" rows="3">@if (old('descricao') != ''){{old('descricao')}} @endif</textarea>
            </div>
            <div class="col-12 mb-3">
              <input class="form-check-input" type="checkbox" value="" id="participacao" required value=1  @if (old('checkCurso') == 1) {{ old('checkCurso')  }} @endif >
              <label class="form-check-label" for="participacao">
                Já participou de algum curso do Aeris ?
              </label>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>  

    <!-- FOOTER -->

    
   
  </div>
</body>
</html>