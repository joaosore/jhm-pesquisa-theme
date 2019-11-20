import "bootstrap";

import { init_ancora } from "./js/ancora";
import { init_menu } from "./js/menu";
import { init_carousel } from "./js/carousel";
import { init_video } from "./js/video";
import { init_accordion } from "./js/accordion";

import { init_animation } from "./js/animation";

import { init_submit_formulario } from "./js/formulario/submit";
import { init_validade_formulario } from "./js/formulario/validate";

import { init_loader } from "./js/loader";

init_loader();
init_menu();
init_ancora();
init_carousel();
init_video();
init_animation();
init_accordion();
init_submit_formulario();
init_validade_formulario();
