<!DOCTYPE html>
<html lang="PT-BR">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello Bulma!</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<link rel="stylesheet" href="./css/main.css">


<title>index</title>

<body>
  <!-- particles.js container -->
  <div cas="container"></div> <!-- stats - count particles -->

  <div class="container">
    <section class="section">
      <div class="columns">
        <div class="column column-1">
          <img src="./img/logo.png" class="img-logo">
          <h1 class="title title">Projeto Aeris</h1>
          <h2 class="subtitle">Venha fazer a consultoria do seu negócio conosco.</h2>
          <button class="button is-medium">CADASTRE-SE</button>
        </div>

        <div class="column column-2">
          <img src="./img/img-header.png" class="img-sublogo">
          <img src="./img/img-social.png" class="img-social">
        </div>
      </div>
    </section>

    <section>
      <h1 class="title title-about">Sobre o Aeris</h1>
      <h2 class="subtitle subtitle-about">O objetivo do Projeto Aeris é fornecer formação rápida, prática e gratuita para os alunos e colaboradores que decidiram empreender no cenário atual.</h2>
      <img src="./img/img-about.png" class="img-about">
    </section>

    <section class="section-about">
      <div class="columns">
        <div class="column">
          <img src="./img/img-ideia.png" class="img-ideia">
        </div>

        <div class="column">
          <h1 class="title title-moment">Momento</h1>
          <h2 class="subtitle subtitle-momento">A crise decorrente da pandemia de Covid-19 é um fato indiscutível e afeta de forma geral a nossa sociedade. Além das questões relacionadas à saúde, a área econômica sente diretamente todos os efeitos negativos do momento. Sob essa perspectiva e pensando em uma maneira de incrementar a formação dos alunos de todas as unidades do Projeção, com a celeridade que o momento pede, as professoras Élida Borges, coordenadora da Agência Experimental Galo Canta e Tatiana Reis, coordenadora da Consultoria Junior Inove, criaram o Projeto Aeris. Com o apoio de setores fundamentais da instituição, como o NEX e o NEAD, o Projeto, que visa o incentivo ao empreendedorismo de maneira correta, já está em andamento e se encontra em fase de inscrições..</h2>
        </div>
      </div>
    </section>

    <div class="container container-form">

    </div>

    <div class="columns">
      <div class="column">
       
      </div>
      <div class="column">
        @php
         $curso = (bool) rand(0, 1) ? "checked" : null;   
        @endphp

        <div class="div-form">
        <form action="{{ route('site.pedido') }}" method="post" >
        @csrf
        <input name="nome" value="{{ old('nome') }}" class="input input-name" type="text" placeholder="Nome Completo"> 
            <input name="email" value="{{ old('email') }}" class="input input-email" type="email" placeholder="E-mail">
            <input name="senha" value="{{ old('senha') }}" class="input input-password" type="password" placeholder="Senha">
            <input name="confirmaSenha" value="{{ old('confirmaSenha') }}" class="input input-confirm-password" type="password" placeholder="Confirmar senha">
            <input name="telefone" value="{{ old('telefone') }}" class="input input-tel" type="text" placeholder="Telefone">
            <input name="nomeEmpresa" value="{{ old('nomeEmpresa') }}" class="input input-name-empresa" type="text" placeholder="Nome da Empresa">
            <textarea name="descricao" value="{{ old('descricao') }}" class="textarea" placeholder="Fale um pouco sobre seu negócio"
            >@if (old('descricao') != ''){{old('descricao')}} @endif</textarea>
            <button class="button is-normal">Enviar</button>
            <label class="checkbox">
                <input name="checkCurso" type="checkbox" value=1  @if (old('checkCurso') == 1) {{ old('checkCurso')  }} @endif >
                Já participei do curso de extensão do Aeris.
            </label>
        </form>
        </div>
      </div>
    </div>
  <div style="position: absolute; top:0px; left:0px; width:100%;">
    <pre>
      {{ print_r($errors) }}
    </pre>
  </div>
</body>

</html>