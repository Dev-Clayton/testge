# Compatibilidade, acessibilidade e desempenho — Mega Canais TV

## Estrutura de pastas

- `index.php` — página principal, filtros, grade de canais e player.
- `guia.php` — guia EPG com pesquisa, filtro por data, ordenação e paginação.
- `api.php` — endpoint PHP que consulta/normaliza a lista de canais.
- `epg.php` — endpoint PHP para dados de programação.
- `events.php` — endpoint PHP de eventos em destaque.
- `assets/logos/` — logos locais do projeto.
- `README.txt` — instruções existentes para instalação/uso.
- `COMPATIBILIDADE.md` — este documento: matriz, breakpoints e checklist.

## Compatibilidade-alvo

- **Alvo principal:** Chrome e Edge atuais, Firefox atual, Safari macOS/iOS atual e Samsung Internet atual.
- **Compatibilidade estendida:** Chrome 60+, Firefox 60+ e Safari 12+ para a estrutura visual e funcionalidades essenciais do guia. O player depende de recursos disponíveis no navegador e do suporte do provedor de transmissão.
- **IE11:** não é alvo de suporte garantido. Para adicioná-lo seria necessário um build de JavaScript transpilado (Babel), polyfills e testes específicos; a incorporação de players externos também pode impedir suporte completo.
- Os scripts inline ficam no final do `body`, para não bloquear a renderização inicial. O JavaScript usa `fetch`, `Promise`, `Set`, `Object.entries`, `String.normalize` e outras APIs modernas; navegadores muito antigos podem precisar de polyfills.

## Progressive enhancement e limites atuais

O HTML mantém links navegáveis e inclui aviso quando JavaScript está desativado. Entretanto, a grade de canais, filtros, player, eventos e os dados EPG são preenchidos dinamicamente por JavaScript/API. **Sem JavaScript, esses recursos dinâmicos não ficam plenamente funcionais**; uma experiência verdadeiramente sem JS exigiria renderização dos canais no PHP no servidor e um fallback de programação em HTML. Não é correto prometer funcionamento completo sem JS enquanto os dados vêm das APIs dinâmicas.

O CSS adiciona reset básico, foco visível, link para pular ao conteúdo, fallbacks para algumas propriedades modernas, `@supports`, respeito a `prefers-reduced-motion` e uma preferência clara/escura limitada ao link de acessibilidade. A identidade visual principal permanece escura. Variáveis CSS e recursos modernos devem ser progressivamente melhorados, nunca ser a única forma de transmitir conteúdo essencial.

## Breakpoints usados e motivo

| Breakpoint | Uso | Motivo |
|---|---|---|
| `max-width: 420px` | Guia/player | Ajustar controles e grade em celulares muito estreitos. |
| `max-width: 540px` / `560px` | Página principal/guia | Colocar filtros em coluna e manter alvos de toque legíveis. |
| `max-width: 700px` / `760px` | Layouts de página | Uma coluna para cards e controles empilhados em telas móveis/tablets estreitos. |
| `max-width: 850px` | Carrossel de eventos | Mostrar menos cards por linha quando o espaço horizontal diminui. |
| `min-width: 1200px` | Grade de canais | Aproveitar o espaço em desktop sem alargar excessivamente cada card. |
| `min-width: 1280px` com ponteiro de toque/sem hover | TV e WebView | Aumentar texto e alvos para navegação por controle remoto/toque. |
| `min-width: 1500px` / `1800px` | Grade ampla | Ajustar paginação e largura máxima em monitores grandes. |

Os breakpoints são regras de layout, não uma lista de dispositivos fixos; testar também em larguras intermediárias.

## Matriz de compatibilidade

| Recurso | Navegadores | Fallback/observação |
|---|---|---|
| HTML semântico (`header`, `main`, `nav`, `section`, `footer`) | Navegadores modernos e versões-alvo | Estrutura HTML nativa, sem dependência de framework. |
| Reset e `box-sizing` | Todos os navegadores-alvo | Reset básico declarado no CSS. |
| Variáveis CSS (`var`) | Chrome/Edge atuais, Firefox, Safari 12+ | Há cores base em algumas regras; revisar cada nova declaração para adicionar `var(--token, valor)` quando necessária. IE11 não suporta custom properties. |
| `@supports` | Navegadores modernos; suporte varia nas versões antigas | Declarações base permanecem antes das melhorias progressivas. |
| `backdrop-filter` | Navegadores modernos compatíveis | Decoração opcional; a cor de fundo continua definida sem blur. Prefixo `-webkit-` incluído. |
| `clamp()` | Navegadores modernos | Tamanho fixo declarado antes de `clamp()` nos títulos principais. |
| `prefers-reduced-motion` | Navegadores modernos | Animações/transições são reduzidas ou desativadas quando solicitado. |
| `prefers-color-scheme` | Navegadores modernos | Não altera o tema central do site; regra aplicada ao link de acessibilidade. |
| `:focus-visible` | Navegadores modernos | Regras `:focus` anteriores mantêm foco visível em versões sem suporte. |
| `loading="lazy"` e `decoding="async"` em imagens | Navegadores modernos | São otimizações; o navegador pode ignorar atributos desconhecidos sem quebrar o conteúdo. |
| `fetch`/`Promise`/`async` | Navegadores modernos e maioria das versões-alvo | Para navegadores antigos, incluir polyfills e transpilar com Babel em um build de produção. |
| JSON-LD, Open Graph e descrição | Motores de busca e crawlers compatíveis | Metadados básicos sem URL canônica ou imagem inventada; definir URL/imagem finais quando o domínio estiver confirmado. |
| Fonte externa Font Awesome | Navegadores com conexão à CDN | Ícones decorativos podem não aparecer offline; os rótulos de texto continuam disponíveis. |
| Player via `iframe` | Depende do navegador, provedor, rede e permissões | Mensagem de erro e possibilidade de tentar outra fonte; não é possível garantir reprodução de fontes externas. |

## Acessibilidade WCAG 2.1 AA — checklist

- [x] Documento com idioma `pt-BR` e regiões semânticas principais.
- [x] Link “Pular para o conteúdo” e estilos de foco visível.
- [x] Campos de pesquisa e filtros com nomes acessíveis (`aria-label`).
- [x] Atualizações dinâmicas com regiões `aria-live` em pontos relevantes.
- [x] Ícones SVG decorativos marcados com `aria-hidden="true"` em componentes existentes.
- [x] Preferência `prefers-reduced-motion` para reduzir animações.
- [ ] Auditar contraste de **todos** os estados, textos pequenos e controles com axe/Lighthouse; não declarar conformidade AA total sem auditoria.
- [ ] Revisar alt text de cada logo/imagem conforme seu contexto (logos decorativos podem usar `alt=""`; imagens informativas precisam de texto alternativo).
- [ ] Testar operação integral do player apenas por teclado, leitor de tela e controle remoto; corrigir foco/modal conforme os resultados.
- [ ] Implementar foco preso/restaurado no modal do player se testes mostrarem que o teclado pode escapar para o conteúdo de fundo.

## SEO e performance

- Meta description, theme color, Open Graph básico, Twitter card e JSON-LD sem URL fictícia foram adicionados.
- CSS crítico permanece inline e os scripts ficam no final do documento; como são scripts inline, `defer` não se aplica da mesma forma que a um arquivo externo.
- Fontes do sistema são usadas como fallback; não há fonte web personalizada que precise de `font-display: swap`.
- Logos atuais são PNG. Converter para WebP/AVIF deve ser feito com fallback real em `picture` e após verificar qualidade/tamanho; não se converteu automaticamente para evitar links de imagem quebrados.
- Lighthouse acima de 90 em todas as categorias é uma **meta de validação**, não uma pontuação garantida sem executar Lighthouse no servidor publicado. A API externa, CDN de ícones, player de terceiros e scripts dinâmicos podem afetar a pontuação.

## Checklist de testes antes de publicar

1. Instalar em XAMPP e abrir `http://localhost/tvtheme/`; confirmar que `api.php`, `epg.php` e `events.php` respondem corretamente.
2. Chrome/Edge DevTools: console sem erros, Network sem 404, throttling Fast 3G/Slow 4G, CPU throttling e teste de cache.
3. Firefox atual: pesquisa, filtros, paginação, modal do player e retorno ao topo.
4. Safari macOS e Safari iOS reais/simulados: orientação retrato/paisagem, rolagem, fullscreen e reprodução externa.
5. Samsung Internet em Android: toque, scroll horizontal do carrossel, filtros e player.
6. Testar larguras de 320, 375, 390, 540, 700, 760, 850, 1024, 1280, 1500 e 1920 px, além de zoom 200%.
7. Desativar JavaScript e confirmar que o aviso aparece e os links estáticos continuam navegáveis; registrar que os dados dinâmicos não estarão disponíveis.
8. Ativar “reduzir movimento” no sistema e verificar que animações deixam de distrair.
9. Navegar só com teclado (Tab, Shift+Tab, Enter, Espaço e Escape); conferir foco, ordem e saída do modal.
10. Executar Lighthouse para Performance, Accessibility, Best Practices e SEO; testar axe DevTools/WAVE e validar JSON-LD com Rich Results Test/Schema Markup Validator.
11. Usar BrowserStack para Safari/iOS, Samsung Internet e combinações de versões que não existam fisicamente; confirmar em dispositivos reais antes de liberar.
12. Validar URLs e conteúdo de Open Graph após publicar no domínio definitivo e configurar HTTPS/cache/compressão no servidor.

## Decisões técnicas

- Evitar adicionar frameworks ou bibliotecas pesadas apenas para animações e foco: o site segue em PHP, CSS e JavaScript nativos.
- As melhorias são progressivas; efeitos visuais não devem ser necessários para entender ou usar os controles.
- A pontuação Lighthouse, o suporte integral sem JS e o nível WCAG AA precisam de testes reais; este documento separa implementações feitas de validações ainda pendentes.
