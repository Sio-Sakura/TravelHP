<?php /* Shared header for blog pages — nav/CSS はhomeテンプレートから自動抽出 */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
<style>
/* =========================================================
   BrianShio — storybook meadow edition
   flat, soft-textured illustration: cream sky, sage forest,
   sand road, one cabin, deer / bear / a few wolves, leaves
   ========================================================= */
:root{
  --paper:#fbf7ef; --paper-2:#f4ecdd; --paper-3:#eadfca;
  --ink:#3a3129; --ink-soft:#66594c; --ink-mute:#9a8c7c;
  --accent:#d2793f; --accent-d:#b25f2b; --glow:#f6c76b; --sun:#e9b453;
  --sage-1:#c3cfbc; --sage-2:#a9bba3; --sage-3:#9fb39a; --sage-4:#7e9779; --sage-5:#5f7a5c; --sage-6:#4e6a4f;
  --sand:#e6d9c3; --sand-d:#d8c8ad; --meadow:#dfe3cf; --meadow-2:#ece5d2;
  --deer:#b98a5a; --deer-d:#8a6440; --deer-l:#dcc09a;
  --wood:#a3764f; --wood-d:#6e4c33; --cloud:#e6e1d5;
  --blush:#f3cdb3; --lav:#dcd6e8;
  --shadow:rgba(58,49,41,.14);
  --serif:"Cormorant Garamond","Times New Roman",serif; --sans:"Nunito Sans",system-ui,-apple-system,sans-serif; --max:1180px;
}
*{box-sizing:border-box}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%;text-size-adjust:100%}
body{margin:0;background:var(--paper);color:var(--ink);font-family:var(--sans);font-weight:300;font-size:17px;line-height:1.7;overflow-x:hidden}
h1,h2,h3,h4{font-family:var(--serif);font-weight:500;line-height:1.08;margin:0 0 .4em}
h1{font-size:clamp(2.8rem,6.4vw,5.6rem)} h2{font-size:clamp(2rem,4.2vw,3.4rem)} h3{font-size:clamp(1.4rem,2.4vw,1.9rem)}
p{margin:0 0 1.1em} a{color:inherit;text-decoration:none}
.wrap{max-width:var(--max);margin:0 auto;padding:0 clamp(20px,4vw,48px)}
.eyebrow{font-size:.76rem;letter-spacing:.28em;text-transform:uppercase;color:var(--accent-d);font-weight:700;margin-bottom:1.1em}
.btn{display:inline-flex;align-items:center;gap:.6em;font-size:.92rem;letter-spacing:.2em;text-transform:uppercase;font-weight:700;padding:1.1em 2em;border-radius:999px;color:#fff;background:var(--accent);box-shadow:0 14px 30px -10px var(--accent-d);transition:transform .35s,background .35s}
.btn:hover{background:var(--accent-d);transform:translateY(-3px) scale(1.03)}
.btn.ghost{background:transparent;color:var(--ink);border:1px solid var(--ink);box-shadow:none}
.btn.ghost:hover{background:var(--ink);color:var(--paper)}
.btn .paw{width:15px;height:15px}.btn .paw path,.btn .paw ellipse{fill:currentColor}
.btn.wiggle{animation:wiggle 3.2s ease-in-out infinite}.btn.wiggle:hover{animation:none}
@keyframes wiggle{0%,80%,100%{transform:rotate(0) translateY(0)}84%{transform:rotate(-2.5deg) translateY(-2px)}88%{transform:rotate(2.5deg) translateY(-2px)}92%{transform:rotate(-1.5deg) translateY(-1px)}96%{transform:rotate(1.5deg)}}
.link{font-size:.8rem;letter-spacing:.2em;text-transform:uppercase;font-weight:700;border-bottom:2px solid var(--accent);padding-bottom:.2em}.link:hover{color:var(--accent-d)}
.grain{position:fixed;inset:0;pointer-events:none;z-index:50;opacity:.4;mix-blend-mode:multiply;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='300' height='300'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='2' stitchTiles='stitch'/><feColorMatrix values='0 0 0 0 .55 0 0 0 0 .5 0 0 0 0 .42 0 0 0 .07 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>")}

/* nav */
.nav{position:fixed;top:0;left:0;right:0;z-index:40;padding:18px 0;transition:.4s}
.nav.scrolled{background:rgba(246,241,230,.92);backdrop-filter:blur(8px);box-shadow:0 8px 30px var(--shadow);padding:10px 0}
.nav .wrap{display:flex;align-items:center;justify-content:space-between;gap:24px}
.logo{display:flex;align-items:center;gap:12px;font-family:var(--serif);font-size:1.85rem;font-weight:600}.logo svg{width:34px;height:34px}
.logo-mark{width:38px;height:38px;object-fit:contain;flex:none}
.menu{display:flex;align-items:center;gap:12px;list-style:none;margin:0 40px 0 auto;padding:0}.menu li{position:relative}
.menu a{font-size:1.11rem;letter-spacing:.2em;text-transform:uppercase;font-weight:700;padding:8px 0;display:inline-block}
.menu > li > a{position:relative;padding-left:28px}
.menu > li > a::before{content:"";position:absolute;left:0;top:calc(50% - 1px);width:21px;height:21px;transform:translate(0,-50%) rotate(-20deg) scale(.7);opacity:0;transition:opacity .35s ease,transform .35s ease,background-color .3s;
  background-color:var(--ink);
  -webkit-mask:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 40 40'><g fill='black'><path d='M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z'/><ellipse cx='9' cy='16' rx='3.4' ry='4.6' transform='rotate(-18 9 16)'/><ellipse cx='16' cy='9' rx='3.4' ry='4.8'/><ellipse cx='24' cy='9' rx='3.4' ry='4.8'/><ellipse cx='31' cy='16' rx='3.4' ry='4.6' transform='rotate(18 31 16)'/></g></svg>") center/contain no-repeat;
  mask:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 40 40'><g fill='black'><path d='M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z'/><ellipse cx='9' cy='16' rx='3.4' ry='4.6' transform='rotate(-18 9 16)'/><ellipse cx='16' cy='9' rx='3.4' ry='4.8'/><ellipse cx='24' cy='9' rx='3.4' ry='4.8'/><ellipse cx='31' cy='16' rx='3.4' ry='4.6' transform='rotate(18 31 16)'/></g></svg>") center/contain no-repeat}
.menu > li > a:hover::before,.menu > li > a.active::before{opacity:1;transform:translate(0,-50%) rotate(-20deg) scale(1)}
.menu > li > a:hover::before{background-color:var(--accent)}
.menu > li > a.active{color:var(--accent-d)}
.menu .sub{position:absolute;left:0;top:100%;background:var(--paper);border:1px solid var(--paper-3);box-shadow:0 12px 30px var(--shadow);padding:12px 24px 12px 14px;list-style:none;margin:0;min-width:0;width:max-content;opacity:0;transform:translateY(8px);pointer-events:none;transition:.3s}
.menu li:hover .sub{opacity:1;transform:none;pointer-events:auto}.menu .sub a{font-weight:600;letter-spacing:.14em;padding:6px 0;transition:color .25s}
.menu .sub a:hover{color:var(--accent)}
.social{display:flex;gap:14px}.social a{width:34px;height:34px;border:1px solid var(--ink-mute);border-radius:50%;display:grid;place-items:center;transition:.3s}
.social a:hover{background:var(--accent);color:#fff;border-color:var(--accent)}.social svg{width:15px;height:15px;fill:currentColor}
.burger{display:none;background:none;border:0;cursor:pointer;padding:6px}.burger span{display:block;width:26px;height:2px;background:var(--ink);margin:6px 0}
@media (max-width:840px){.menu,.social{display:none}.burger{display:block}
  .nav.open .menu{display:flex;flex-direction:column;align-items:center;position:absolute;top:100%;left:auto;right:0;width:40vw;margin:0;background:var(--paper);padding:24px;gap:18px;box-shadow:0 20px 40px var(--shadow)}
  .nav.open .menu > li{width:9.5em}
  .nav.open .menu .sub{position:static;opacity:1;transform:none;pointer-events:auto;box-shadow:none;border:0;border-left:1px solid var(--ink-mute);margin-left:30px;padding:6px 0 0 14px}
  .nav.open::before{content:"";position:fixed;inset:0;background:rgba(0,0,0,.35);z-index:-1}
  .nav.open.scrolled{backdrop-filter:none;-webkit-backdrop-filter:none;transition:none}}

/* common */
section{position:relative}
.reveal{opacity:0;transform:translateY(28px)}
.print{opacity:0;transform-box:fill-box;transform-origin:center}
.scene{position:absolute;left:0;right:0;bottom:0;pointer-events:none;overflow:visible}
.scene svg.layer,.ground svg.layer,.trail svg.layer,.pair svg.layer,.valley svg.layer,.hills svg.layer{position:absolute;inset:0;width:100%;height:100%;overflow:visible}
.tree{transform-box:fill-box;transform-origin:50% 100%;animation:treesway 4.2s ease-in-out infinite}.tree:nth-child(even){animation-duration:5s}
@keyframes treesway{0%,100%{transform:rotate(-3deg) skewX(-3deg)}50%{transform:rotate(3deg) skewX(3deg)}}
.plant{transform-box:fill-box;transform-origin:50% 100%;animation:plantsway 3.6s ease-in-out infinite}.plant:nth-child(3n){animation-duration:4.4s}
@keyframes plantsway{0%,100%{transform:rotate(-4deg)}50%{transform:rotate(4deg)}}
.cloud{position:absolute;pointer-events:none;animation:drift linear infinite}
@keyframes drift{0%{transform:translateX(-12vw)}100%{transform:translateX(112vw)}}
@keyframes cloudfloat{0%,100%{transform:translateX(-1.5vw)}50%{transform:translateX(2.5vw)}}
.birds{position:absolute;pointer-events:none;overflow:visible}.bird{transform-box:fill-box;transform-origin:center}
.bird path{transform-box:fill-box;transform-origin:center}
.bird .wingL{animation:wingL .8s ease-in-out infinite;transform-box:fill-box;transform-origin:92% 88%}
.bird .wingR{animation:wingR .8s ease-in-out infinite;transform-box:fill-box;transform-origin:8% 88%}
@keyframes wingL{0%,100%{transform:rotate(16deg)}50%{transform:rotate(-24deg)}}
@keyframes wingR{0%,100%{transform:rotate(-16deg)}50%{transform:rotate(24deg)}}
@keyframes flap{0%,100%{transform:scaleY(1)}50%{transform:scaleY(.25)}}
.smoke circle{animation:puff 4.5s linear infinite;transform-box:fill-box;transform-origin:center}
#meadowScene .smoke{fill:#cdc6ba}   /* Why travel? meadow: greyer smoke so it reads against the pale sky */.smoke circle:nth-child(2){animation-delay:-1.5s}.smoke circle:nth-child(3){animation-delay:-3s}
@keyframes puff{0%{transform:translate(0,0) scale(.5);opacity:0}15%{opacity:.9}60%{opacity:.6}100%{transform:translate(18px,-70px) scale(1.9);opacity:0}}
.glow{animation:flicker 2.6s ease-in-out infinite}@keyframes flicker{0%,100%{opacity:.85}40%{opacity:1}60%{opacity:.75}}
.leaf-fall{position:absolute;inset:0;pointer-events:none;overflow:hidden}
#heroLeaves{bottom:14px;-webkit-mask-image:linear-gradient(180deg,#000 88%,transparent 100%);mask-image:linear-gradient(180deg,#000 88%,transparent 100%)}
.leaf-fall svg{position:absolute;top:-8vh;width:18px;animation:leaffall linear infinite;opacity:.85}
@keyframes leaffall{0%{transform:translate(0,0) rotate(0)}100%{transform:translate(var(--dx,40px),110vh) rotate(540deg)}}
/* animals drawn in SVG */
.animal{position:absolute;overflow:visible;will-change:transform}
.animal .legF,.animal .legB,.animal .legF2,.animal .legB2{transform-box:fill-box;transform-origin:50% 4%}
.animal .legF{animation:swingA .8s ease-in-out infinite}.animal .legB{animation:swingB .8s ease-in-out infinite}
.animal .legF2{animation:swingB .8s ease-in-out infinite}.animal .legB2{animation:swingA .8s ease-in-out infinite}
.animal .body{transform-box:fill-box;transform-origin:center;animation:bob .4s ease-in-out infinite}
.animal .tail{transform-box:fill-box;transform-origin:95% 15%;animation:wag 1.2s ease-in-out infinite}
.animal .head{transform-box:fill-box;transform-origin:10% 90%;animation:nod .8s ease-in-out infinite}
.animal *{animation-play-state:var(--walk,paused)}
.animal.always *{animation-play-state:running}
.animal.still .legF,.animal.still .legB,.animal.still .legF2,.animal.still .legB2,.animal.still .body,.animal.still .tail{animation:none}
.animal.still .head{animation-play-state:running}
.animal .fur{opacity:.55}.animal .wash{filter:url(#wc)}.animal .wash2{filter:url(#wc2)}
.shadow{opacity:.18}
@keyframes swingA{0%{transform:rotate(-18deg)}50%{transform:rotate(18deg)}100%{transform:rotate(-18deg)}}
@keyframes swingB{0%{transform:rotate(18deg)}50%{transform:rotate(-18deg)}100%{transform:rotate(18deg)}}
@keyframes bob{0%,100%{transform:translateY(0)}50%{transform:translateY(-2px)}}
@keyframes wag{0%,100%{transform:rotate(-5deg)}50%{transform:rotate(6deg)}}
@keyframes nod{0%,100%{transform:rotate(0)}50%{transform:rotate(2.5deg)}}
/* river */
.riverflow path{animation:flowdash 7s linear infinite}
.riverflow path:nth-child(2){animation-duration:9.5s}
@keyframes flowdash{to{stroke-dashoffset:-162}}
/* bunnies & small critters */
.bunny,.critter{position:absolute;pointer-events:none}
.bunny svg,.critter svg{width:100%;display:block;overflow:visible}
.bunny svg{transform-origin:50% 100%;animation:bunnybreathe 3.4s ease-in-out infinite}
@keyframes bunnybreathe{0%,100%{transform:scaleY(1)}50%{transform:scaleY(1.035)}}
.bunny .ear{transform-box:fill-box;transform-origin:50% 95%;animation:eartwitch 4.6s ease-in-out infinite}
.bunny .ear2{animation-delay:.18s}
@keyframes eartwitch{0%,84%,100%{transform:rotate(0)}88%{transform:rotate(-9deg)}93%{transform:rotate(4deg)}}
.bunny.sniffer svg{animation:bunnysniff 6s ease-in-out infinite}
@keyframes bunnysniff{0%,42%,100%{transform:rotate(0) translateY(0)}52%{transform:rotate(11deg) translateY(2px)}60%{transform:rotate(8deg) translateY(1px)}70%{transform:rotate(12deg) translateY(2px)}82%{transform:rotate(0) translateY(0)}}
.squirrel svg{transform-origin:50% 100%;animation:nibble 4.2s ease-in-out infinite}
@keyframes nibble{0%,68%,100%{transform:scaleY(1)}76%{transform:scaleY(.955)}82%{transform:scaleY(1)}88%{transform:scaleY(.965)}}
.squirrel .tail{transform-box:fill-box;transform-origin:12% 88%;animation:tailsway 3s ease-in-out infinite}
@keyframes tailsway{0%,100%{transform:rotate(0)}50%{transform:rotate(-8deg)}}
.birdie svg{transform-origin:62% 92%;animation:peck 3.8s ease-in-out infinite}
@keyframes peck{0%,58%,100%{transform:rotate(0)}68%{transform:rotate(16deg)}76%{transform:rotate(3deg)}84%{transform:rotate(14deg)}}
/* deer */
.deer .legF,.deer .legB,.deer .legF2,.deer .legB2{animation-duration:.7s}
.deer .head{transform-origin:40% 95%;animation:graze 5s ease-in-out infinite}
@keyframes graze{0%,70%,100%{transform:rotate(0)}80%,90%{transform:rotate(14deg)}}
/* photo wolves (from the painting) */
.wolf-box{position:absolute;bottom:0;will-change:transform;line-height:0}
.wolf{display:block;height:var(--h,300px);width:auto;object-fit:contain;filter:drop-shadow(0 18px 14px rgba(58,49,41,.18))}
.wolf.hop{animation:hop .55s ease-in-out infinite;animation-play-state:var(--walk,paused);transform-origin:50% 100%}
.wolf.breathe{animation:breathe 3.6s ease-in-out infinite;transform-origin:50% 100%}
@keyframes hop{0%,100%{transform:scaleX(var(--dir,1)) translateY(0) rotate(0)}50%{transform:scaleX(var(--dir,1)) translateY(-6px) rotate(calc(-1.5deg * var(--dir,1)))}}
@keyframes breathe{0%,100%{transform:scaleX(var(--dir,1)) scaleY(1)}50%{transform:scaleX(var(--dir,1)) scaleY(1.015)}}
.walker{position:absolute;left:0;top:0;width:0;height:0;z-index:4;will-change:transform}
#walker{z-index:5}#walker2{z-index:3}
.walker>*{position:absolute!important;bottom:0;left:0;transform:translateX(-50%)}
/* couples: once the pair meets, legs stop and only the necks sway (random rhythm per deer) */
.pl .head,.pr .head{transform-box:fill-box;transform-origin:80% 85%}
.pl.met .legF,.pl.met .legB,.pl.met .legF2,.pl.met .legB2,.pr.met .legF,.pr.met .legB,.pr.met .legF2,.pr.met .legB2,.pl.met .body,.pr.met .body,.pl.met .tail,.pr.met .tail{animation:none!important}
.pl.met .head,.pr.met .head{animation:headSway var(--nodDur,3.2s) ease-in-out var(--nodDelay,0s) infinite;animation-play-state:running!important}
@keyframes headSway{0%,100%{transform:rotate(0)}25%{transform:rotate(-5deg)}55%{transform:rotate(3deg)}75%{transform:rotate(-2deg)}}
.photo{position:relative;overflow:hidden;border-radius:14px;box-shadow:0 34px 70px -26px rgba(58,49,41,.38),0 0 0 6px #fff;transform-style:preserve-3d}
.photo svg{position:absolute;inset:0;width:100%;height:100%}

/* hero */
.hero{min-height:100vh;display:flex;align-items:flex-start;overflow:clip;overflow-clip-margin:10px;z-index:1;background:linear-gradient(180deg,#e8f1f5 0%,var(--paper) 62%)}
.bloom{position:absolute;border-radius:50%;filter:blur(46px);opacity:.7;pointer-events:none}
.hero .wrap{position:relative;z-index:3;width:100%;display:grid;grid-template-columns:5.2fr 4.8fr;gap:clamp(28px,5vw,70px);align-items:start;padding-top:128px;padding-bottom:calc(36vh + 10px)}
.hero-copy{max-width:660px;position:relative}.hero-copy>*{position:relative;z-index:1}
#heroSun{position:absolute;right:0;top:-8%;width:min(150px,15vw);z-index:0!important;overflow:visible}
.hero h1 .ital{font-style:italic;font-weight:400;color:var(--accent-d)}
.hero .lead{font-size:1.375rem;max-width:540px}
.hero .eyebrow{font-size:.885rem}
.hero .cta{display:flex;gap:16px;flex-wrap:wrap;margin-top:1.6em}
.hero .photo-col{position:relative;justify-self:end;width:100%;max-width:560px;margin-top:10px}
.hero .photo-col .photo{aspect-ratio:16/10;width:100%}
.hero .featured{position:absolute;right:-26px;bottom:-69px;z-index:2;width:155px;height:155px;border-radius:50%;background:rgba(246,241,230,.96);padding:10px 5px 0;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;box-shadow:0 20px 40px -18px var(--shadow)}
.hero .featured .date{font-size:.825rem;letter-spacing:.1em;text-transform:uppercase;color:var(--accent-d);font-weight:700}
.hero .featured{cursor:pointer;border:1px solid var(--accent);transition:transform .35s,box-shadow .35s,background .35s}
.hero .featured:hover{transform:translateY(-4px) scale(1.04);box-shadow:0 26px 46px -16px var(--shadow);background:#fffdf8}
.hero .featured .read{color:var(--accent);font-weight:700;font-size:.9rem;margin-top:.25em}
.hero .featured h3{font-size:1.08rem;margin:.25em 0 .3em;line-height:1.2}.hero .featured p{font-size:.9rem;margin:0;line-height:1.35}
#heroSlides .tiles{position:absolute;inset:0;display:grid;grid-template-columns:repeat(8,1fr);grid-template-rows:repeat(5,1fr);pointer-events:none}
#heroSlides .tiles div{opacity:0;background-repeat:no-repeat}
#heroSlides .tiles div.on{animation:tileIn .55s ease forwards}
@keyframes tileIn{0%{opacity:0;filter:brightness(1.9)}45%{opacity:1;filter:brightness(1.45)}100%{opacity:1;filter:brightness(1)}}
.hero .sky{position:absolute;inset:0;z-index:0;pointer-events:none}
.hero .ground{position:absolute;left:0;right:0;bottom:0;height:36vh;min-height:260px;z-index:2;pointer-events:none;overflow:clip;overflow-clip-margin:10px}
.hero .ground .front{z-index:6}
.hero .cabin{position:absolute;left:4%;bottom:15vh;width:clamp(220px,22vw,340px);z-index:3;pointer-events:none}
.hero .deer-fg{position:absolute;right:6%;bottom:1vh;width:clamp(120px,12vw,180px);z-index:7;pointer-events:none}
@media (max-width:840px){.hero .wrap{grid-template-columns:1fr;padding-top:96px;padding-bottom:calc(40vh + 24px);gap:22px}
  .hero .photo-col{width:100%;margin-top:0}.hero .featured{left:8px;bottom:-52px;max-width:230px;padding:12px 14px}.hero .featured p{display:none}
  #heroSun{right:0;top:-10px;width:90px}.hero .cabin{left:2%;bottom:16vh;width:170px}.hero .deer-fg{width:130px;right:3%}}

/* why — deer meadow */
.why{padding:clamp(90px,12vw,160px) 0 0;overflow:hidden}
.why .clouds{position:absolute;inset:0;pointer-events:none;z-index:0}
.why .wrap{position:relative;z-index:1}
.why .eyebrow{font-size:.885rem}
.why blockquote .br-m{display:none}
.why .grid{display:grid;grid-template-columns:.95fr 1.05fr;gap:clamp(30px,6vw,80px);align-items:end}
.why blockquote{font-family:var(--serif);font-size:clamp(1.7rem,3.1vw,2.5rem);font-style:italic;font-weight:400;line-height:1.3;margin:0 0 1.2em}
.why .authors{font-size:12px;letter-spacing:.1em;text-transform:uppercase;font-weight:700;position:relative}
.why .authors .avatar{position:absolute;right:0;top:calc(50% + 20px);transform:translateY(-90%);width:143px;height:143px;border-radius:50%;overflow:hidden;display:block;border:2px solid var(--accent);box-shadow:0 12px 26px -12px var(--shadow)}
.why .authors .avatar img{width:100%;height:100%;object-fit:cover;object-position:50% 82%;transform:scale(1.12) translateX(7px);transform-origin:50% 82%;display:block}.why .authors small{display:block;font-size:12px;letter-spacing:.06em;color:var(--ink-mute);font-weight:600;margin-top:.3em}
.why ul{list-style:none;padding:0;margin:1.2em 0 1.6em;display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:.5em 1.5em}
.why li{display:flex;align-items:center;gap:.6em;font-weight:600}.why li svg{width:18px;height:18px;flex:none}.why .copy{padding-bottom:clamp(60px,8vw,120px)}
.meadow-scene{position:relative;top:-145px;height:clamp(380px,46vw,560px)}
.meadow-scene svg.layer{position:absolute;inset:0;width:100%;height:100%;overflow:visible}
@media (max-width:840px){.why .grid{grid-template-columns:minmax(0,1fr)}.meadow-scene{height:400px}}

/* pillars */
.pillars{padding:clamp(0px,.9vw,14px) 0 clamp(40px,8vw,80px)}
.pillars .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(18px,3vw,36px);perspective:1200px}
.card{background:#fff;padding:clamp(28px,3vw,42px);border-radius:16px;position:relative;box-shadow:0 26px 50px -24px var(--shadow);transform-style:preserve-3d;transition:box-shadow .5s;border-top:6px solid var(--c,var(--accent))}
.card:hover{box-shadow:0 40px 70px -24px rgba(58,49,41,.3)}
.card .ico{width:66px;height:66px;margin-bottom:1.1em;transform:translateZ(30px)}
.card h3{transform:translateZ(24px)}.card p{font-size:15px;transform:translateZ(14px);min-height:6.5em}.card .link{transform:translateZ(20px);display:inline-block}
@media (max-width:840px){.pillars .cards{grid-template-columns:1fr}}

/* plains — hills at golden hour, bison far away */
.plains{padding:clamp(100px,14vw,200px) 0 0;min-height:calc(100vh + 140px);background:linear-gradient(180deg,var(--paper) 0%,#f6e3cf 55%,#f9e6d2 75%,var(--paper) 100%);overflow:hidden}
.plains .wrap{position:relative;z-index:2}
.plains blockquote{font-family:var(--serif);font-size:clamp(1.5rem,2.6vw,2.2rem);font-style:italic;font-weight:400;line-height:1.4;max-width:820px;margin:0 auto 1.2em;text-align:center}
.plains cite{display:block;text-align:center;font-style:normal;font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-mute);font-weight:700}
.plains .next .eyebrow{font-size:12px;letter-spacing:.1em;margin-bottom:20px}
.next{margin:calc(clamp(60px,8vw,110px) - 10px) auto 0;text-align:center}
.next .big{font-family:var(--serif);font-size:clamp(4rem,12vw,10rem);font-weight:500;line-height:.9;margin-top:-40px}
.next .big .sun{display:inline-block;width:.18em;height:.18em;border-radius:50%;background:#d8452e;vertical-align:.55em;margin-left:.12em}
.plains .hills{position:absolute;left:0;right:0;bottom:0;height:42vh;z-index:1;pointer-events:none}
.plains .herd{position:absolute;left:0;right:0;bottom:0;height:30vh;z-index:1;pointer-events:none}
.plains .bison-walk{position:absolute;left:0;bottom:0;width:100%;height:100%;pointer-events:none}
.plains .walker1{animation:crossR 90s linear infinite}
.plains .walker2{animation:crossR 62s linear infinite;animation-delay:-25s}
@keyframes crossR{from{transform:translateX(-18vw)}to{transform:translateX(112vw)}}
.plains .b1 .head{animation-duration:3.4s}
.plains .b2 .head{animation:graze 6.5s ease-in-out infinite}
.plains .b3 .head{animation-duration:4.6s;animation-delay:-1.6s;transform-origin:50% 85%}
.plains .baby .head{animation:graze 4.2s ease-in-out infinite;animation-delay:-2s}
.plains .sun-big{position:absolute;right:10%;top:22%;width:min(220px,24vw);z-index:0}

/* trust — the wolf pack crosses */
.trust{padding:140px 0 clamp(100px,12vw,160px)}
.trust .side-wolf{position:absolute;bottom:40px;width:clamp(150px,15vw,230px);height:auto;pointer-events:none;z-index:1}
.trust .side-wolf.l{left:5%;transform:scaleX(-1)}.trust .side-wolf.r{right:5%}
@media (max-width:1000px){.trust .side-wolf{display:none}}
.trust .wrap{position:relative;z-index:2;max-width:760px;text-align:center}.trust p{font-size:17px}
.trust .eyebrow,.gallery .eyebrow,.couples .eyebrow,.family .eyebrow{font-size:.885rem}
.gallery header .link{font-size:17px}
.trust .trail{position:absolute;left:0;right:0;bottom:0;height:150px;z-index:0;pointer-events:none}
.trust .pack{position:absolute;left:0;right:0;bottom:0;height:100%}
.trust .pack .wolf{--h:clamp(120px,19vh,220px)}.trust .pack .pup .wolf{--h:clamp(70px,11vh,125px)}
@media (max-width:840px){.trust .trail{height:200px}}

/* gallery */
.gallery{padding:calc(clamp(80px,10vw,140px) - 20px) 0 clamp(100px,15vw,200px);background:linear-gradient(180deg,var(--paper),var(--paper-2));overflow:hidden}
.gallery header{display:flex;align-items:flex-end;justify-content:space-between;gap:24px;margin-bottom:2.4rem}
.masonry{display:grid;grid-template-columns:repeat(8,1fr);grid-auto-rows:80px;gap:7px;grid-auto-flow:dense}
.ph{position:relative;overflow:hidden;border-radius:10px;background:var(--paper-3);box-shadow:0 18px 40px -18px var(--shadow);transform-style:preserve-3d}
.ph svg,.ph img{position:absolute;inset:0;width:100%;height:100%}.ph img{object-fit:cover}
.ph span{position:absolute;left:14px;bottom:10px;font-size:.66rem;letter-spacing:.24em;text-transform:uppercase;color:#fff;font-weight:700;text-shadow:0 1px 4px rgba(0,0,0,.3)}
.ph.tall{grid-row:span 2}.ph.wide{grid-column:span 2}.ph.big,.ph.sq{grid-column:span 2;grid-row:span 2}
.gal-sub{display:grid;grid-template-columns:260fr 180fr 228fr;grid-template-rows:300fr 208fr;gap:7px;min-height:0}
.gal-sub .ph{min-height:0}
@media (max-width:540px){.gal-sub{grid-column:span 2;grid-row:span 4}}
@media (max-width:540px){.masonry{grid-template-columns:repeat(2,1fr);grid-auto-rows:130px}}
@media (max-width:840px){.gallery header{flex-direction:column;align-items:flex-start}}
.gallery .trail{position:absolute;left:0;right:0;bottom:60px;height:260px;z-index:2;pointer-events:none}   /* 60px clear of the section edge */
@media (max-width:840px){.gallery .trail{height:190px}}
.gallery .foliage{position:absolute;left:0;bottom:0;width:clamp(200px,24vw,360px);pointer-events:none;z-index:2}

/* couples — two deer meet on the hill */
.couples{padding:clamp(100px,12vw,180px) 0 clamp(200px,26vw,340px)}
.couples .grid{display:grid;grid-template-columns:1fr 1fr;gap:clamp(30px,6vw,90px);align-items:center;position:relative;z-index:3}
.couples .photo{aspect-ratio:4/5;width:90%;justify-self:center}   /* frame fills the column; the photo is shown larger inside it, overflow simply hidden (file untouched) */
.couples .pair{position:absolute;left:0;right:0;bottom:-20px;height:clamp(240px,32vw,380px);z-index:2;pointer-events:none}
.couples .heart{position:absolute;left:50%;bottom:calc(100% - 60px);width:36px;transform:translateX(-50%) scale(0);opacity:0}
@media (max-width:840px){.couples .grid{grid-template-columns:1fr}}

/* family — deer family walks into the hills */
.family{padding:clamp(80px,10vw,140px) 0 clamp(220px,28vw,360px);overflow:hidden;background:linear-gradient(180deg,var(--paper),#eef2ea 60%,var(--paper))}
.family .wrap{text-align:center;max-width:760px;position:relative;z-index:2}
.family .valley{position:absolute;left:0;right:0;bottom:0;height:clamp(260px,34vw,420px);z-index:1;pointer-events:none}

/* story — dusk over the range */
.story{min-height:120vh;padding:clamp(120px,16vw,220px) 0 clamp(220px,30vw,380px);overflow:hidden;background:linear-gradient(180deg,var(--paper) 0%,var(--lav) 30%,var(--blush) 58%,#f8e3cf 75%,var(--paper) 100%)}
.story .wrap{position:relative;z-index:3;max-width:880px;text-align:center;margin-top:20px}
.story h2{margin-bottom:.4em}.story h2 .ital{font-style:italic;font-weight:400;color:var(--accent-d)}   /* same size as the Trust heading */
.story p{font-size:17px}
.story .layers{position:absolute;inset:0 0 10px 0;z-index:1;pointer-events:none}   /* whole scene sits 10px higher */
.story .layers svg.ridge{position:absolute;left:-5%;width:110%;bottom:0}
.story .layers svg.ridge.l4{bottom:-20px}   /* front snowy divider sits 20px lower */
.story .layer{will-change:transform}
.story .ridgepack{position:absolute;left:0;right:0;bottom:118px;height:clamp(150px,20vw,260px)}
.story .ridgepack .wolf-box{height:100%}.story .ridgepack .wolf{--h:100%;height:100%}
.story .ridgecabin{position:absolute;left:calc(52% - 60px);bottom:100px;width:clamp(275px,34.3vw,480px)}
.story .snow-fall{z-index:2}
.snow-fall{position:absolute;inset:0;pointer-events:none;overflow:hidden}
.snow-fall i{position:absolute;top:-4vh;border-radius:50%;background:#fff;opacity:.8;animation:fall linear infinite}
@keyframes fall{0%{transform:translate(0,0)}100%{transform:translate(var(--dx,20px),108vh)}}
.firefly{position:absolute;width:6px;height:6px;border-radius:50%;background:#ffe9a8;box-shadow:0 0 10px 3px rgba(255,225,150,.6);animation:fly-fire 6s ease-in-out infinite}
@keyframes fly-fire{0%,100%{transform:translate(0,0);opacity:0}20%{opacity:1}50%{transform:translate(var(--fx,20px),var(--fy,-30px));opacity:.9}80%{opacity:1}}

/* footer */
footer{padding:calc(clamp(60px,8vw,100px) - 20px) 0 20px;position:relative;overflow:hidden;background:var(--paper-2)}
/* footer layout B: centered stack — logo, tagline, one line of links, socials, copyright */
footer .grid{display:flex;flex-direction:column;align-items:center;text-align:center;gap:22px;position:relative;z-index:2}
footer .grid>div:first-child{max-width:none;display:flex;flex-direction:column;align-items:center}
footer .grid>div:first-child .logo{font-size:2.2rem;transform:translateX(-12px)}   /* offset the logo image width so the wordmark reads centered */
footer .grid>div:first-child p{margin:.4em auto 0!important;font-size:15px!important;max-width:none!important;white-space:nowrap}
footer h4{font-family:var(--sans);font-size:13px;letter-spacing:.28em;text-transform:uppercase;color:var(--accent-d);margin-bottom:.6em}
footer ul{list-style:none;margin:0;padding:0;display:flex;justify-content:center;gap:6px 26px;flex-wrap:wrap}
footer .social{justify-content:center}
footer .grid>div:nth-child(2){margin-top:-2px}   /* 20px below the tagline (the grid's own 22px gap is absorbed) */
footer .social-block{margin-top:-2px}   /* 20px below the link row (the grid's own 22px gap is absorbed) */footer li{margin:0;font-weight:600;font-size:16px}
footer .copy a{border-bottom:1px solid rgba(58,49,41,.28);padding-bottom:1px;transition:color .25s,border-color .25s}
footer .copy a:hover{color:var(--accent);border-color:var(--accent)}
footer .copy{margin-top:20px;padding-top:20px;border-top:1px solid rgba(58,49,41,.12);font-size:13px;color:var(--ink-mute);letter-spacing:.06em;display:flex;justify-content:center;gap:28px;flex-wrap:wrap;position:relative;z-index:2}
footer .trail{position:absolute;inset:0;z-index:1;pointer-events:none;opacity:.55}
@media (max-width:840px){footer .grid{gap:18px}}
@media (prefers-reduced-motion:reduce){.wolf,.animal *,.bird path,.smoke circle,.glow,.tree,.plant,.cloud,.leaf-fall svg,.firefly{animation:none!important}.reveal{opacity:1;transform:none}.print{opacity:1}}
/* ===== responsive tweaks: 841-950 / 951-1140 (keep at end of stylesheet so they win the cascade) ===== */
@media (min-width:841px) and (max-width:1140px){.why .authors .avatar{right:-72px}}
@media (min-width:951px) and (max-width:1140px){.why .authors .avatar{right:-45px}}
@media (min-width:951px) and (max-width:1140px){.plains .birds{top:calc(10% - 40px)!important}.plains{padding-top:calc(clamp(100px,14vw,200px) + 20px)}}
@media (min-width:1141px){.plains .birds{top:calc(10% - 40px)!important}}
@media (min-width:1141px){.plains .baby{left:calc(27% + 40px)!important}}
@media (min-width:951px) and (max-width:1140px){.plains .baby{left:calc(27% + 40px)!important}}
@media (min-width:841px) and (max-width:950px){.plains .baby{left:calc(27% + 80px)!important}}
@media (min-width:541px) and (max-width:840px){.plains .baby{left:calc(27% + 60px)!important}}
@media (min-width:541px) and (max-width:840px){.couples .photo{width:calc(64.8% + 20px);justify-self:center;aspect-ratio:auto;height:0;padding-top:calc(81% - 60px)}}
@media (min-width:541px) and (max-width:840px){.couples .grid>div:nth-child(2){text-align:center}.couples .grid>div:nth-child(2) p:first-of-type{max-width:80%;margin-left:auto;margin-right:auto}}
@media (min-width:1141px){.story .birds{top:calc(12% + 30px)!important}.story{padding-top:calc(clamp(120px,16vw,220px) + 70px)}}
@media (min-width:841px) and (max-width:950px){.plains .birds{top:calc(10% - 30px)!important}.plains{padding-top:calc(clamp(100px,14vw,200px) + 60px)}}
@media (min-width:951px) and (max-width:1140px){.story .birds{top:12%!important}.story{padding-top:calc(clamp(120px,16vw,220px) + 40px)}}
@media (min-width:320px) and (max-width:1140px){.family .valley .grass-br{display:none}}
@media (min-width:541px) and (max-width:840px){.family{padding-top:calc(clamp(80px,10vw,140px) + 20px);padding-bottom:calc(clamp(220px,28vw,360px) + 40px)}}
@media (min-width:541px) and (max-width:840px){.story{padding-top:calc(clamp(120px,16vw,220px) + 90px)}}
@media (min-width:541px) and (max-width:840px){footer .trail{transform:translateY(-10px)}}
@media (min-width:320px) and (max-width:840px){footer .social{display:flex}}
/* 320-540px (スマホ) */
html,body{overflow-x:clip}
@media (min-width:951px) and (max-width:1140px){.trust .side-wolf{bottom:0;display:block}.trust .side-wolf.l{left:calc(5% + 40px)}.trust .side-wolf.r{right:calc(5% + 40px)}}
@media (min-width:841px) and (max-width:950px){.trust .side-wolf{bottom:0;display:block}.trust .side-wolf.l{left:calc(5% + 40px)}.trust .side-wolf.r{right:calc(5% + 40px)}}
@media (min-width:541px) and (max-width:840px){.trust .side-wolf{bottom:0;display:block}.trust .side-wolf.l{left:calc(5% - 20px)}.trust .side-wolf.r{right:calc(5% - 20px)}}@media (min-width:841px) and (max-width:950px){.hero .photo-col{width:110%;margin-top:30px}}
@media (min-width:841px) and (max-width:950px){.story .birds{top:calc(12% - 20px)!important}.story{padding-top:calc(clamp(120px,16vw,220px) + 40px)}}
/* 541-840px (iPad縦・大きめスマホ横) */
@media (min-width:541px) and (max-width:840px){.why .copy p:first-of-type{max-width:85%}.hero .photo-col{justify-self:start;margin-top:20px}.hero .featured{left:auto;right:max(-26px,calc(10px - clamp(20px,4vw,48px)));bottom:-69px;max-width:none;padding:10px 5px 0}.hero .featured p{display:block}}
@media (min-width:541px) and (max-width:840px){.why .authors .avatar{right:100px;top:calc(50% - 60px);transform:translateY(-55%)}}
@media (min-width:541px) and (max-width:840px){.meadow-scene{width:90%;margin-left:auto;margin-right:auto}}
@media (min-width:541px) and (max-width:840px){.meadow-scene .bunny:not(.sniffer){bottom:calc(26% - 60px)!important}}
@media (min-width:541px) and (max-width:840px){.meadow-scene .bush-br{transform:translate(-10px,10px);clip-path:polygon(0 0,100% 0,100% 94.5%,90% 97%,80% 94.5%,70% 97%,60% 95%,50% 97%,40% 94.5%,30% 97%,20% 95%,10% 97%,0 95%)}}
@media (min-width:541px) and (max-width:840px){.meadow-scene .birdie{left:calc(44% + 10px)!important}}
@media (min-width:541px) and (max-width:840px){.card p{font-size:17px}.card .link{font-size:.9rem}.pillars{margin-top:-60px;position:relative;z-index:2}}
@media (min-width:541px) and (max-width:840px){.plains .birds{top:calc(10% - 20px)!important}.plains{padding-top:calc(clamp(100px,14vw,200px) + 80px)}.plains blockquote{font-size:24.5px}.next .big{font-size:calc(clamp(4rem,12vw,10rem) + 2px)}}
@media (min-width:841px) and (max-width:950px){.gallery .trail{bottom:40px}}
@media (min-width:541px) and (max-width:840px){.gallery .trail{bottom:60px}.gallery{padding-bottom:calc(clamp(100px,15vw,200px) + 60px)}}
@media (min-width:841px) and (max-width:950px){.couples .photo{aspect-ratio:auto;height:0;padding-top:calc(112.5% + 100px)}.couples .photo img{object-position:50% 50%!important}}
/* 441-540px: 大きめスマホ (initially same as 320-440) */
@media (min-width:441px) and (max-width:540px){.why .authors .avatar{top:50%}}
@media (min-width:320px) and (max-width:540px){footer .ft-l1,footer .ft-l2{display:block}footer .grid>div:first-child p{white-space:normal!important}}
@media (min-width:441px) and (max-width:540px){.gallery .trail .bear{width:250px!important;left:-540px!important}}
@media (min-width:441px) and (max-width:540px){.hero .featured{max-width:none;padding:10px 5px 0}.hero .featured p{display:block}}
@media (min-width:441px) and (max-width:540px){.hero .photo-col{margin-top:20px}.hero .wrap{padding-top:136px}}
@media (min-width:441px) and (max-width:540px){.meadow-scene .bunny:not(.sniffer){bottom:calc(26% - 20px)!important}}
@media (min-width:441px) and (max-width:540px){.card p{font-size:16px}}
@media (min-width:441px) and (max-width:540px){.why blockquote{font-size:calc(clamp(1.7rem,3.1vw,2.5rem) + 2px)}}
@media (min-width:441px) and (max-width:540px){.card h3{font-size:25px}.card .link{font-size:.9rem}}
@media (min-width:441px) and (max-width:540px){.plains blockquote{font-size:24.5px}}
@media (min-width:441px) and (max-width:540px){.plains{padding-top:calc(clamp(100px,14vw,200px) + 80px)}.plains .birds{width:min(475px,66vw)!important}.next .big{font-size:calc(clamp(4rem,12vw,10rem) + 10px)}}
@media (min-width:441px) and (max-width:540px){.plains .baby{bottom:14px!important}}
@media (min-width:441px) and (max-width:540px){.trust .side-wolf{bottom:10px;display:block;width:124px}.trust .side-wolf.l{left:calc(5% - 20px)}.trust .side-wolf.r{right:calc(5% - 20px)}}
@media (min-width:441px) and (max-width:540px){.masonry{grid-template-rows:190px 130px 130px 130px 130px 190px 130px 130px 190px}}
@media (min-width:441px) and (max-width:540px){.gallery .trail{bottom:60px}.gallery{padding-bottom:calc(clamp(100px,15vw,200px) + 60px)}}
@media (min-width:441px) and (max-width:540px){.couples .photo{aspect-ratio:auto;height:0;padding-top:calc(112.5% - 80px)}.couples .grid{gap:calc(clamp(30px,6vw,90px) + 10px)}}
@media (min-width:441px) and (max-width:540px){.family{padding-top:120px}}
@media (min-width:441px) and (max-width:540px){.trust{padding-top:120px}}
@media (min-width:441px) and (max-width:540px){.story .birds{top:100px!important;left:40px!important;width:min(475px,66vw)!important}.story{padding-top:calc(120px + 15vw)}.story h2{font-size:35px}}
@media (min-width:441px) and (max-width:540px){.pillars{margin-top:-40px;position:relative;z-index:2}.pillars .cards{gap:calc(clamp(18px,3vw,36px) + 10px)}}
/* 403-440px: 大きめiPhone (initially same as 320-402) */
@media (min-width:403px) and (max-width:440px){.hero .featured{max-width:none;padding:10px 5px 0}.hero .featured p{display:block}}
@media (min-width:403px) and (max-width:440px){.hero .photo-col{margin-top:20px}.hero .wrap{padding-top:136px}}
@media (min-width:403px) and (max-width:440px){.hero .ground .hero-berry-l,.hero .ground .hero-sprig-l,.hero .ground .hero-grass-c{display:none}.hero .ground .hero-berry-s{transform:translateY(40px)}}
@media (min-width:403px) and (max-width:440px){.gal-sub{grid-template-rows:calc(59% - 50px) calc(41% - 40px);align-content:start;grid-template-columns:260fr 141fr 267fr}.gal-sub .ph:nth-child(3) img{transform:scale(1.35)}}
@media (min-width:403px) and (max-width:440px){.why .authors .avatar{top:50%;width:130px;height:130px;right:-20px}}
@media (min-width:403px) and (max-width:440px){.story .layers{inset:0 0 -30px 0}}
@media (min-width:403px) and (max-width:440px){.story .ridgecabin{left:calc(52% - 75px);width:229px;bottom:95px}.story .ridgepack{bottom:113px}.story .ridgepack .wolf-box:nth-of-type(1){left:calc(12% - 25px)!important}.story .ridgepack .wolf-box:nth-of-type(2){left:calc(28% - 10px)!important}.story .ridgepack .wolf-box:nth-of-type(3){left:calc(80% - 10px)!important}}
@media (min-width:403px) and (max-width:440px){.gallery .trail .bear{width:250px!important;left:-540px!important}#bearPrints{transform:scale(.83);transform-origin:50% 100%}}
@media (min-width:403px) and (max-width:440px){.plains .herd .animal:not(.baby){transform:scale(.83);transform-origin:50% 100%}.plains .herd .walker1 .animal{transform:scale(.69)}.plains .herd .b1{display:none}}
@media (min-width:403px) and (max-width:440px){.meadow-scene .bunny:not(.sniffer){bottom:calc(26% - 20px)!important}}
@media (min-width:403px) and (max-width:440px){.card p{font-size:16px}}
@media (min-width:403px) and (max-width:440px){.why blockquote{font-size:calc(clamp(1.7rem,3.1vw,2.5rem) + 2px)}}
@media (min-width:403px) and (max-width:440px){.card h3{font-size:25px}.card .link{font-size:.9rem}}
@media (min-width:403px) and (max-width:440px){.plains blockquote{font-size:24.5px}}
@media (min-width:403px) and (max-width:440px){.plains{padding-top:calc(clamp(100px,14vw,200px) + 60px)}.plains .birds{width:min(475px,66vw)!important}.next .big{font-size:calc(clamp(4rem,12vw,10rem) + 14px)}}
@media (min-width:403px) and (max-width:440px){.plains .baby{bottom:14px!important}}
@media (min-width:403px) and (max-width:440px){.trust .side-wolf{bottom:20px;display:block;width:114px}.trust .side-wolf.l{left:calc(5% - 20px)}.trust .side-wolf.r{right:calc(5% - 24px)}#trustPrints{transform:scale(.83);transform-origin:50% 100%}}
@media (min-width:403px) and (max-width:440px){.masonry{grid-template-rows:190px 130px 130px 130px 130px 190px 130px 130px 190px}}
@media (min-width:403px) and (max-width:440px){.gallery .trail{bottom:60px}.gallery{padding-bottom:calc(clamp(100px,15vw,200px) - 20px)}}
@media (min-width:403px) and (max-width:440px){.couples .photo{aspect-ratio:auto;height:0;padding-top:calc(112.5% - 80px)}.couples .grid{gap:calc(clamp(30px,6vw,90px) + 10px)}}
@media (min-width:403px) and (max-width:440px){.family{padding-top:120px}}
@media (min-width:403px) and (max-width:440px){.trust{padding-top:120px}}
@media (min-width:403px) and (max-width:440px){.story .birds{top:100px!important;left:40px!important;width:min(475px,66vw)!important}.story{padding-top:calc(120px + 15vw)}.story h2{font-size:35px}}
@media (min-width:403px) and (max-width:440px){.pillars{margin-top:-40px;position:relative;z-index:2}.pillars .cards{gap:calc(clamp(18px,3vw,36px) + 10px)}}
/* 394-402px: iPhone 16 Pro級 (initially same as 320-393) */
@media (min-width:394px) and (max-width:402px){.hero .ground .hero-sprig-r{display:none}}
@media (min-width:394px) and (max-width:402px){.hero .featured{max-width:none;padding:10px 5px 0}.hero .featured p{display:block}}
@media (min-width:394px) and (max-width:402px){.hero .photo-col{margin-top:20px}.hero .wrap{padding-top:136px}}
@media (min-width:394px) and (max-width:402px){.hero .ground .hero-berry-l,.hero .ground .hero-sprig-l,.hero .ground .hero-grass-c{display:none}.hero .ground .hero-berry-s{transform:translateY(40px)}}
@media (min-width:394px) and (max-width:402px){.why .authors .avatar{top:calc(50% - 45px);width:119px;height:119px;right:-10px}}
@media (min-width:394px) and (max-width:402px){.meadow-scene{transform:scale(1.1);transform-origin:50% 100%}}
@media (min-width:394px) and (max-width:402px){#whyClouds .cloud:nth-of-type(1){width:min(360px,30.3vw)!important}#whyClouds .cloud:nth-of-type(2){width:min(288px,24.5vw)!important}#whyClouds .cloud:nth-of-type(3){width:min(216px,18.8vw)!important}}
@media (min-width:394px) and (max-width:402px){.story .layers{inset:0 0 -30px 0}}
@media (min-width:394px) and (max-width:402px){.story .ridgecabin{left:calc(52% - 75px);width:229px;bottom:95px}.story .ridgepack{bottom:113px}.story .ridgepack .wolf-box:nth-of-type(1){left:calc(12% - 25px)!important}.story .ridgepack .wolf-box:nth-of-type(2){left:calc(28% - 10px)!important}.story .ridgepack .wolf-box:nth-of-type(3){left:calc(80% - 10px)!important}}
@media (min-width:394px) and (max-width:402px){.gallery .trail .bear{width:250px!important;left:-540px!important}#bearPrints{transform:scale(.83);transform-origin:50% 100%}}
@media (min-width:394px) and (max-width:402px){.plains .herd .animal:not(.baby){transform:scale(.83);transform-origin:50% 100%}.plains .herd .walker1 .animal{transform:scale(.69)}.plains .herd .b1{display:none}}
@media (min-width:394px) and (max-width:402px){.meadow-scene .bunny:not(.sniffer){bottom:calc(26% - 20px)!important}}
@media (min-width:394px) and (max-width:402px){.card p{font-size:16px}}
@media (min-width:394px) and (max-width:402px){.why blockquote{font-size:calc(clamp(1.7rem,3.1vw,2.5rem) + 2px)}}
@media (min-width:394px) and (max-width:402px){.card h3{font-size:25px}.card .link{font-size:.9rem}}
@media (min-width:394px) and (max-width:402px){.plains blockquote{font-size:23.5px}}
@media (min-width:394px) and (max-width:402px){.plains{padding-top:calc(clamp(100px,14vw,200px) + 70px)}.plains .birds{width:min(570px,79vw)!important}.next .big{font-size:calc(clamp(4rem,12vw,10rem) + 24px)}.plains{min-height:calc(100vh + 200px)}.plains .next{margin-bottom:60px}}
@media (min-width:394px) and (max-width:402px){.plains .baby{bottom:14px!important}}
@media (min-width:394px) and (max-width:402px){.trust .side-wolf{bottom:10px;display:block;width:125px}.trust .side-wolf.l{left:calc(5% - 20px)}.trust .side-wolf.r{right:calc(5% - 20px)}#trustPrints{transform:scale(.91);transform-origin:50% 100%}}
@media (min-width:394px) and (max-width:402px){.masonry{grid-template-rows:190px 130px 130px 130px 130px 190px 130px 130px 190px}}
@media (min-width:394px) and (max-width:402px){.gallery .trail{bottom:60px}.gallery{padding-bottom:calc(clamp(100px,15vw,200px) - 20px)}}
@media (min-width:394px) and (max-width:402px){.couples .photo{aspect-ratio:auto;height:0;padding-top:calc(112.5% - 80px)}.couples .grid{gap:calc(clamp(30px,6vw,90px) + 10px)}}
@media (min-width:394px) and (max-width:402px){.family{padding-top:105px}}
@media (min-width:394px) and (max-width:402px){.trust{padding-top:100px;padding-bottom:180px}}
@media (min-width:394px) and (max-width:402px){.couples{padding-top:calc(clamp(100px,12vw,180px) - 20px)}}
@media (min-width:394px) and (max-width:402px){.hero .featured{bottom:-82px}}
@media (min-width:394px) and (max-width:402px){.meadow-scene .meadow-flowers{transform:translateY(-5px)}.meadow-scene .mf-r{transform:translateY(-2px)}}
@media (min-width:394px) and (max-width:402px){.gal-sub{grid-template-rows:calc(59% - 80px) 41%;align-content:start;grid-template-columns:260fr 141fr 267fr}}
@media (min-width:394px) and (max-width:402px){.story .birds{top:100px!important;left:40px!important;width:min(570px,79vw)!important}.story{padding-top:calc(120px + 15vw)}.story h2{font-size:35px}}
@media (min-width:394px) and (max-width:402px){.pillars{margin-top:-40px;position:relative;z-index:2}.pillars .cards{gap:calc(clamp(18px,3vw,36px) + 10px)}}
/* 320-393px: 標準スマホ (394-402と同一デザインから調整開始) */
@media (min-width:360px) and (max-width:393px){.why blockquote .br-m{display:inline}.why blockquote .br-d{display:none}}
@media (min-width:360px) and (max-width:393px){.hero .ground .hero-sprig-r{display:none}}
@media (min-width:360px) and (max-width:393px){.hero .featured{max-width:none;padding:10px 5px 0}.hero .featured p{display:block}}
@media (min-width:360px) and (max-width:393px){.hero .photo-col{margin-top:20px}.hero .wrap{padding-top:136px}}
@media (min-width:360px) and (max-width:393px){.hero .ground .hero-berry-l,.hero .ground .hero-sprig-l,.hero .ground .hero-grass-c{display:none}.hero .ground .hero-berry-s{transform:translateY(40px)}}
@media (min-width:360px) and (max-width:393px){.why .authors .avatar{top:calc(50% - 45px);width:119px;height:119px;right:-10px}}
@media (min-width:360px) and (max-width:393px){.meadow-scene{transform:scale(1.1);transform-origin:50% 100%}}
@media (min-width:360px) and (max-width:393px){#whyClouds .cloud:nth-of-type(1){width:min(360px,30.3vw)!important}#whyClouds .cloud:nth-of-type(2){width:min(288px,24.5vw)!important}#whyClouds .cloud:nth-of-type(3){width:min(216px,18.8vw)!important}}
@media (min-width:360px) and (max-width:393px){.story .layers{inset:0 0 -30px 0}}
@media (min-width:360px) and (max-width:393px){.story .ridgecabin{left:calc(52% - 75px);width:229px;bottom:95px}.story .ridgepack{bottom:113px}.story .ridgepack .wolf-box:nth-of-type(1){left:calc(12% - 25px)!important}.story .ridgepack .wolf-box:nth-of-type(2){left:calc(28% - 10px)!important}.story .ridgepack .wolf-box:nth-of-type(3){left:calc(80% - 10px)!important}}
@media (min-width:360px) and (max-width:393px){.gallery .trail .bear{width:250px!important;left:-540px!important}#bearPrints{transform:scale(.83);transform-origin:50% 100%}}
@media (min-width:360px) and (max-width:393px){.plains .herd .animal:not(.baby){transform:scale(.83);transform-origin:50% 100%}.plains .herd .walker1 .animal{transform:scale(.69)}.plains .herd .b1{display:none}}
@media (min-width:360px) and (max-width:393px){.meadow-scene .bunny:not(.sniffer){bottom:calc(26% - 20px)!important}}
@media (min-width:360px) and (max-width:393px){.card p{font-size:16px}}
@media (min-width:360px) and (max-width:393px){.why blockquote{font-size:calc(clamp(1.7rem,3.1vw,2.5rem) + 2px)}}
@media (min-width:360px) and (max-width:393px){.card h3{font-size:25px}.card .link{font-size:.9rem}}
@media (min-width:360px) and (max-width:393px){.plains blockquote{font-size:23.5px}}
@media (min-width:360px) and (max-width:393px){.plains{padding-top:calc(clamp(100px,14vw,200px) + 70px)}.plains .birds{width:min(570px,79vw)!important;left:-45%!important}.next .big{font-size:calc(clamp(4rem,12vw,10rem) + 24px)}.plains{min-height:calc(100vh + 200px)}.plains .next{margin-bottom:60px}}
@media (min-width:360px) and (max-width:393px){.plains .baby{bottom:14px!important}}
@media (min-width:360px) and (max-width:393px){.trust .side-wolf{bottom:10px;display:block;width:125px}.trust .side-wolf.l{left:calc(5% - 20px)}.trust .side-wolf.r{right:calc(5% - 20px)}#trustPrints{transform:scale(.91);transform-origin:50% 100%}}
@media (min-width:360px) and (max-width:393px){.masonry{grid-template-rows:190px 130px 130px 130px 130px 190px 130px 130px 190px}}
@media (min-width:360px) and (max-width:393px){.gallery .trail{bottom:60px}.gallery{padding-bottom:calc(clamp(100px,15vw,200px) - 20px)}}
@media (min-width:360px) and (max-width:393px){.couples .photo{aspect-ratio:auto;height:0;padding-top:calc(112.5% - 80px)}.couples .grid{gap:calc(clamp(30px,6vw,90px) + 10px)}}
@media (min-width:360px) and (max-width:393px){.family{padding-top:105px}}
@media (min-width:360px) and (max-width:393px){.trust{padding-top:100px;padding-bottom:180px}}
@media (min-width:360px) and (max-width:393px){.couples{padding-top:calc(clamp(100px,12vw,180px) - 20px)}}
@media (min-width:360px) and (max-width:393px){.hero .featured{bottom:-82px}}
@media (min-width:360px) and (max-width:393px){.meadow-scene .meadow-flowers{transform:translateY(-5px)}.meadow-scene .mf-r{transform:translateY(-2px)}}
@media (min-width:360px) and (max-width:393px){.gal-sub{grid-template-rows:calc(59% - 80px) 41%;align-content:start;grid-template-columns:260fr 141fr 267fr}}
@media (min-width:360px) and (max-width:393px){.story .birds{top:100px!important;left:40px!important;width:min(570px,79vw)!important}.story{padding-top:calc(120px + 15vw)}.story h2{font-size:35px}}
@media (min-width:360px) and (max-width:393px){.pillars{margin-top:-40px;position:relative;z-index:2}.pillars .cards{gap:calc(clamp(18px,3vw,36px) + 10px)}}
@media (max-width:540px){footer .copy{flex-direction:column;gap:5px;align-items:center}}
@media (min-width:360px) and (max-width:393px){footer ul{gap:6px 16px}}
@media (min-width:320px) and (max-width:359px){footer ul{gap:6px 8px}footer li{font-size:15px}}
@media (max-width:440px){footer .trail{transform:translateY(-20px)}}
/* 320-359px: 旧型小型スマホ (initially same as 360-393) */
@media (min-width:320px) and (max-width:359px){.why blockquote .br-m{display:inline}.why blockquote .br-d{display:none}}
@media (min-width:320px) and (max-width:359px){.hero .ground .hero-sprig-r{display:none}}
@media (min-width:320px) and (max-width:359px){.hero .featured{max-width:none;padding:10px 5px 0}.hero .featured p{display:block}}
@media (min-width:320px) and (max-width:359px){.hero .photo-col{margin-top:20px}.hero .wrap{padding-top:136px}}
@media (min-width:320px) and (max-width:359px){.hero .ground .hero-berry-l,.hero .ground .hero-sprig-l,.hero .ground .hero-grass-c{display:none}.hero .ground .hero-berry-s{transform:translateY(40px)}}
@media (min-width:320px) and (max-width:359px){.why .authors .avatar{top:calc(50% - 45px);width:119px;height:119px;right:-15px}}
@media (min-width:320px) and (max-width:359px){.why li{gap:calc(.6em - 8px)}}
@media (min-width:320px) and (max-width:359px){.meadow-scene .meadow-cabin{transform:translateY(15px)}}
@media (min-width:320px) and (max-width:359px){.meadow-scene{transform:scale(1.1);transform-origin:50% 100%}}
@media (min-width:320px) and (max-width:359px){#whyClouds .cloud:nth-of-type(1){width:min(360px,30.3vw)!important}#whyClouds .cloud:nth-of-type(2){width:min(288px,24.5vw)!important}#whyClouds .cloud:nth-of-type(3){width:min(216px,18.8vw)!important}}
@media (min-width:320px) and (max-width:359px){.story .layers{inset:0 0 -30px 0}}
@media (min-width:320px) and (max-width:359px){.story .ridgecabin{left:calc(52% - 75px);width:229px;bottom:95px}.story .ridgepack{bottom:113px}.story .ridgepack .wolf-box:nth-of-type(1){left:calc(12% - 25px)!important}.story .ridgepack .wolf-box:nth-of-type(2){left:calc(28% - 10px)!important}.story .ridgepack .wolf-box:nth-of-type(3){left:calc(80% - 10px)!important}}
@media (min-width:320px) and (max-width:359px){.gallery .trail .bear{width:250px!important;left:-540px!important}#bearPrints{transform:scale(.83);transform-origin:50% 100%}}
@media (min-width:320px) and (max-width:359px){.plains .herd .animal:not(.baby){transform:scale(.83);transform-origin:50% 100%}.plains .herd .walker1 .animal{transform:scale(.69)}.plains .herd .b1{display:none}}
@media (min-width:320px) and (max-width:359px){.meadow-scene .bunny:not(.sniffer){bottom:calc(26% - 20px)!important}}
@media (min-width:320px) and (max-width:359px){.card p{font-size:16px}}
@media (min-width:320px) and (max-width:359px){.why blockquote{font-size:calc(clamp(1.7rem,3.1vw,2.5rem) + 2px)}}
@media (min-width:320px) and (max-width:359px){.card h3{font-size:25px}.card .link{font-size:.9rem}}
@media (min-width:320px) and (max-width:359px){.plains blockquote{font-size:23.5px}}
@media (min-width:320px) and (max-width:359px){.plains{padding-top:calc(clamp(100px,14vw,200px) + 70px)}.plains .birds{width:min(570px,79vw)!important;left:-45%!important}.next .big{font-size:calc(clamp(4rem,12vw,10rem) + 24px)}.plains{min-height:calc(100vh + 200px)}.plains .next{margin-bottom:60px}}
@media (min-width:320px) and (max-width:359px){.plains .baby{bottom:14px!important}}
@media (min-width:320px) and (max-width:359px){.trust .side-wolf{bottom:10px;display:block;width:125px}.trust .side-wolf.l{left:calc(5% - 20px)}.trust .side-wolf.r{right:calc(5% - 20px)}#trustPrints{transform:translateY(-40px) scale(.76);transform-origin:50% 100%}}
@media (min-width:320px) and (max-width:359px){.masonry{grid-template-rows:190px 130px 130px 130px 130px 190px 130px 130px 190px}}
@media (min-width:320px) and (max-width:359px){.gallery .trail{bottom:60px}.gallery{padding-bottom:calc(clamp(100px,15vw,200px) - 20px)}}
@media (min-width:320px) and (max-width:359px){.couples .photo{aspect-ratio:auto;height:0;padding-top:calc(112.5% - 80px)}.couples .grid{gap:calc(clamp(30px,6vw,90px) + 10px)}}
@media (min-width:320px) and (max-width:359px){.family{padding-top:105px}}
@media (min-width:320px) and (max-width:359px){.trust{padding-top:100px;padding-bottom:180px}}
@media (min-width:320px) and (max-width:359px){.couples{padding-top:calc(clamp(100px,12vw,180px) - 20px)}}
@media (min-width:541px) and (max-width:840px){.couples{padding-bottom:calc(clamp(200px,26vw,340px) + 60px)}}
@media (min-width:320px) and (max-width:359px){.hero .featured{bottom:-82px}}
@media (min-width:320px) and (max-width:359px){.meadow-scene .meadow-flowers{transform:translateY(-5px)}.meadow-scene .mf-r{transform:translateY(-2px)}}
@media (min-width:320px) and (max-width:359px){.gal-sub{grid-template-rows:calc(59% - 80px) 41%;align-content:start;grid-template-columns:260fr 141fr 267fr}}
@media (min-width:320px) and (max-width:359px){.story .birds{top:100px!important;left:40px!important;width:min(570px,79vw)!important}.story{padding-top:calc(120px + 15vw)}.story h2{font-size:35px}}
@media (min-width:320px) and (max-width:359px){.pillars{margin-top:-40px;position:relative;z-index:2}.pillars .cards{gap:calc(clamp(18px,3vw,36px) + 10px)}}
@media (max-width:540px){.nav.open .menu{width:50vw}.nav.open .menu > li{transform:translateX(20px)}}
@media (min-width:441px) and (max-width:540px){footer .trail{transform:translateY(-20px)}}
@media (max-width:402px){.hero .featured{width:186px;height:186px;bottom:-92px}}
@media (max-width:402px){.hero .photo-col .photo{aspect-ratio:auto;height:calc((100vw - 40px)*.625 + 40px)}.hero .photo-col{margin-bottom:-40px}}
@media (max-width:402px){.hero .wrap{padding-top:121px;padding-bottom:calc(40vh + 39px)}}
@media (min-width:394px) and (max-width:402px){.why blockquote .br-m{display:inline}.why blockquote .br-d{display:none}}
@media (max-width:402px){p{font-size:22px}.eyebrow,.hero .eyebrow,.why .eyebrow,.trust .eyebrow,.gallery .eyebrow,.couples .eyebrow,.family .eyebrow,.plains .next .eyebrow{font-size:15px}}
@media (max-width:402px){.why ul li{font-size:20px}.why .authors{font-size:17px}.why .authors small{font-size:16px}}
@media (max-width:402px){.card h3{font-size:32px}.card p{font-size:20px}.card .link{font-size:16px}}
@media (max-width:402px){.why blockquote{font-size:31px}}
@media (max-width:402px){.why .authors .avatar{top:calc(50% - 105px);width:131px;height:131px}}
@media (max-width:402px){#whyClouds .cloud:nth-of-type(1){width:min(432px,36.4vw)!important}#whyClouds .cloud:nth-of-type(2){width:min(346px,29.4vw)!important}#whyClouds .cloud:nth-of-type(3){width:min(259px,22.6vw)!important}}
@media (max-width:402px){.plains blockquote{font-size:28px}}
@media (max-width:402px){.couples h3{font-size:28px}}
@media (max-width:402px){.couples p .link{font-size:18px}}
@media (max-width:402px){.plains cite{font-size:15px}}
@media (max-width:402px){.trust p,.story p{font-size:22px}}
@media (max-width:402px){.plains .birds,.story .birds{width:min(627px,86.9vw)!important}}
@media (max-width:402px){.story{padding-top:calc(140px + 15vw)}}
@media (max-width:402px){.plains{padding-top:calc(clamp(100px,14vw,200px) + 90px)}}
@media (max-width:402px){footer .grid>div:first-child p{font-size:18px!important}footer h4{font-size:15px}footer ul{max-width:280px;gap:4px 32px}footer .social{gap:24px}footer .social a{width:41px;height:41px}footer .social svg{width:18px;height:18px}footer li{font-size:20px}footer .copy{font-size:14px}}
@media (max-width:393px){.why blockquote{font-size:26px}}
@media (min-width:360px) and (max-width:393px){.why li{gap:calc(.6em - 10px)}.why ul li{font-size:19.5px}}
@media (max-width:359px){.why .authors .avatar{width:108px;height:108px}.why blockquote{font-size:25px}.why ul{grid-template-columns:minmax(0,1fr)}.plains{min-height:calc(100vh + 320px)}footer .grid>div:first-child p{font-size:16px!important}.why .authors .avatar img{transform:scale(1.16) translateX(7px)}}
</style>
<style>
/* ---- blog list (bl-*) — index3のトークンを使用。フッター上端はストレート ---- */
.reveal,.print{opacity:1;transform:none}
:root{--bl-guide:#6f8a6b;--bl-tips:#7d9aa8;--bl-reviews:#d2793f}
.bl-head{padding:clamp(120px,15vw,170px) 0 clamp(6px,1.5vw,18px);position:relative;overflow:visible}
.bl-head .eyebrow{font-size:.885rem}
.bl-head h1{font-size:clamp(2.6rem,5.6vw,4.6rem)}
.bl-head h1 .ital{font-style:italic;font-weight:400;color:var(--accent-d)}
.bl-sub{max-width:520px;color:var(--ink-soft)}
.bl-sun{position:absolute;right:clamp(20px,6vw,80px);top:100px;width:min(120px,12vw);opacity:.9;pointer-events:none}
.bl-wolves{position:absolute;right:calc(clamp(24px,6vw,90px) + 100px);bottom:-70px;display:flex;align-items:flex-end;gap:16px;pointer-events:none;z-index:2}
.bl-wolves img{height:clamp(150px,21vw,290px);width:auto;filter:drop-shadow(0 14px 12px rgba(58,49,41,.18))}
@media(min-width:841px) and (max-width:950px){.bl-wolves{right:calc(clamp(24px,6vw,90px) + 20px)}}
@media(max-width:540px){.bl-wolves{margin-top:20px}}
@media(max-width:402px){.bl-head{padding-top:120px}.bl-wolves{margin-top:-20px;z-index:3}.bl-sun{top:80px;z-index:0}.bl-cats{margin-top:6px}}
@media(max-width:840px){.bl-wolves{right:auto;left:min(62vw,470px);gap:6px;bottom:auto;top:calc(clamp(120px,15vw,170px) - 14px)}.bl-wolves img{height:clamp(70px,13vw,127px)}}
.bl-cats{display:flex;flex-wrap:wrap;gap:12px;margin:26px 0 40px}
.bl-cat{display:inline-flex;align-items:center;gap:.55em;font-size:.92rem;letter-spacing:.2em;text-transform:uppercase;font-weight:700;padding:.7em 1.4em;border-radius:999px;border:1px solid var(--ink-mute);transition:.3s}
.bl-cat svg{width:13px;height:13px;fill:currentColor}
.bl-cat:hover{transform:translateY(-2px)}
.bl-cat.on{background:var(--ink);color:var(--paper);border-color:var(--ink)}
.bl-cat.g:hover,.bl-cat.g.on{background:var(--bl-guide);border-color:var(--bl-guide);color:#fff}
.bl-cat.t:hover,.bl-cat.t.on{background:var(--bl-tips);border-color:var(--bl-tips);color:#fff}
.bl-cat.r:hover,.bl-cat.r.on{background:var(--bl-reviews);border-color:var(--bl-reviews);color:#fff}
.bl-feat{display:grid;grid-template-columns:1.15fr 1fr;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 30px 60px -26px rgba(58,49,41,.32);margin-bottom:clamp(36px,5vw,60px)}
.bl-feat .im{position:relative;min-height:340px}
.bl-feat .im img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.bl-feat .tx{padding:clamp(28px,4vw,52px);display:flex;flex-direction:column;justify-content:center}
.bl-feat h2{font-size:clamp(1.7rem,3vw,2.5rem);margin:.3em 0 .35em}
.bl-feat p{color:var(--ink-soft);font-size:15.5px}
.bl-latest{position:absolute;left:18px;top:18px;background:rgba(246,241,230,.95);border:1px solid var(--accent);color:var(--accent-d);font-size:.68rem;letter-spacing:.24em;text-transform:uppercase;font-weight:700;padding:.55em 1.1em;border-radius:999px}
@media(max-width:800px){.bl-feat{grid-template-columns:1fr}.bl-feat .im{min-height:230px}}
.bl-meta{display:flex;align-items:center;gap:14px;font-size:.74rem;letter-spacing:.18em;text-transform:uppercase;font-weight:700;color:var(--ink-mute)}
.bl-badge{display:inline-block;padding:.35em .95em;border-radius:999px;color:#fff;font-size:.68rem;letter-spacing:.2em}
.bl-readmore{font-size:.8rem;letter-spacing:.2em;text-transform:uppercase;font-weight:700;border-bottom:2px solid var(--accent);padding-bottom:.2em;align-self:flex-start}
.bl-readmore:hover{color:var(--accent-d)}
.bl-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(18px,2.6vw,30px)}
@media(max-width:960px){.bl-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:640px){.bl-grid{grid-template-columns:1fr}}
.bl-post{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 22px 44px -22px var(--shadow);display:flex;flex-direction:column;transition:transform .35s,box-shadow .35s;border-top:6px solid var(--c,var(--accent))}
.bl-post:hover{transform:translateY(-6px);box-shadow:0 34px 60px -22px rgba(58,49,41,.3)}
.bl-post .im{position:relative;aspect-ratio:16/10;overflow:hidden}
.bl-post .im img{width:100%;height:100%;object-fit:cover;transition:transform .6s}
.bl-post:hover .im img{transform:scale(1.05)}
.bl-post .tx{padding:22px 24px 24px;display:flex;flex-direction:column;gap:10px;flex:1}
.bl-post h3{font-size:1.32rem;margin:0;line-height:1.2}
.bl-post p{font-size:14.5px;color:var(--ink-soft);margin:0;flex:1}
.bl-post .bl-meta{font-size:.68rem}
@media (min-width:541px) and (max-width:840px){.bl-feat p,.bl-post p{font-size:17px}.bl-feat h2,.bl-post h3{font-size:18px}}
@media (min-width:403px) and (max-width:540px){.bl-feat p,.bl-post p{font-size:16px}.bl-feat h2,.bl-post h3{font-size:17px}}
@media (max-width:402px){.bl-feat p,.bl-post p{font-size:21px}.bl-feat h2,.bl-post h3{font-size:25px}.bl-readmore{font-size:14px}.bl-feat .bl-meta{font-size:14px}.bl-post .bl-meta{font-size:13px}.bl-badge{font-size:12px}.bl-cat{font-size:13.4px}}
.bl-pawline{display:flex;justify-content:center;gap:26px;margin:clamp(40px,6vw,64px) 0 clamp(28px,4vw,40px);opacity:.35}
.bl-pawline svg{width:20px;height:20px;fill:var(--ink-soft)}
.bl-pawline svg:nth-child(even){transform:rotate(18deg) translateY(-6px)}
.bl-pawline svg:nth-child(odd){transform:rotate(-14deg)}
.bl-pager{display:flex;justify-content:center;gap:18px;margin:0 0 clamp(20px,6.5vw,90px);flex-wrap:wrap}
.bl-pager a{display:inline-flex;align-items:center;gap:.6em;font-size:.92rem;letter-spacing:.2em;text-transform:uppercase;font-weight:700;padding:1.1em 2em;border-radius:999px;color:var(--ink);border:1px solid var(--ink);transition:.35s}
.bl-pager a:hover{background:var(--ink);color:var(--paper);transform:translateY(-3px)}
footer{margin-top:0;padding-top:calc(clamp(60px,8vw,100px) - 60px)}
@media(max-width:950px){footer{padding-top:60px}}
@media(max-width:540px){footer{padding-top:40px}.bl-pager{margin-bottom:calc(clamp(20px,6.5vw,90px) + 20px)}}
@media(max-width:402px){.bl-pager{margin-bottom:calc(clamp(20px,6.5vw,90px) + 40px)}}
.bl-none{padding:40px 0 80px;color:var(--ink-soft)}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="grain" aria-hidden="true"></div>
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <filter id="wc" x="-10%" y="-10%" width="120%" height="120%"><feTurbulence type="fractalNoise" baseFrequency=".035" numOctaves="3" seed="3" result="n"/><feDisplacementMap in="SourceGraphic" in2="n" scale="7" xChannelSelector="R" yChannelSelector="G"/></filter>
    <filter id="wc2" x="-10%" y="-10%" width="120%" height="120%"><feTurbulence type="fractalNoise" baseFrequency=".05" numOctaves="2" seed="9" result="n"/><feDisplacementMap in="SourceGraphic" in2="n" scale="5" xChannelSelector="R" yChannelSelector="G"/></filter>
    <filter id="wcsoft" x="-20%" y="-20%" width="140%" height="140%"><feTurbulence type="fractalNoise" baseFrequency=".02" numOctaves="3" seed="5" result="n"/><feDisplacementMap in="SourceGraphic" in2="n" scale="18" xChannelSelector="R" yChannelSelector="G"/><feGaussianBlur stdDeviation=".6"/></filter>
    <filter id="wcTex" x="-5%" y="-5%" width="110%" height="110%">
      <feTurbulence type="fractalNoise" baseFrequency=".9" numOctaves="2" seed="4" result="t"/>
      <feColorMatrix in="t" type="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 .9 -.15" result="ta"/>
      <feComposite in="SourceGraphic" in2="ta" operator="in" result="tex"/>
      <feBlend in="tex" in2="SourceGraphic" mode="multiply" result="m"/>
      <feTurbulence type="fractalNoise" baseFrequency=".012" numOctaves="2" seed="8" result="b"/>
      <feColorMatrix in="b" type="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 .7 0" result="ba"/>
      <feComposite in="m" in2="ba" operator="arithmetic" k1="0" k2="1" k3="-.18" k4="0"/>
    </filter>
    <linearGradient id="m1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#cfd6e3"/><stop offset="1" stop-color="#e9ebef"/></linearGradient>
    <linearGradient id="m2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#aab4c4"/><stop offset="1" stop-color="#d6dbe2"/></linearGradient>
    <linearGradient id="m3" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#7f8ea0"/><stop offset="1" stop-color="#b9c2cc"/></linearGradient>
    <linearGradient id="phWarm" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#e9b98a"/><stop offset=".5" stop-color="#c9855a"/><stop offset="1" stop-color="#7a4b30"/></linearGradient>
    <linearGradient id="phCool" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#d7e6ee"/><stop offset="1" stop-color="#7f9aa8"/></linearGradient>
    <linearGradient id="phPine" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#c9d6c2"/><stop offset="1" stop-color="#5a7457"/></linearGradient>
    <linearGradient id="phDusk" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#f4c9a6"/><stop offset="1" stop-color="#8d6f88"/></linearGradient>
    <radialGradient id="moonG" cx=".4" cy=".4" r=".7"><stop offset="0" stop-color="#fffdf5"/><stop offset=".7" stop-color="#f6ecd2"/><stop offset="1" stop-color="#ecd9b3"/></radialGradient>
    <radialGradient id="sunG" cx=".5" cy=".5" r=".5"><stop offset="0" stop-color="#ffd9a3"/><stop offset=".6" stop-color="#f7b877"/><stop offset="1" stop-color="#f3a25f" stop-opacity="0"/></radialGradient>
    <symbol id="logoMark" viewBox="0 0 100 100">
      <rect x="20" y="20" width="60" height="60" transform="rotate(45 50 50)" fill="none" stroke="currentColor" stroke-width="7"/>
      <g transform="rotate(45 50 50)" fill="none" stroke="currentColor" stroke-width="7">
        <path d="M30 56 V30 H62 V47 H46 V38"/>
      </g>
      <path d="M63 38 C 55 54, 42 63, 26 65 C 44 71, 59 61, 65 44 Z" fill="currentColor"/>
      <path d="M66 46 C 64 60, 58 72, 48 81 C 60 76, 68 65, 70 51 Z" fill="currentColor"/>
      <path d="M71 53 C 72 63, 69 72, 63 79 C 71 74, 76 65, 76 55 Z" fill="currentColor"/>
      <path d="M69 41 L80 52 L69 60 Z" fill="currentColor"/>
    </symbol>
    <symbol id="pawIconOrange" viewBox="0 0 40 40"><g style="fill:var(--accent)"><path d="M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z"/><ellipse cx="9" cy="16" rx="3.4" ry="4.6" transform="rotate(-18 9 16)"/><ellipse cx="16" cy="9" rx="3.4" ry="4.8"/><ellipse cx="24" cy="9" rx="3.4" ry="4.8"/><ellipse cx="31" cy="16" rx="3.4" ry="4.6" transform="rotate(18 31 16)"/></g></symbol>
    <symbol id="pawIcon" viewBox="0 0 40 40"><g fill="#3a3129"><path d="M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z"/><ellipse cx="9" cy="16" rx="3.4" ry="4.6" transform="rotate(-18 9 16)"/><ellipse cx="16" cy="9" rx="3.4" ry="4.8"/><ellipse cx="24" cy="9" rx="3.4" ry="4.8"/><ellipse cx="31" cy="16" rx="3.4" ry="4.6" transform="rotate(18 31 16)"/></g></symbol>
  </defs>
</svg>
<nav class="nav" id="nav">
  <div class="wrap">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="BrianShio home"><img class="logo-mark" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/logo.png" alt="">BrianShio</a>
    <ul class="menu">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
      <li><a class="active" href="<?php echo esc_url( bs_blog_url() ); ?>">Blog</a><ul class="sub"><li><a href="<?php echo esc_url( bs_cat_url( 'guides' ) ); ?>">Guides</a></li><li><a href="<?php echo esc_url( bs_cat_url( 'reviews' ) ); ?>">Reviews</a></li><li><a href="<?php echo esc_url( bs_cat_url( 'tips' ) ); ?>">Tips</a></li></ul></li>
      <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="social" aria-label="social links">
      <a href="#" aria-label="YouTube"><svg viewBox="0 0 24 24"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8zM9.6 15.6V8.4l6.3 3.6-6.3 3.6z"/></svg></a>
      <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 3.3.1 4.8 1.7 4.9 4.9.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 3.2-1.7 4.8-4.9 4.9-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-3.3-.1-4.8-1.7-4.9-4.9C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8C2.4 3.9 4 2.4 7.2 2.3c1.2-.1 1.6-.1 4.8-.1zM12 0C8.7 0 8.3 0 7.1.1 2.7.3.3 2.7.1 7.1 0 8.3 0 8.7 0 12s0 3.7.1 4.9c.2 4.4 2.6 6.8 7 7 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c4.4-.2 6.8-2.6 7-7 .1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.2-4.4-2.6-6.8-7-7C15.7 0 15.3 0 12 0zm0 5.8a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.8a1.4 1.4 0 1 0 0 2.8 1.4 1.4 0 0 0 0-2.8z"/></svg></a>
      <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M24 12a12 12 0 1 0-13.9 11.9v-8.4H7.1V12h3V9.4c0-3 1.8-4.7 4.5-4.7 1.3 0 2.7.2 2.7.2v3h-1.5c-1.5 0-2 .9-2 1.9V12h3.3l-.5 3.5h-2.8v8.4A12 12 0 0 0 24 12z"/></svg></a>
    </div>
    <button class="burger" id="burger" aria-label="menu"><span></span><span></span><span></span></button>
  </div>
</nav>
