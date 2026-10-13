TV Online HD — Opções de transmissão no player

A lista geral de canais vem somente da API principal (EmbedTV).

No player:
- Opção 1 · API principal: usa a URL já fornecida pela API principal para o canal.
- Opção 2 · Rei dos Canais: disponível especificamente para Adult Swim, usando https://rdcanais.org/adultswim.

A API 2 não é consultada para importar uma lista completa de canais. Apenas a fonte alternativa específica de Adult Swim é adicionada. Se Adult Swim não existir na lista principal, somente esse canal específico é acrescentado para que a opção 2 possa ser acessada.

Vercel: a página inicial usa `/`; os endpoints são `/api/api.php` (canais), `/api/epg.php` (programação) e `/api/events.php` (eventos). Os adaptadores em `api/` executam os PHP originais da raiz. Para instalação PHP tradicional, `api.php` continua sendo o endpoint original.
A reprodução depende de o provedor permitir incorporação em iframe.

Atualização de layout: seletor de transmissão com destaque visual no topo do player; removido o botão de abrir transmissão em nova aba. A opção alternativa Adult Swim é associada ao canal mesmo quando o ID contém hífen, espaço ou variação de maiúsculas/minúsculas.


Atualização de interface responsiva:
- Adicionada paginação com botões Anterior e Próximo.
- A paginação volta para a primeira página ao pesquisar ou mudar de categoria.
- Quantidade por página adaptada ao tamanho da tela: 24 em celulares, 48 em telas comuns, até 60 em telas grandes; TVs/WebViews com entrada por toque/controle usam alvos maiores.
- Logos usam carregamento lazy e decoding assíncrono.
- Foco visível e botões grandes para navegação por teclado/controle remoto.
Instalação: faça backup da pasta tvtheme e substitua pelos arquivos deste ZIP.

Guia EPG separado: abra guia.php. A paginação exibe 8 canais por página e, por padrão, até 8 programas por canal; o botão Mostrar todos expande a programação daquele canal. Isso reduz a quantidade de elementos renderizados e ajuda a evitar travamentos.
