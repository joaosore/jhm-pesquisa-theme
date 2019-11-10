import validate from "jquery-validation";
import { getFormulario } from "./submit.js";

export function init_validade_formulario() {
  $("#contato-form").validate({
    rules: {
      nome: {
        required: true
      },
      email: {
        required: true
      },
      mensagem: {
        required: true
      }
    },
    messages: {
      nome: "O nome e obrigatório.",
      email: "Digite um email válido.",
      mensagem: "Digite uma mensagem."
    },
    submitHandler: function() {
      getFormulario();
    }
  });
}
