<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecetasController;
use App\Http\Controllers\DesayunosController;
use App\Http\Controllers\AlmuerzosController;
use App\Http\Controllers\BebidasController;
use App\Http\Controllers\CenasController;
use App\Http\Controllers\PostresController;
use App\Http\Controllers\SnaksController;
use App\Http\Controllers\ConsejosController;
use App\Http\Controllers\PlanificacionController;
use App\Http\Controllers\BlogController;
use App\Models\Contacto;

// routes/web.php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DesafioController;

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store'); // Enviar comentario
Route::post('/desafio', [DesafioController::class, 'actualizarDesafio'])->name('desafio.actualizar');

// Rutas principales 
// routes/web.php

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/recetas', [RecetasController::class, 'index'])->name('recetas');
Route::get('/consejos', [ConsejosController::class, 'index'])->name('consejos');
Route::get('/planificacion', [PlanificacionController::class, 'index'])->name('planificacion');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contacto', [PostController::class, 'contacto'])->name('contacto');
Route::get('/sobre-nosotros', [PostController::class, 'sobreNosotros'])->name('sobreNosotros');
Route::get('/privacy', [PostController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PostController::class, 'terms'])->name('terms');

//database
Route::post('/contacto', [PostController::class, 'guardarContacto'])->name('contacto');

//Recetas Desayunos
Route::get('/desayunos', [RecetasController::class, 'desayunos'])->name('desayunos');
Route::get('/desayunos/bagel-atun', [DesayunosController::class, 'bagelAtun'])->name('desayunos.bagelAtun');
Route::get('/desayunos/bAA', [DesayunosController::class, 'bAA'])->name('desayunos.bAA');
Route::get('/desayunos/cC', [DesayunosController::class, 'cC'])->name('desayunos.cC');
Route::get('/desayunos/mNC', [DesayunosController::class, 'mNC'])->name('desayunos.mNC');
Route::get('/desayunos/pZ', [DesayunosController::class, 'pZ'])->name('desayunos.pZ');
Route::get('/desayunos/sHTF', [DesayunosController::class, 'sHTF'])->name('desayunos.sHTF');
Route::get('/desayunos/tHTA', [DesayunosController::class, 'tHTA'])->name('desayunos.tHTA');
Route::get('/desayunos/vAC', [DesayunosController::class, 'vAC'])->name('desayunos.vAC');
Route::get('/desayunos/vAYM', [DesayunosController::class, 'vAYM'])->name('desayunos.vAYM');
//REcetas Almuerzoz
Route::get('/almuerzos', [RecetasController::class, 'almuerzos'])->name('almuerzos');
Route::get('/almuerzos/berCA', [AlmuerzosController::class, 'berCA'])->name('almuerzos.berCA');
Route::get('/almuerzos/cEM', [AlmuerzosController::class, 'cEM'])->name('almuerzos.cEM');
Route::get('/almuerzos/cFAEG', [AlmuerzosController::class, 'cFAEG'])->name('almuerzos.cFAEG');
Route::get('/almuerzos/eAAM', [AlmuerzosController::class, 'eAAM'])->name('almuerzos.eAAM');
Route::get('/almuerzoss/eFPP', [AlmuerzosController::class, 'eFPP'])->name('almuerzos.eFPP');
Route::get('/almuerzos/eSEQ', [AlmuerzosController::class, 'eSEQ'])->name('almuerzos.eSEQ');
Route::get('/almuerzoss/fAJI', [AlmuerzosController::class, 'fAJI'])->name('almuerzos.fAJI');
Route::get('/almuerzos/pPVP', [AlmuerzosController::class, 'pPVP'])->name('almuerzos.pPVP');
Route::get('/almuerzos/qSVTP', [AlmuerzosController::class, 'qSVTP'])->name('almuerzos.qSVTP');
Route::get('/almuerzos/espagv', [AlmuerzosController::class, 'espagV'])->name('almuerzos.espagV');

// Página general de bebidas
Route::get('/bebidas', [RecetasController::class, 'bebidas'])->name('bebidas');
Route::get('/bebidas/aafp', [BebidasController::class, 'aAFP'])->name('bebidas.aAFP');
Route::get('/bebidas/acm', [BebidasController::class, 'aCM'])->name('bebidas.aCM');
Route::get('/bebidas/agp', [BebidasController::class, 'aGP'])->name('bebidas.aGP');
Route::get('/bebidas/ah', [BebidasController::class, 'aH'])->name('bebidas.aH');
Route::get('/bebidas/hm', [BebidasController::class, 'hM'])->name('bebidas.hM');
Route::get('/bebidas/lmc', [BebidasController::class, 'lMC'])->name('bebidas.lMC');
Route::get('/bebidas/pi', [BebidasController::class, 'pi'])->name('bebidas.pi');
Route::get('/bebidas/sachp', [BebidasController::class, 'sACHP'])->name('bebidas.sACHP');
Route::get('/bebidas/scrmy', [BebidasController::class, 'sCRMY'])->name('bebidas.sCRMY');
Route::get('/bebidas/smov', [BebidasController::class, 'smoV'])->name('bebidas.smoV');

//recetas de cenas
Route::get('/cenas', [RecetasController::class, 'cenas'])->name('cenas');
Route::get('/cenas/brpgr', [CenasController::class, 'brPGR'])->name('cenas.brPGR');
Route::get('/cenas/cap', [CenasController::class, 'cAP'])->name('cenas.cAP');
Route::get('/cenas/cjvg', [CenasController::class, 'cJVG'])->name('cenas.cJVG');
Route::get('/cenas/cv', [CenasController::class, 'cV'])->name('cenas.cV');
Route::get('/cenas/lvl', [CenasController::class, 'lVL'])->name('cenas.lVL');
Route::get('/cenas/rech', [CenasController::class, 'rECH'])->name('cenas.rECH');
Route::get('/cenas/spae', [CenasController::class, 'sPAE'])->name('cenas.sPAE');
Route::get('/cenas/svj', [CenasController::class, 'sVJ'])->name('cenas.sVJ');
Route::get('/cenas/tcj', [CenasController::class, 'tCJ'])->name('cenas.tCJ');

//recetas de postres
Route::get('/postres', [RecetasController::class, 'postres'])->name('postres');
Route::get('/postres/baguacate', [PostresController::class, 'bAguacate'])->name('postres.bAguacate');
Route::get('/postres/bfr', [PostresController::class, 'bFR'])->name('postres.bFR');
Route::get('/postres/bfrkch', [PostresController::class, 'bFRKCH'])->name('postres.bFRKCH');
Route::get('/postres/blym', [PostresController::class, 'bLYM'])->name('postres.bLYM');
Route::get('/postres/cpy', [PostresController::class, 'cPY'])->name('postres.cPY');
Route::get('/postres/flfr', [PostresController::class, 'flFR'])->name('postres.flFR');
Route::get('/postres/pmhtm', [PostresController::class, 'pMHTM'])->name('postres.pMHTM');
Route::get('/postres/smm', [PostresController::class, 'sMM'])->name('postres.sMM');
Route::get('/postres/ydc', [PostresController::class, 'yDC'])->name('postres.yDC');
Route::get('/postres/lemonco', [PostresController::class, 'lemonCo'])->name('postres.lemonCo');

//recetas snacks
Route::get('/snacks', [RecetasController::class, 'snacks'])->name('snacks');
Route::get('/snacks/acrs', [SnaksController::class, 'aCRS'])->name('snacks.aCRS');
Route::get('/snacks/bajonjoli', [SnaksController::class, 'bAJONJOLI'])->name('snacks.bAJONJOLI');
Route::get('/snacks/bbc', [SnaksController::class, 'bBC'])->name('snacks.bBC');
Route::get('/snacks/brpa', [SnaksController::class, 'brPA'])->name('snacks.brPA');
Route::get('/snacks/gfre', [SnaksController::class, 'gFRE'])->name('snacks.gFRE');
Route::get('/snacks/mcal', [SnaksController::class, 'mCAL'])->name('snacks.mCAL');

// Subpáginas de consejos
Route::get('/consejos/bebeAgua', [ConsejosController::class, 'bebeAgua'])->name('consejos.bebeAgua');
Route::get('/consejos/comeVerduras', [ConsejosController::class, 'comeVerduras'])->name('consejos.comeVerduras');
Route::get('/consejos/comidaCasera', [ConsejosController::class, 'comidaCasera'])->name('consejos.comidaCasera');
Route::get('/consejos/dietaVariada', [ConsejosController::class, 'dietaVariada'])->name('consejos.dietaVariada');
Route::get('/consejos/ejercicio', [ConsejosController::class, 'ejercicio'])->name('consejos.ejercicio');
Route::get('/consejos/productNatural', [ConsejosController::class, 'productosNaturales'])->name('consejos.productosNaturales');



// Subpáginas planes
Route::get('/planificacion/ganarMusculo', [PlanificacionController::class, 'ganarMusculo'])->name('plan.ganarMusculo');
Route::get('/planificacion/perdidaPeso', [PlanificacionController::class, 'perdidaPeso'])->name('plan.perdidaPeso');
Route::get('/planificacion/deportista', [PlanificacionController::class, 'planDeportista'])->name('plan.planDeportista');
Route::get('/planificacion/familiar', [PlanificacionController::class, 'planFamily'])->name('plan.planFamily');
Route::get('/planificacion/principiante', [PlanificacionController::class, 'planPrincipiante'])->name('plan.planPrincipiante');
Route::get('/planificacion/vegano', [PlanificacionController::class, 'planVegano'])->name('plan.planVegano');


// Subpáginas del blog
Route::get('/blog/beCoVe', [BlogController::class, 'beCoVe'])->name('blog.beCoVe');
Route::get('/blog/diSu', [BlogController::class, 'diSu'])->name('blog.diSu');
Route::get('/blog/planSemanal', [BlogController::class, 'planSem'])->name('blog.planSem');
Route::get('/blog/recuperarEnergia', [BlogController::class, 'recuEner'])->name('blog.recuEner');
Route::get('/blog/smothies', [BlogController::class, 'smothies'])->name('blog.smothies');
Route::get('/blog/superalimentos', [BlogController::class, 'superAlimen'])->name('blog.superAlimen');

