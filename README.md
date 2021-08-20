# Exercícios

## Exercício 1
Crie um script PHP que mostra o nome do país e sua capital usando uma array chamada $location. Ordene a Lista pelo nome da capital e adicione pelo menos 5 entradas no array.
Exemplo do que deve ser mostrado de saída:
- A capital do Brasil e Brasília;
- A capital dos EUA e Washington;
- A capital da Espanha e Madrid.

## Exercício 2
Joãozinho vai morder o seu dedo 50% das vezes. Esse exercício será dividido em 2 partes.
- a) Primeiro, cria uma função chamada foiMordido() que deverá retornar TRUE para 50% das vezes e FALSE para os outros 50%. A função rand() pode ser útil aqui;
- b) Após criar a função, crie um código/página que mostre as frases “Joãozinho mordeu o seu dedo !” ou “Joaozinho NAO mordeu o seu dedo !” usando a função foiMordido() que foi criado na primeira parte.

## Exercício 3
Escreva uma função em PHP para pegar as extensões dos 3 arquivos abaixo e mostrá-las na tela. As saídas devem ser mostradas em uma lista em ordem alfabética.

Arquivos de exemplo:
- a) music.mp4
- b) video.mov
- c) imagem.jpeg

Saida experada:
- 1 .jpeg
- 2 .mov
- 3 .mp4

## Exercício 4
Você tem um site de imóveis e deseja criar uma página para listar todos os imóveis que estejam publicados no CMS. Como você faria para listar?
- a. Criaria uma consulta no banco de dados usando Dynamic Query do Database API;
- b. Criaria uma hook_preprocess para buscar todas as entidades do tipo node;
- c. Criaria uma views para listar os conteúdos e controlar o filtro;
- d. Usaria o Block node para inserir esses nodes em blocks na página.

## Exercício 5
Nos content types "Article" e "News" você precisa criar uma nova seção que terá 3 novos fields: "Titulo", "Descrição" e "Imagem". Como você faria isso?
- a. Iria em Structure » Content Types » Articles » Manage Fields e adicionaria os fields. Em seguida faria o mesmo para o Content Type "News";
- b. Usaria o Field Collection para criar os fields e depois reutilizar nos Content Types;
- c. Criaria um novo Paragraph Type e depois reutilizaria nos lugares onde necessário;
- d. Criaria um Block Type com os fields e posicionaria esse bloco com visibilidade apenas para "Article" e "News".

## Exercício 6
Você criou várias configs novas e precisa exportar para os ambientes de stage e produção. Porém, o módulo Shield você quer que seja habilitado apenas no ambiente de stage mas não em produção. Descreva, como você faria isso?

## Exercício 7
Acesse o simplytest.me e crie uma sandbox Drupal simples. Em seguida faça o seguinte:
- a. Crie um node com alias /hello-world;
- b. Esse node deve estar disponível para usuário anônimo;
- c. Posicione um bloco com o texto "Hello World" que deve ser visível apenas para usuários com a role "administrator";
- d. Compartilhe conosco a URL da sua sandbox com o usuário para testarmos.