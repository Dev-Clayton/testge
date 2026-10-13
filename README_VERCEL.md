# Mega Canais TV — preparação para Vercel

Este pacote mantém a aplicação PHP existente e adiciona adaptadores para o runtime comunitário `vercel-php`.

## Estrutura

- `index.php`, `guia.php`: páginas PHP originais.
- `api.php`, `epg.php`, `events.php`: endpoints PHP originais que consultam as APIs de canais, programação e eventos.
- `api/`: pontos de entrada para as funções PHP na Vercel.
- `vercel.json`: runtime PHP e rotas públicas para as funções em `api/`. 
- `assets/logos/`: imagens locais dos canais.
- `COMPATIBILIDADE.md`: notas de compatibilidade e checklist de acessibilidade.

## Publicar pelo navegador

1. Extraia este ZIP para uma pasta no computador.
2. No GitHub, crie um repositório novo e envie **o conteúdo desta pasta** para a raiz do repositório. Não envie uma pasta extra envolvendo tudo.
3. Na Vercel, escolha **Add New → Project**, importe o repositório e mantenha o diretório raiz como `./`.
4. O arquivo `vercel.json` define o runtime comunitário PHP; não configure o projeto como Next.js.
5. Faça o deploy e abra as rotas abaixo para validar:
   - `/` — página inicial;
   - `/` — página inicial (executada por `api/index.php`);
   - `/api/guia.php` — guia de programação;
   - `/api/api.php` — JSON dos canais;
   - `/api/epg.php` — JSON do EPG;
   - `/api/events.php` — JSON dos eventos.

   As rotas antigas `/guia.php`, `/api.php`, `/epg.php` e `/events.php` também são encaminhadas pelo `vercel.json`.

## Importante sobre PHP na Vercel

A Vercel não lista PHP entre seus runtimes oficiais; este pacote usa o runtime comunitário `vercel-php@0.9.0`. A configuração pode depender de mudanças de compatibilidade do runtime e deve ser confirmada no primeiro deploy. A execução PHP é feita como funções serverless; arquivos temporários não são armazenamento persistente. O cache de EPG em `/tmp` é apenas temporário e pode desaparecer entre execuções.

## Teste local opcional

Com PHP instalado, na raiz do projeto execute:

```bash
php -S 127.0.0.1:8000
```

Depois abra `http://127.0.0.1:8000/`. O servidor local serve a estrutura original; os rewrites de `vercel.json` são aplicados somente na Vercel.

## Checklist após o deploy

- [ ] A home abre sem erro 500.
- [ ] `/api/api.php` retorna JSON com `channels`.
- [ ] `/api/epg.php` retorna JSON de programação (pode retornar `[]` se a fonte externa falhar).
- [ ] `/api/events.php` retorna uma lista JSON ou uma mensagem de erro JSON.
- [ ] `/guia.php` carrega e os filtros/paginação funcionam.
- [ ] Logos em `assets/logos/` carregam.
- [ ] Verificar os logs das funções na Vercel se uma API externa não responder.

A disponibilidade do site depende também das APIs externas e das regras de incorporação dos provedores de vídeo. Nenhum deploy é considerado validado até que a URL real seja testada.
