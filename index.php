<?php ?><!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Mega Canais TV</title><meta name="description" content="Encontre canais, navegue por categorias e consulte a programação disponível no Mega Canais TV."><meta name="theme-color" content="#100f0d"><meta property="og:type" content="website"><meta property="og:title" content="Mega Canais TV — Canais ao vivo e programação"><meta property="og:description" content="Encontre canais, navegue por categorias e consulte a programação disponível no Mega Canais TV."><meta name="twitter:card" content="summary"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"><style>
:root{color-scheme:dark}*{box-sizing:border-box}body{margin:0;background:#080d17;color:#f8fafc;font:15px system-ui,Arial}.wrap{max-width:1400px;margin:auto;padding:24px}header{display:flex;justify-content:space-between;align-items:center;padding-bottom:22px;border-bottom:1px solid #263247}.brand{font-size:22px;font-weight:900}.brand span{color:#fb5266}.status{color:#9caec4;font-size:13px}.hero{padding:30px 0 20px}.hero h1{margin:0 0 8px;font-size:42px;font-size:clamp(28px,4vw,42px)}.hero p{color:#9caec4;margin:0}.tools{display:flex;gap:10px;flex-wrap:wrap;margin:20px 0}.tools input{flex:1;min-width:220px;padding:13px 15px;border-radius:10px;border:1px solid #334155;background:#111827;color:white;font:inherit}.filters{display:flex;gap:8px;overflow:auto;padding:0 0 20px}.filter,.btn{border:1px solid #344256;background:#141e2d;color:#e2e8f0;padding:10px 14px;border-radius:9px;cursor:pointer;font-weight:700;white-space:nowrap}.filter.active,.btn.primary{background:#e63950;border-color:#e63950;color:white}.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(150px,1fr));gap:12px}.channel{min-height:140px;background:#111a29;border:1px solid #26364d;border-radius:13px;padding:13px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px;color:white;cursor:pointer}.channel:hover{border-color:#fb5266;transform:translateY(-2px)}.channel img{width:100%;height:76px;object-fit:contain}.channel strong{text-align:center;font-size:12px}.note{color:#aab7c9;margin:20px 0}@media(max-width:540px){.wrap{padding:15px}.grid{grid-template-columns:repeat(2,minmax(0,1fr))}.status{display:none}}

.overlay{display:none;position:fixed;inset:0;background:#000;z-index:20}.overlay.show{display:block}
.access-gate{position:absolute;inset:0;z-index:10;display:flex;align-items:center;justify-content:center;text-align:center;padding:24px;background:radial-gradient(ellipse at center,#172338 0%,#05080e 75%)}.access-box{width:min(440px,100%);padding:30px 24px;border:1px solid #344256;border-radius:18px;background:#101827;box-shadow:0 20px 70px #0009}.access-box h2{margin:0 0 10px;font-size:26px}.access-box p{color:#aab7c9;line-height:1.5}.access-btn{border:0;border-radius:10px;background:#e63950;color:#fff;padding:14px 20px;font:700 16px system-ui;cursor:pointer}.access-btn:hover{background:#fb5266}.access-hint{display:block;margin-top:12px;color:#9caec4;font-size:12px}
.player{position:absolute;inset:0;background:#000;overflow:hidden}
.video{position:absolute;inset:0}.video iframe{width:100%;height:100%;border:0;background:#000}
.ui{position:absolute;z-index:2;transition:opacity .3s,transform .3s}
.player.idle .ui{opacity:0;pointer-events:none}.player.idle{cursor:none}
.top{top:16px;left:16px;display:flex;gap:9px;align-items:center;max-width:calc(100% - 32px);flex-wrap:wrap}
.side{left:50%;right:auto;top:auto;bottom:18px;transform:translateX(-50%);display:flex;flex-direction:row;align-items:center;gap:8px;padding:9px;border:1px solid #ffffff25;border-radius:16px;background:#080d17d9;backdrop-filter:blur(14px);box-shadow:0 12px 36px #0008}
.player.idle .side{transform:translateX(-50%) translateY(12px)}
.pbtn{width:42px;height:42px;display:grid;place-items:center;padding:0;border:1px solid #ffffff2e;border-radius:10px;background:#0b0f16d9;color:#fff;cursor:pointer;backdrop-filter:blur(8px)}
.pbtn:hover{background:#29364b;border-color:#fb5266;transform:translateY(-1px)}.pbtn:focus-visible{outline:2px solid #fff;outline-offset:2px}
.pbtn svg{width:18px;height:18px;stroke:currentColor;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.gap{height:6px}
.source-select{display:block;height:42px;max-width:260px;min-width:190px;padding:0 34px 0 12px;border:1px solid #fb5266;border-radius:11px;background:#151e2c;color:#fff;font:700 13px system-ui;box-shadow:0 5px 20px #0005;cursor:pointer;outline:none}.source-select:focus-visible{outline:2px solid #fb5266;outline-offset:2px}.source-select option{background:#111827;color:#fff}.pill{display:flex;align-items:center;gap:10px;height:42px;padding:0 14px;border:1px solid #ffffff2e;border-radius:11px;background:#0b0f16e8;font-weight:700;font-size:14px;backdrop-filter:blur(10px);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.dot{flex:none;width:8px;height:8px;border-radius:50%;background:#ff3b4e;box-shadow:0 0 8px #ff3b4e}
.info{left:16px;bottom:16px;display:flex;gap:10px}
.card{min-width:150px;max-width:260px;padding:9px 13px;border:1px solid #ffffff2e;border-radius:10px;background:#0b0f16d9;backdrop-filter:blur(8px)}
.card small span{font-weight:500;color:#9fb0c6;margin-left:4px}.prog{height:2px;margin-top:7px;border-radius:2px;background:#ffffff26;overflow:hidden}.prog i{display:block;height:100%;width:0;background:#ff3b4e}.card small{display:block;font-size:10px;font-weight:700;color:#4da3ff;margin-bottom:3px}.card.next small{color:#9fb0c6}
.card b{display:block;font-size:13px;font-weight:600;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.error{position:absolute;inset:0;z-index:1;display:none;align-items:center;justify-content:center;text-align:center;padding:24px;color:#fecaca}
@media(max-width:540px){.pbtn,.pill{height:38px}.pbtn{width:38px}.side{bottom:10px;gap:6px;padding:6px;max-width:calc(100% - 16px)}.top{left:10px;top:10px;max-width:calc(100% - 20px)}.top .pill{max-width:36vw;padding:0 9px}.source-select{max-width:42vw;min-width:145px;height:38px;font-size:12px}.info{left:10px;bottom:64px}.card{min-width:0;max-width:44vw}}
@media(prefers-reduced-motion:reduce){.ui{transition:none}}

/* Frontend Design refresh: editorial TV identity, clearer hierarchy, deliberate controls */
:root{color-scheme:dark;--bg:#07151b;--panel:#0d222b;--panel-2:#102b35;--line:#24434d;--text:#effbff;--muted:#9ab5bf;--accent:#25d6c5;--accent-2:#68a7ff;--danger:#ff647c}
body{background:radial-gradient(ellipse at 78% -15%,#123844 0,transparent 42%),var(--bg);color:var(--text);font-family:Inter,"Segoe UI",system-ui,sans-serif;letter-spacing:-.01em}
.wrap{max-width:1480px;padding:26px clamp(16px,3vw,42px) 48px}
header{padding:0 0 18px;border-bottom:1px solid var(--line)}
.brand{display:flex;align-items:center;gap:9px;font-size:19px;letter-spacing:.015em}
.brand:before{content:"";width:11px;height:11px;border-radius:3px;background:var(--accent);box-shadow:0 0 20px #25d6c577;transform:rotate(45deg)}
.brand span{color:var(--accent)}
.status{color:var(--muted);font-size:12px}
.hero{padding:34px 0 17px}.hero h1{font-size:clamp(30px,4.2vw,48px);letter-spacing:-.045em;line-height:1.08;font-weight:760;margin-bottom:12px;max-width:720px}.hero p{color:var(--muted);max-width:680px;line-height:1.65;font-size:14px}
.tools{margin:22px 0 15px;align-items:center}.tools input{min-height:48px;border-radius:12px;border:1px solid var(--line);background:#0c2028;padding:0 16px;outline:none}.tools input:focus{border-color:var(--accent);box-shadow:0 0 0 3px #25d6c51c}
.filters{gap:8px;padding-bottom:22px;scrollbar-width:thin}.filter{background:transparent;border-color:var(--line);color:#b5cbd2;padding:9px 14px;border-radius:999px;font-size:12px;transition:background .18s,border-color .18s,color .18s}.filter:hover{border-color:#4a7884;color:#fff}.filter.active,.btn.primary{background:var(--accent);border-color:var(--accent);color:#052127}
.grid{grid-template-columns:repeat(auto-fill,minmax(156px,1fr));gap:13px}.channel{min-height:154px;background:linear-gradient(145deg,#102832,#0a1c24 80%);border:1px solid #1c3943;border-radius:14px;padding:17px 13px 14px;gap:15px;transition:transform .18s ease,border-color .18s ease,background .18s ease;box-shadow:0 7px 22px #00000012}.channel:hover{border-color:#25d6c5;transform:translateY(-3px);background:linear-gradient(145deg,#153741,#0a1c24 80%)}.channel:focus-visible,.filter:focus-visible,.btn:focus-visible{outline:2px solid var(--accent);outline-offset:3px}.channel img{height:82px;max-width:100%;filter:drop-shadow(0 5px 12px #0004)}.channel strong{font-size:12px;letter-spacing:.005em;line-height:1.4}
.note{color:var(--muted);font-size:13px;line-height:1.6}
.overlay{background:#02070a}.player{background:#020507}.video iframe{background:#020507}
.access-gate{background:radial-gradient(ellipse at 50% 30%,#123b45 0%,#07151b 55%,#020608 100%)}.access-box{background:linear-gradient(150deg,#102832,#091a21);border:1px solid #2c535e;border-radius:22px;padding:34px 28px;box-shadow:0 30px 100px #0009}.access-box h2{font-size:29px;letter-spacing:-.035em}.access-box p{font-size:14px;color:#aac3cb;line-height:1.7}.access-btn{background:var(--accent);color:#052127;border-radius:12px;padding:14px 24px;box-shadow:0 8px 26px #25d6c522;transition:transform .18s,background .18s}.access-btn:hover{background:#65f1e3;transform:translateY(-1px)}.access-hint{color:#8eabb5;line-height:1.5}
.top{top:18px;left:18px;gap:10px;max-width:calc(100% - 36px)}.pill{background:#07151beF;border-color:#31515a;max-width:min(320px,35vw);height:44px;border-radius:12px}.dot{background:var(--accent);box-shadow:0 0 10px #25d6c5aa}.source-select{height:44px;min-width:225px;max-width:min(320px,42vw);border-color:#347e83;background:#0b222a;color:#f0ffff;border-radius:12px;font-size:13px;padding-left:14px;box-shadow:0 8px 24px #0005}.source-select:hover{border-color:var(--accent)}.source-select:focus-visible{outline:2px solid var(--accent);outline-offset:3px}
.side{bottom:18px;gap:7px;padding:8px;background:#07151bed;border-color:#31515acc;border-radius:15px;box-shadow:0 12px 38px #0008}.pbtn{width:44px;height:44px;background:#102832;border-color:#31515a;border-radius:11px;transition:background .16s,border-color .16s,transform .16s}.pbtn:hover{background:#1a414b;border-color:var(--accent);transform:translateY(-1px)}.pbtn:focus-visible{outline:2px solid var(--accent);outline-offset:3px}
.info{left:18px;bottom:18px;gap:9px}.card{background:#07151bed;border-color:#31515acc;border-radius:12px;backdrop-filter:blur(14px);padding:11px 14px}.card small{color:var(--accent-2);font-size:10px;letter-spacing:.02em}.card small span{color:#9ab5bf}.card.next small{color:#9ab5bf}.card b{font-size:12px;color:#effbff}.prog i{background:var(--accent)}
.error{background:#02070a99;font-size:14px;line-height:1.6}
@media(max-width:700px){.wrap{padding:18px 14px 34px}.hero{padding-top:28px}.hero h1{font-size:32px}.grid{grid-template-columns:repeat(2,minmax(0,1fr));gap:10px}.channel{min-height:138px;padding:13px 10px}.channel img{height:70px}.top{top:10px;left:10px;right:10px;max-width:none;gap:7px}.top .pill{max-width:calc(100vw - 210px);height:39px;padding:0 10px;font-size:12px}.source-select{height:39px;min-width:0;max-width:none;flex:1;width:150px;font-size:11px;padding:0 24px 0 9px}.side{bottom:10px;left:50%;max-width:calc(100% - 20px);gap:5px;padding:6px}.pbtn{height:39px;width:39px}.info{left:10px;bottom:62px;right:10px;gap:6px}.card{flex:1;min-width:0;max-width:none;padding:8px 10px}.card b{font-size:11px}.card small{font-size:9px}.access-box{padding:28px 22px}}
@media(max-width:380px){.top{flex-wrap:wrap}.top .pill{max-width:calc(100% - 48px);flex:1}.source-select{flex-basis:100%;width:100%;max-width:100%;order:3}.side{gap:4px}.pbtn{width:36px;height:36px}.info{bottom:57px}}
@media(prefers-reduced-motion:reduce){*,*::before,*::after{transition:none!important;scroll-behavior:auto!important}}


/* Tema editorial: preto, branco e caramelo */
:root{color-scheme:dark;--bg:#0b0b0a;--panel:#151412;--panel-2:#201d18;--line:#39342b;--text:#f7f5f0;--muted:#b5afa3;--accent:#c58b52;--accent-2:#e0b47d;--danger:#d7a06a}
body{background:var(--bg);color:var(--text);font-family:Inter,"Segoe UI",Arial,sans-serif;letter-spacing:0}
.brand:before{background:var(--accent);box-shadow:none;transform:none;border-radius:2px;width:10px;height:18px}
.brand span{color:var(--accent-2)}
header{border-color:var(--line)}.status,.hero p,.note{color:var(--muted)}
.tools input{background:#121210;border-color:#494236;color:var(--text);border-radius:7px}.tools input:focus{border-color:var(--accent);box-shadow:0 0 0 2px #c58b5228}
.filter,.btn{background:#171613;border-color:#484033;color:#e9e4da;border-radius:6px}.filter:hover,.btn:hover{border-color:var(--accent);color:#fff}.filter.active,.btn.primary{background:var(--accent);border-color:var(--accent);color:#17110a}
.channel{background:#141310;border-color:#302d27;border-radius:8px;box-shadow:none;transition:border-color .15s,background .15s}.channel:hover{background:#1c1914;border-color:var(--accent);transform:translateY(-2px)}.channel:focus-visible,.filter:focus-visible,.btn:focus-visible{outline:2px solid var(--accent-2);outline-offset:3px}
.overlay{background:#000}.access-gate{background:radial-gradient(ellipse at 50% 35%,#292016 0%,#0b0b0a 65%)}.access-box{background:#151310;border:1px solid #51412e;border-radius:10px;box-shadow:0 22px 70px #000b}.access-box h2{letter-spacing:0}.access-box p{color:#c8c0b3}.access-btn{background:var(--accent);color:#17110a;border-radius:6px;box-shadow:none}.access-btn:hover{background:var(--accent-2)}.access-hint{color:#b5afa3}
.top{gap:8px}.pill{background:#11110f;border-color:#4b4030;border-radius:7px}.dot{background:var(--accent);box-shadow:none}.source-select{background:#171613;border:1px solid #8b633b;color:#f7f5f0;border-radius:7px;box-shadow:none}.source-select:hover,.source-select:focus-visible{border-color:var(--accent-2);outline-color:var(--accent-2)}.source-select option{background:#171613;color:#f7f5f0}
.side{background:#10100fee;border:1px solid #4b4030;border-radius:9px;box-shadow:0 8px 28px #0009;backdrop-filter:blur(10px)}.pbtn{background:#1b1915;border-color:#514635;border-radius:7px;backdrop-filter:none}.pbtn:hover{background:#30271c;border-color:var(--accent);transform:none}.pbtn:focus-visible{outline-color:var(--accent-2)}
.card{background:#11110ff2;border-color:#4b4030;border-radius:7px;backdrop-filter:blur(8px)}.card small{color:var(--accent-2);font-size:10px;letter-spacing:.04em}.card small span{color:#b5afa3}.card.next small{color:#b5afa3}.card b{color:#f7f5f0;font-size:13px;line-height:1.4}.prog{height:5px;margin-top:9px;background:#383127;border-radius:99px}.prog i{background:linear-gradient(90deg,#9b6737,#e0b47d);border-radius:99px;transition:width .5s linear}
.error{color:#f1d5b6}
@media(max-width:700px){.wrap{padding:16px 13px 32px}.hero{padding:26px 0 12px}.hero h1{font-size:clamp(27px,8vw,38px)}.grid{grid-template-columns:repeat(2,minmax(0,1fr));gap:9px}.channel{min-height:128px;padding:12px 9px}.channel img{height:65px}.tools input{min-width:0;width:100%}.tools{gap:8px}.filters{padding-bottom:16px}.top{left:9px;top:9px;max-width:calc(100% - 18px);gap:6px}.top .pill{max-width:calc(100vw - 210px);font-size:12px}.source-select{min-width:0;width:auto;max-width:48vw;padding:0 26px 0 8px;font-size:11px}.side{bottom:9px;gap:5px;padding:5px;max-width:calc(100% - 16px)}.pbtn{width:38px;height:38px}.info{left:9px;right:9px;bottom:59px;gap:6px}.card{flex:1;min-width:0;max-width:none;padding:8px 9px}.card b{font-size:12px}.card small{font-size:9px}.prog{height:4px;margin-top:7px}}
@media(max-width:380px){.top .pill{max-width:34vw}.source-select{max-width:45vw}.side{gap:4px}.pbtn{width:35px;height:35px}.info{bottom:54px}.card{padding:7px}.card b{font-size:11px}}
@media(prefers-reduced-motion:reduce){*,*::before,*::after{scroll-behavior:auto!important;transition:none!important;animation:none!important}}


/* Mega Canais TV — identidade preto, branco e caramelo */
:root{--bg:#100f0d;--panel:#191714;--panel-2:#242019;--line:#393229;--text:#f8f6f1;--muted:#b9b1a5;--accent:#c58b52;--accent-2:#e0b47d;--danger:#b86d3e}
body{background:radial-gradient(ellipse at 78% -15%,#33271a 0,transparent 43%),var(--bg);color:var(--text)}
.brand span{color:var(--accent-2)}.brand:before{background:var(--accent);box-shadow:none}
.hero p,.status,.note{color:var(--muted)}
.tools input{background:#171512;border-color:var(--line)}.tools input:focus{border-color:var(--accent);box-shadow:0 0 0 3px #c58b521c}
.filter{background:#191714;border-color:#393229;color:#d7d0c5}.filter:hover{border-color:#a8794b}.filter.active,.btn.primary{background:var(--accent);border-color:var(--accent);color:#17110b}
.channel{background:linear-gradient(145deg,#242019,#15130f 82%);border-color:#393229;box-shadow:none}.channel:hover{border-color:var(--accent);background:linear-gradient(145deg,#30271c,#17130e 82%)}.channel:focus-visible,.filter:focus-visible,.btn:focus-visible{outline-color:var(--accent)}
.events-section{margin:26px 0 30px;padding:20px 0 4px;border-top:1px solid var(--line);border-bottom:1px solid var(--line)}.events-heading{display:flex;align-items:center;justify-content:space-between;gap:14px;margin-bottom:15px}.events-heading h2{margin:0;font-size:clamp(19px,2vw,25px);letter-spacing:-.03em}.events-heading p{margin:5px 0 0;color:var(--muted);font-size:13px}.event-arrows{display:flex;gap:7px;flex:none}.event-arrows button{width:38px;height:38px;border:1px solid var(--line);border-radius:50%;background:#201b15;color:#f7f2e9;font-size:25px;line-height:1;cursor:pointer}.event-arrows button:hover{background:var(--accent);border-color:var(--accent);color:#17110b}.events-track{display:grid;grid-auto-flow:column;grid-auto-columns:minmax(250px,calc((100% - 30px)/3));gap:15px;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:thin;scrollbar-color:#8f633d #211b14;padding:2px 1px 17px}.event-card{scroll-snap-align:start;min-width:0;display:flex;flex-direction:column;gap:13px;text-align:left;padding:16px;border:1px solid #393229;border-radius:15px;background:linear-gradient(145deg,#211d17,#15130f);color:var(--text);cursor:pointer;transition:border-color .18s,transform .18s}.event-card:hover{border-color:var(--accent);transform:translateY(-2px)}.event-card:focus-visible{outline:2px solid var(--accent);outline-offset:3px}.event-meta{display:flex;justify-content:space-between;align-items:center;gap:8px;color:var(--muted);font-size:11px}.event-league{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.event-live{display:inline-flex;align-items:center;gap:5px;color:#e0b47d;font-weight:800;white-space:nowrap}.event-live:before{content:"";width:6px;height:6px;border-radius:50%;background:#c58b52}.event-match{display:grid;grid-template-columns:minmax(0,1fr) auto minmax(0,1fr);align-items:center;gap:9px;min-height:68px}.event-team{min-width:0;display:flex;flex-direction:column;align-items:center;gap:8px;text-align:center;font-size:12px;font-weight:700;line-height:1.3}.event-team img{width:34px;height:34px;object-fit:contain}.event-team span{display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}.event-vs{font-size:11px;font-weight:900;color:#9d8b76}.event-footer{display:flex;justify-content:space-between;align-items:center;gap:8px;padding-top:11px;border-top:1px solid #393229;color:var(--muted);font-size:11px}.event-watch{color:#e0b47d;font-weight:800}.events-loading,.events-empty{padding:20px 2px;color:var(--muted);font-size:13px}
.access-gate{background:radial-gradient(ellipse at 50% 30%,#3a2a1b 0%,#100f0d 55%,#050403 100%)}.access-box{background:linear-gradient(150deg,#292117,#15120e);border-color:#59432c}.access-btn{background:var(--accent);color:#17110b;box-shadow:none}.access-btn:hover{background:#e0b47d}.top .pill{background:#17130fee;border-color:#55412c}.dot{background:var(--accent);box-shadow:0 0 9px #c58b5280}.source-select{border-color:#8f633d;background:#1b1712}.source-select:hover{border-color:var(--accent)}.side{background:#17130fee;border-color:#55412ccc}.pbtn{background:#252019;border-color:#55412c}.pbtn:hover{background:#3a2c1d;border-color:var(--accent)}.card{background:#17130fee;border-color:#55412c}.card small{color:#e0b47d}.prog i{background:var(--accent)}
@media(max-width:850px){.events-track{grid-auto-columns:minmax(245px,calc((100% - 15px)/2))}}
@media(max-width:560px){.events-section{margin:20px 0 24px;padding-top:17px}.events-track{grid-auto-columns:minmax(78%,1fr);gap:11px}.event-card{padding:14px}.events-heading p{font-size:12px}.event-arrows button{width:34px;height:34px}}
@media(prefers-reduced-motion:reduce){.event-card{transition:none}}


/* Footer e atalhos */
.site-footer{padding:26px 16px 30px;text-align:center;border-top:1px solid var(--line);color:var(--muted);font-size:13px;line-height:1.8}
.site-footer p{margin:0 0 10px}
.telegram-link{display:inline-flex;align-items:center;justify-content:center;gap:8px;color:var(--text);text-decoration:none;padding:8px 13px;border:1px solid var(--line);border-radius:999px;transition:border-color .2s,background .2s}
.telegram-link:hover{border-color:#2aabee;background:#2aabee16}
.telegram-link svg{width:18px;height:18px;fill:#2aabee;flex:none}
.back-to-top{position:fixed;right:22px;bottom:22px;z-index:15;width:44px;height:44px;display:grid;place-items:center;border:1px solid #6f553b;border-radius:50%;background:#211a13;color:#f4d2ad;box-shadow:0 8px 24px #0006;cursor:pointer;opacity:0;visibility:hidden;transform:translateY(8px);transition:opacity .2s,visibility .2s,transform .2s,background .2s}
.back-to-top.visible{opacity:1;visibility:visible;transform:translateY(0)}
.back-to-top:hover{background:#3a2b1d}
.back-to-top svg{width:20px;height:20px;fill:none;stroke:currentColor;stroke-width:2.2;stroke-linecap:round;stroke-linejoin:round}
@media(max-width:560px){.site-footer{padding:22px 15px 26px}.back-to-top{right:14px;bottom:14px;width:42px;height:42px}}


/* Paginação e adaptação para celulares, computadores, TVs e WebViews */
.pagination{display:flex;align-items:center;justify-content:center;gap:14px;flex-wrap:wrap;margin:24px 0 8px;padding:14px 0;border-top:1px solid var(--line)}
.page-btn{min-width:124px;min-height:44px;padding:10px 16px;border:1px solid var(--line);border-radius:8px;background:var(--panel);color:var(--text);font:700 14px system-ui,sans-serif;cursor:pointer}
.page-btn:hover:not(:disabled),.page-btn:focus-visible{border-color:var(--accent);outline:2px solid transparent;background:var(--panel-2)}
.page-btn:disabled{opacity:.38;cursor:not-allowed}
.page-status{min-width:110px;text-align:center;color:var(--muted);font-size:13px;font-variant-numeric:tabular-nums}
@media(min-width:1200px){.grid{grid-template-columns:repeat(auto-fill,minmax(165px,1fr));gap:16px}}
@media(min-width:1800px){.wrap{max-width:1760px}.grid{grid-template-columns:repeat(auto-fill,minmax(185px,1fr));gap:18px}.channel{min-height:175px}.channel img{height:96px}.channel strong{font-size:14px}}
@media(max-width:700px){.pagination{gap:8px;margin-top:18px}.page-btn{min-width:110px;min-height:46px;padding:10px 12px}.page-status{min-width:82px}}
/* TVs e navegadores WebView: alvos grandes e foco visível para controle remoto */
@media(min-width:1280px) and (pointer:coarse), (min-width:1280px) and (hover:none){
  body{font-size:18px}.wrap{padding:clamp(24px,3vw,56px)}.brand{font-size:26px}
  .tools input{min-height:58px;font-size:18px}.filter{min-height:48px;font-size:15px;padding:12px 18px}
  .channel{min-height:190px;padding:22px 16px;gap:18px}.channel img{height:105px}.channel strong{font-size:16px}
  .page-btn{min-height:58px;min-width:160px;font-size:18px}.page-status{font-size:16px}
  button:focus-visible,input:focus-visible{outline:3px solid var(--accent-2);outline-offset:4px}
}
@media(prefers-reduced-motion:reduce){.channel,.page-btn{transition:none!important;scroll-behavior:auto!important}}



/* Aviso de acesso com botão de download em destaque */
.vpn-notice{display:flex;align-items:center;gap:14px;margin:18px 0 22px;padding:16px 18px;border:1px solid #6f5335;border-radius:15px;background:linear-gradient(110deg,#251b11 0%,#17130f 70%);color:#f7e4ce;box-shadow:0 8px 28px #0002}
.vpn-notice .vpn-icon{display:grid;place-items:center;flex:none;width:38px;height:38px;border-radius:12px;background:#c58b52;color:#1a120b;font-size:22px;font-weight:900}
.vpn-copy{display:flex;flex:1;flex-direction:column;gap:3px;min-width:0}
.vpn-copy strong{font-size:15px;font-weight:850;color:#fff3e5}
.vpn-copy span{font-size:13px;line-height:1.5;color:#c9b7a3}
.vpn-download{display:inline-flex;align-items:center;justify-content:center;gap:8px;flex:none;min-height:44px;padding:0 16px;border-radius:10px;background:#c58b52;color:#1b120a;font-size:13px;font-weight:850;text-decoration:none;white-space:nowrap;transition:background .18s,transform .18s}
.vpn-download svg{width:18px;height:18px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.vpn-download:hover{background:#e0b47d;transform:translateY(-1px)}
.vpn-download:focus-visible{outline:3px solid #f0bd86;outline-offset:3px}
@media(max-width:540px){.vpn-notice{align-items:flex-start;gap:11px;margin:14px 0 18px;padding:13px}.vpn-notice .vpn-icon{width:32px;height:32px;border-radius:9px;font-size:18px}.vpn-copy strong{font-size:14px}.vpn-copy span{font-size:12px}.vpn-download{min-height:40px;padding:0 11px;font-size:12px;align-self:center}.vpn-download svg{width:16px;height:16px}}
@media(max-width:390px){.vpn-notice{flex-wrap:wrap}.vpn-copy{flex:1 1 calc(100% - 48px)}.vpn-download{margin-left:43px}}


/* Guia EPG completa */
#status,#count{display:none!important}
.tools .epg-open{position:relative;isolation:isolate;display:inline-flex;align-items:center;justify-content:center;gap:11px;min-height:48px;padding:12px 19px;border:1px solid rgba(91,226,208,.55);border-radius:13px;background:linear-gradient(135deg,#0e8f88 0%,#126b78 48%,#263e78 100%);color:#fff;text-decoration:none;font-size:14px;font-weight:800;letter-spacing:.15px;box-shadow:0 8px 22px rgba(12,145,139,.23),inset 0 1px 0 rgba(255,255,255,.18);transition:transform .18s ease,box-shadow .18s ease,filter .18s ease}
.tools .epg-open::before{content:none}
.tools .epg-open .fa-calendar-days{font-size:18px;color:#b9fff3}
.tools .epg-open .fa-arrow-up-right-from-square{font-size:11px;opacity:.78;margin-left:1px}
.tools .epg-open:hover{transform:translateY(-2px);filter:brightness(1.12);box-shadow:0 12px 28px rgba(12,145,139,.34),inset 0 1px 0 rgba(255,255,255,.2)}
.tools .epg-open:focus-visible{outline:3px solid #8af4e8;outline-offset:3px}
@media(max-width:600px){.tools .epg-open{width:100%;min-height:50px}}
.epg-view{margin:24px 0 32px;padding:clamp(16px,3vw,28px);border:1px solid #25444d;border-radius:18px;background:linear-gradient(145deg,#0d1d26,#0a111a 72%);box-shadow:0 18px 50px #0003}
.epg-head{display:flex;justify-content:space-between;align-items:flex-start;gap:18px;flex-wrap:wrap;margin-bottom:20px}
.epg-head h2{margin:0 0 7px;font-size:clamp(24px,3vw,34px);letter-spacing:-.03em}.epg-head p{margin:0;color:#9bb4be;max-width:700px;line-height:1.55}
.epg-back{border:1px solid #3a5960;border-radius:10px;background:#142932;color:#e8ffff;padding:11px 15px;font-weight:800;cursor:pointer;white-space:nowrap}
.epg-tools{display:grid;grid-template-columns:minmax(220px,1fr) minmax(180px,260px) auto;gap:10px;margin:18px 0 12px}
.epg-tools input,.epg-tools select{width:100%;min-width:0;padding:13px 14px;border:1px solid #2c4b54;border-radius:10px;background:#101d27;color:#effcff;font:inherit}
.epg-summary{color:#9bb4be;font-size:13px;margin:10px 0 18px}.epg-warning{padding:12px 14px;border:1px solid #66543b;background:#2a2117;color:#f1d5a8;border-radius:10px;margin:12px 0 18px;line-height:1.5}
.epg-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:14px}
.epg-channel{min-width:0;border:1px solid #223c46;border-radius:14px;overflow:hidden;background:#0d1821}
.epg-channel-head{display:flex;align-items:center;gap:12px;padding:14px 15px;background:linear-gradient(110deg,#132b35,#101a24);border-bottom:1px solid #223c46}
.epg-logo{width:48px;height:42px;flex:0 0 48px;object-fit:contain}.epg-channel-title{min-width:0;flex:1}.epg-channel-title strong{display:block;overflow-wrap:anywhere;font-size:14px}.epg-channel-title small{display:block;color:#85a4af;margin-top:4px;font-size:11px}
.epg-play{border:1px solid #3b6c6d;background:#163739;color:#bffff3;border-radius:8px;padding:8px 10px;font-size:12px;font-weight:800;cursor:pointer}
.epg-programs{padding:6px 13px 12px}.epg-program{position:relative;display:grid;grid-template-columns:52px minmax(0,1fr);gap:10px;padding:11px 0;border-bottom:1px solid #1c303a}.epg-program:last-child{border-bottom:0}.epg-program-time{font-size:12px;font-weight:800;color:#6ed8cc;font-variant-numeric:tabular-nums;padding-top:2px}.epg-program h4{font-size:13px;line-height:1.4;margin:0 0 4px;color:#effbff}.epg-program p{font-size:12px;line-height:1.5;margin:0;color:#9ab0ba;overflow-wrap:anywhere}.epg-program.is-now{margin:0 -7px;padding:11px 7px;background:#17322f;border-radius:8px}.epg-program.is-now .epg-program-time::after{content:' AGORA';display:block;font-size:9px;color:#b4ffe9;margin-top:4px}.epg-empty{grid-column:1/-1;text-align:center;padding:30px 18px;color:#a4b7c0;border:1px dashed #36505a;border-radius:12px}
@media(max-width:760px){.epg-grid{grid-template-columns:1fr}.epg-tools{grid-template-columns:1fr 1fr}.epg-tools input{grid-column:1/-1}.epg-head{align-items:stretch}.epg-back{align-self:flex-start}}
@media(max-width:420px){.epg-view{padding:13px;border-radius:13px}.epg-tools{grid-template-columns:1fr}.epg-tools input{grid-column:auto}.epg-channel-head{gap:9px;padding:12px}.epg-logo{width:38px;height:36px;flex-basis:38px}.epg-play{padding:8px;font-size:11px}.epg-program{grid-template-columns:46px minmax(0,1fr);gap:8px}}

</style>
<style>
/* Camada de compatibilidade: reset, fallback de foco e melhorias progressivas. */
html{font-size:100%;-webkit-text-size-adjust:100%;text-size-adjust:100%}
*,*::before,*::after{box-sizing:border-box}
body{margin:0}
button,input,select,textarea{font:inherit}
img,svg,video,iframe{max-width:100%}
a:focus,button:focus,input:focus,select:focus,textarea:focus{outline:2px solid #e0b47d;outline-offset:2px}
.skip-link{position:absolute;z-index:1000;left:8px;top:8px;padding:10px 14px;background:#fff;color:#111;border-radius:4px;transform:translateY(-160%)}
.skip-link:focus{transform:translateY(0)}
:focus-visible{outline:3px solid #e0b47d;outline-offset:3px}
@supports (color:var(--compat-color)){.compat-ready{color:var(--text,#f8f6f1)}}
@supports (backdrop-filter:blur(2px)){.side,.card,.pill{backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px)}}
@media(prefers-color-scheme:light){.skip-link{background:#111;color:#fff}}
@media(prefers-reduced-motion:reduce){html{scroll-behavior:auto!important}*,*::before,*::after{animation-duration:.01ms!important;animation-iteration-count:1!important;transition-duration:.01ms!important}}
@media(max-width:760px){.wrap{padding-left:14px;padding-right:14px}}
</style>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","name":"Mega Canais TV","inLanguage":"pt-BR","description":"Encontre canais, navegue por categorias e consulte a programação disponível no Mega Canais TV."}</script></head><body><a class="skip-link" href="#main-content">Pular para o conteúdo</a><noscript><div style="padding:12px 16px;background:#2a2117;color:#f8f6f1;border-bottom:1px solid #c58b52">O JavaScript está desativado. A interface dinâmica e a programação precisam dele para carregar; ative JavaScript para usar todos os recursos. Os links HTML continuam disponíveis.</div></noscript><main class="wrap" id="main-content"><header><div class="brand">Mega Canais <span>TV</span></div><div class="status" id="status">Carregando canais…</div></header><aside class="vpn-notice" role="note" aria-label="Ajuda para acessar o site">
  <span class="vpn-icon" aria-hidden="true">!</span>
  <div class="vpn-copy">
    <strong>Site bloqueado?</strong>
    <span>Experimente o 1.1.1.1 para tentar melhorar sua conexão.</span>
  </div>
  <a class="vpn-download" href="https://one.one.one.one/pt-BR/" target="_blank" rel="noopener noreferrer">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v12m0 0 4-4m-4 4-4-4M5 17v3h14v-3"/></svg>
    Baixar 1.1.1.1
  </a>
</aside><section class="events-section" aria-labelledby="eventsTitle"><div class="events-heading"><div><h2 id="eventsTitle">Eventos em destaque</h2><p>Transmissões esportivas e eventos ao vivo</p></div><div class="event-arrows"><button type="button" id="eventsPrev" aria-label="Eventos anteriores">‹</button><button type="button" id="eventsNext" aria-label="Próximos eventos">›</button></div></div><div class="events-track" id="eventsTrack"><div class="events-loading">Carregando eventos…</div></div></section><div class="tools"><input id="search" type="search" placeholder="Buscar canal…"><span id="count" class="status"></span><a class="filter epg-open" id="showEpg" href="guia.php"><i class="fa-solid fa-calendar-days" aria-hidden="true"></i><span>Guia de programação</span><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></div><nav class="filters" id="filters"></nav><div class="grid" id="grid" aria-live="polite"></div>
<nav class="pagination" id="pagination" aria-label="Paginação dos canais">
  <button type="button" class="page-btn" id="prevPage" aria-label="Página anterior">‹ Anterior</button>
  <span class="page-status" id="pageStatus" aria-live="polite">Página 1</span>
  <button type="button" class="page-btn" id="nextPage" aria-label="Próxima página">Próximo ›</button>
</nav>
<div class="note" id="notice"></div></main><footer class="site-footer"><p>© Mega Canais TV — Todos os direitos reservados.</p><a class="telegram-link" href="https://t.me/megacanaisonlineoor" target="_blank" rel="noopener noreferrer" aria-label="Acesse nosso Telegram"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22.05 2.45a1.5 1.5 0 0 0-1.55-.24L2.2 9.37a1.5 1.5 0 0 0 .1 2.83l4.7 1.56 1.75 5.53a1.5 1.5 0 0 0 2.65.45l2.63-3.4 4.44 3.26a1.5 1.5 0 0 0 2.36-.9l2.9-14.7a1.5 1.5 0 0 0-.68-1.55ZM9.1 13.3l8.9-6.05-6.96 7.52-.28 3.1-1.66-4.57Zm3.02 5.04.23-2.55 2.1-1.91 3.83 2.81-6.16 1.65Z"/></svg><span>Telegram</span></a></footer><button class="back-to-top" id="backToTop" type="button" aria-label="Voltar ao topo" title="Voltar ao topo"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 14 7-7 7 7M12 7v13"/></svg></button><div class="overlay" id="overlay" role="dialog" aria-modal="true" aria-label="Player"><section class="player" id="player">
<div class="video" id="video"><iframe id="frame" allow="autoplay; encrypted-media; fullscreen; picture-in-picture" allowfullscreen referrerpolicy="no-referrer"></iframe></div>
<div class="error" id="playerError">A transmissão não carregou. O canal pode estar offline ou bloquear reprodução incorporada. Tente recarregar ou selecionar outra transmissão.</div>
<div class="access-gate" id="accessGate"><div class="access-box"><h2>Libera acesso</h2><p>Para liberar o player, clique no botão abaixo. Uma nova aba será aberta; depois, volte para esta página e o player será liberado.</p><button class="access-btn" id="grantAccess">Libera acesso</button><span class="access-hint" id="accessHint">O player ficará bloqueado até você voltar.</span></div></div>
<div class="ui top"><button class="pbtn" id="close" aria-label="Fechar"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg></button><div class="pill"><span class="dot"></span><span id="playing">Player</span></div><select class="source-select" id="sourceSelect" aria-label="Opção de transmissão"></select></div>
<div class="ui side"><button class="pbtn" id="prev" aria-label="Canal anterior"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 15l6-6 6 6"/></svg></button><button class="pbtn" id="full" aria-label="Tela cheia"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 9V4h5M20 9V4h-5M4 15v5h5M20 15v5h-5"/></svg></button><button class="pbtn" id="next" aria-label="Próximo canal"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg></button><div class="gap"></div><button class="pbtn" id="reload" aria-label="Recarregar"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 11a8 8 0 10-2.3 5.7M20 4v7h-7"/></svg></button></div>
<div class="ui info"><div class="card" id="nowCard"><small>NO AR <span id="nowTime"></span></small><b id="nowOn">Programação indisponível</b><div class="prog" id="prog" style="display:none"><i id="progBar"></i></div></div><div class="card next" id="nextCard"><small>A SEGUIR <span id="nextTime"></span></small><b id="nextOn">Aguardando programação</b></div></div>
</section></div>
<script>

const $=s=>document.querySelector(s);
const backToTop=$('#backToTop');
function updateBackToTop(){backToTop.classList.toggle('visible',window.scrollY>260)}
window.addEventListener('scroll',updateBackToTop,{passive:true});
backToTop.addEventListener('click',()=>window.scrollTo({top:0,behavior:'smooth'}));
updateBackToTop();

const API='api.php';let channels=[],shown=[],category=0,current=0,refreshToken=0,accessGranted=false,waitingForReturn=false,activeEvent=null,events=[];const grid=$('#grid'),filters=$('#filters'),overlay=$('#overlay'),frame=$('#frame');
function esc(s){return String(s==null?'':s).replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]))}
function categoryName(id,cats){return (cats||[]).map(x=>{let o=(window.categories||[]).find(k=>k.id===x);return o?o.name:''}).filter(Boolean).join(' ')}
function renderFilters(cats){window.categories=cats||[{id:0,name:'Todos'}];filters.innerHTML=window.categories.map((c,i)=>`<button class="filter ${i===0?'active':''}" data-id="${Number(c.id)}">${esc(c.name)}</button>`).join('');filters.querySelectorAll('button').forEach(b=>b.onclick=()=>{category=Number(b.dataset.id);page=1;filters.querySelectorAll('button').forEach(x=>x.classList.toggle('active',x===b));render()})}
let page=1;
function pageSize(){const w=window.innerWidth||1024;if(w<560)return 24;if(w>=1280&&(('ontouchstart'in window)||matchMedia('(hover:none)').matches))return 40;return w>=1500?60:48}
function render(){let q=$('#search').value.trim().toLocaleLowerCase('pt-BR');shown=channels.filter(c=>(!q||String(c.name||'').toLocaleLowerCase('pt-BR').includes(q))&&(category===0||(c.categories||[]).includes(category)));const size=pageSize(),pages=Math.max(1,Math.ceil(shown.length/size));page=Math.min(Math.max(1,page),pages);const start=(page-1)*size;const visible=shown.slice(start,start+size);$('#count').textContent=shown.length+' canais';grid.innerHTML=visible.map(c=>`<button class="channel" type="button" data-id="${esc(c.id)}"><img loading="lazy" decoding="async" src="${esc(c.image||'')}" alt="" onerror="this.style.opacity='.25'"><strong>${esc(c.name)}</strong></button>`).join('');grid.querySelectorAll('button').forEach(b=>b.onclick=()=>openChannel(channels.findIndex(c=>String(c.id)===b.dataset.id)));$('#pageStatus').textContent='Página '+page+' de '+pages;$('#prevPage').disabled=page<=1;$('#nextPage').disabled=page>=pages;$('#pagination').hidden=shown.length<=size}
$('#prevPage').addEventListener('click',()=>{if(page>1){page--;render();$('#grid').scrollIntoView({behavior:'smooth',block:'start'})}});
$('#nextPage').addEventListener('click',()=>{const pages=Math.max(1,Math.ceil(shown.length/pageSize()));if(page<pages){page++;render();$('#grid').scrollIntoView({behavior:'smooth',block:'start'})}});
window.addEventListener('resize',()=>{const oldSize=pageSize();render()});
function currentItem(){return activeEvent||channels[current]}
function openChannel(i){if(i>=0)idleReset();if(i<0||!channels[i])return;activeEvent=null;current=i;overlay.classList.add('show');syncAccessGate();renderSources();loadCurrent()}
function openEvent(ev){const url=(ev.players||[]).find(u=>typeof u==='string'&&/^https?:\/\//i.test(u));if(!url)return;activeEvent={id:'event-'+ev.id,name:ev.title||'Evento ao vivo',url,sources:{event:{label:'Transmissão do evento',url}}};current=-1;idleReset();overlay.classList.add('show');syncAccessGate();renderSources();loadCurrent()}
function activeSource(c){const s=c&&c.sources||{};const sel=$('#sourceSelect');const key=sel.value;return s[key]||Object.values(s)[0]||null}
function renderSources(){const c=currentItem();const sel=$('#sourceSelect');if(!c){sel.style.display='none';return}const s=c.sources||{};const entries=Object.entries(s);sel.innerHTML=entries.map(([k,v])=>`<option value="${esc(k)}">${esc(v.label||k)}</option>`).join('');sel.style.display=entries.length?'block':'none';sel.disabled=entries.length<2;sel.setAttribute('aria-label',entries.length>1?'Mudar transmissão deste canal':'Fonte de transmissão');if(entries.length){const preferred=entries.some(([k])=>k==='api1')?'api1':entries[0][0];sel.value=preferred;sel.title='Escolha a fonte de transmissão';}}
$('#sourceSelect').addEventListener('change',()=>{const c=channels[current];const src=activeSource(c);if(c&&src){loadCurrent()}})
function syncAccessGate(){const gate=$('#accessGate');gate.style.display=accessGranted?'none':'flex';document.querySelectorAll('.player .ui').forEach(el=>el.style.display=accessGranted?'':'none')}
function requestAccess(){waitingForReturn=true;$('#accessHint').textContent='Aguardando você voltar para esta página…';const w=window.open('https://example.com','_blank','noopener,noreferrer');if(!w)$('#accessHint').textContent='A nova aba pode ter sido bloqueada. Permita pop-ups e clique novamente.'}
function unlockAccess(){if(!waitingForReturn||accessGranted)return;waitingForReturn=false;accessGranted=true;syncAccessGate();$('#accessHint').textContent='Acesso liberado!';loadCurrent()}
$('#grantAccess').addEventListener('click',requestAccess);window.addEventListener('focus',()=>{if(waitingForReturn)unlockAccess()});document.addEventListener('visibilitychange',()=>{if(document.visibilityState==='visible'&&waitingForReturn)unlockAccess()});
function loadCurrent(){const c=currentItem();if(!c)return;$('#playing').textContent=c.name;const src=activeSource(c);const url=src&&src.url?src.url:c.url;updateEpg();$('#playerError').style.display='none';frame.src='about:blank';const token=++refreshToken;if(accessGranted){setTimeout(()=>{if(token===refreshToken&&url)frame.src=url},80);if(!url){$('#playerError').textContent='Nenhuma URL de transmissão disponível para este canal.';$('#playerError').style.display='block'}}}
function closePlayer(){overlay.classList.remove('show');frame.src='about:blank';refreshToken++;activeEvent=null;current=current<0?0:current}
$('#search').addEventListener('input',()=>{page=1;render()});$('#close').onclick=closePlayer;overlay.addEventListener('click',e=>{if(e.target===overlay)closePlayer()});document.addEventListener('keydown',e=>{if(e.key==='Escape')closePlayer()});$('#reload').onclick=loadCurrent;function step(d){if(activeEvent){activeEvent=null;current=d>0?0:Math.max(0,channels.length-1);renderSources();loadCurrent();return}const list=shown.length?shown:channels;let k=list.findIndex(c=>c===channels[current]);k=(k+d+list.length)%list.length;current=channels.indexOf(list[k]);loadCurrent()}$('#prev').onclick=()=>step(-1);$('#next').onclick=()=>step(1);$('#full').onclick=()=>{const el=$('#player');if(document.fullscreenElement)(document.exitFullscreen&&document.exitFullscreen());else (el.requestFullscreen&&el.requestFullscreen())};

let idleT;const pl=$('#player');function idleReset(){pl.classList.remove('idle');clearTimeout(idleT);idleT=setTimeout(()=>{if(overlay.classList.contains('show'))pl.classList.add('idle')},3000)}
['mousemove','touchstart','click'].forEach(ev=>pl.addEventListener(ev,idleReset,{passive:true}));
document.addEventListener('keydown',e=>{if(!overlay.classList.contains('show'))return;idleReset();if(e.key==='ArrowUp'){e.preventDefault();step(-1)}else if(e.key==='ArrowDown'){e.preventDefault();step(1)}else if(e.key==='f'||e.key==='F')$('#full').click()});

let epg={},epgRaw=[];const norm=v=>String(v==null?'':v).toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g,'').replace(/[^a-z0-9]/g,'');
const hhmm=d=>d.toLocaleTimeString('pt-BR',{hour:'2-digit',minute:'2-digit'});
function epgList(c){for(const v of [c.epg_id,c.epg,c.slug,c.id,c.name,c.name&&c.name.replace(/\s*(hd|fhd|sd)$/i,'')]){const k=norm(v);if(k&&epg[k])return epg[k]}return null}
function updateEpg(){const c=currentItem();if(!c)return;if(activeEvent){$('#nowOn').textContent='Evento ao vivo';$('#nowTime').textContent='';$('#nextOn').textContent=c.name;$('#nextTime').textContent='';$('#prog').style.display='none';return}const list=epgList(c),now=Date.now();let cur=-1;
 if(list)for(let i=0;i<list.length;i++){if(list[i].t<=now)cur=i;else break}
 const p=cur>=0?list[cur]:null,n=list&&list[cur+1]?list[cur+1]:(cur<0&&list?list[0]:null);
 const end=p&&n?n.t:0,valid=p&&(!end||now<end)&&(now-p.t<8*3600e3);
 $('#nowOn').textContent=valid?p.title:'Programação indisponível';$('#nowOn').title=valid?(p.desc||''):'';$('#nowTime').textContent=valid?hhmm(new Date(p.t)):'';
 const pr=$('#prog');if(valid&&end){pr.style.display='block';$('#progBar').style.width=Math.min(100,Math.max(0,(now-p.t)/(end-p.t)*100))+'%'}else pr.style.display='none';
 $('#nextOn').textContent=n?n.title:'Aguardando programação';$('#nextOn').title=n?(n.desc||''):'';$('#nextTime').textContent=n?hhmm(new Date(n.t)):''}
function loadEpg(){fetch('epg.php',{cache:'no-store'}).then(r=>r.json()).then(d=>{const m={};epgRaw=(Array.isArray(d)?d:[]).filter(x=>x&&Array.isArray(x.data)).map(x=>({id:String(x.id||''),data:x.data.map(e=>({t:Date.parse(e.start_date||''),title:String(e.title||''),desc:String(e.desc||'')})).filter(e=>Number.isFinite(e.t)&&e.title.trim()).sort((a,b)=>a.t-b.t)})).filter(x=>x.data.length);epgRaw.forEach(x=>m[norm(x.id)]=x.data);epg=m;updateEpg()}).catch(()=>{if(!$('#epgView').hidden){$('#epgSummary').textContent='Não foi possível carregar a programação.';$('#epgWarning').hidden=false;$('#epgWarning').textContent='Confira se epg.php está acessível e se o servidor consegue consultar a API de EPG.'}})}
function eventTime(ev){const start=Date.parse(ev.time_start||'');if(!Number.isFinite(start))return 'Horário a confirmar';return new Date(start).toLocaleString('pt-BR',{day:'2-digit',month:'short',hour:'2-digit',minute:'2-digit'})}
function eventCard(ev){const home=ev.teams&&ev.teams.home||{},away=ev.teams&&ev.teams.away||{};const league=ev.league&&ev.league.name||'Evento ao vivo';return `<button class="event-card" type="button" data-event="${esc(ev.id)}"><div class="event-meta"><span class="event-league">${esc(league)}</span><span class="event-live">AO VIVO / EVENTO</span></div><div class="event-match"><div class="event-team">${home.image?`<img loading="lazy" src="${esc(home.image)}" alt="" onerror="this.style.display='none'">`:''}<span>${esc(home.name||ev.title||'Evento')}</span></div><span class="event-vs">VS</span><div class="event-team">${away.image?`<img loading="lazy" src="${esc(away.image)}" alt="" onerror="this.style.display='none'">`:''}<span>${esc(away.name||'Transmissão')}</span></div></div><div class="event-footer"><span>${esc(eventTime(ev))}</span><span class="event-watch">Assistir ›</span></div></button>`}
function renderEvents(list){const track=$('#eventsTrack');if(!Array.isArray(list)||!list.length){track.innerHTML='<div class="events-empty">Nenhum evento disponível no momento.</div>';return}events=list;track.innerHTML=list.map(eventCard).join('');track.querySelectorAll('[data-event]').forEach(b=>b.addEventListener('click',()=>{const ev=events.find(x=>String(x.id)===b.dataset.event);if(ev)openEvent(ev)}))}
function loadEvents(){fetch('events.php',{cache:'no-store'}).then(async r=>{const d=await r.json();if(!r.ok)throw new Error(d.error||'Falha ao carregar eventos');return d}).then(d=>renderEvents(Array.isArray(d)?d:(d.events||d.data||[]))).catch(()=>{$('#eventsTrack').innerHTML='<div class="events-empty">Não foi possível carregar os eventos. Tente novamente mais tarde.</div>'})}
$('#eventsPrev').onclick=()=>$('#eventsTrack').scrollBy({left:-$('#eventsTrack').clientWidth*.8,behavior:'smooth'});$('#eventsNext').onclick=()=>$('#eventsTrack').scrollBy({left:$('#eventsTrack').clientWidth*.8,behavior:'smooth'});loadEvents();setInterval(loadEvents,5*60e3);

loadEpg();setInterval(loadEpg,10*60e3);setInterval(()=>{if(overlay.classList.contains('show'))updateEpg()},30e3);
fetch(API,{cache:'no-store'}).then(async r=>{let d=await r.json();if(!r.ok)throw new Error(d.error||'Falha ao carregar API');return d}).then(d=>{channels=(d.channels||[]).filter(c=>c&&c.name);renderFilters(d.categories);render();$('#status').textContent=channels.length+' canais carregados';$('#notice').textContent='';if(!channels.length)throw new Error('A API não retornou canais.')}).catch(e=>{$('#status').textContent='Erro ao carregar canais';$('#notice').textContent='Não foi possível carregar a lista: '+e.message+' — confira se api.php está na mesma pasta de index.php e se a hospedagem permite conexões HTTPS.';grid.innerHTML=''})
</script></body></html>