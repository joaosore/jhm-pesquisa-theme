export function init_submit_formulario() {
  $(document).on("click", "#contato-form #btn-submit", function(e) {
    e.preventDefault();
    $("#contato-form").submit();
  });
}

function bindToAjax() {
  const dataLayer = [];
  $(document).bind("ajaxComplete", function(evt, jqXhr, opts) {
    // Create a fake a element for magically simple URL parsing
    var fullUrl = document.createElement("a");
    fullUrl.href = opts.url;

    // IE9+ strips the leading slash from a.pathname because who wants to get home on time Friday anyways
    var pathname =
      fullUrl.pathname[0] === "/" ? fullUrl.pathname : "/" + fullUrl.pathname;
    // Manually remove the leading question mark, if there is one
    var queryString =
      fullUrl.search[0] === "?" ? fullUrl.search.slice(1) : fullUrl.search;
    // Turn our params and headers into objects for easier reference
    var queryParameters = objMap(queryString, "&", "=", true);
    var headers = objMap(jqXhr.getAllResponseHeaders(), "\n", ":");

    // Blindly push to the dataLayer because this fires within GTM
    dataLayer.push({
      event: "ajaxComplete",
      attributes: {
        // Return empty strings to prevent accidental inheritance of old data
        type: opts.type || "",
        url: fullUrl.href || "",
        queryParameters: queryParameters,
        pathname: pathname || "",
        hostname: fullUrl.hostname || "",
        protocol: fullUrl.protocol || "",
        fragment: fullUrl.hash || "",
        statusCode: jqXhr.status || "",
        statusText: jqXhr.statusText || "",
        headers: headers,
        timestamp: evt.timeStamp || "",
        contentType: opts.contentType || "",
        // Defer to jQuery's handling of the response
        response:
          jqXhr.responseJSON || jqXhr.responseXML || jqXhr.responseText || ""
      }
    });
  });
}

function objMap(data, delim, spl, decode) {
  var obj = {};
  // If one of our parameters is missing, return an empty object
  if (!data || !delim || !spl) {
    return {};
  }
  var arr = data.split(delim);
  var i;
  if (arr) {
    for (i = 0; i < arr.length; i++) {
      // If the decode flag is present, URL decode the set
      var item = decode ? decodeURIComponent(arr[i]) : arr[i];
      var pair = item.split(spl);

      var key = trim_(pair[0]);
      var value = trim_(pair[1]);

      if (key && value) {
        obj[key] = value;
      }
    }
  }
  return obj;
}

function trim_(str) {
  if (str) {
    return str.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "");
  }
}

function getParameterByName(name) {
  var query = window.location.search.toString();
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regexS = "[\\?&]" + name + "=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(query);
  if (results == null) return "";
  else return decodeURIComponent(results[1].replace(/\+/g, " "));
}

function alert(type) {
  var mensagem = "";
  switch (type.status) {
    case "Sucesso":
      mensagem += '<div class="alert alert-success" role="alert">';
      mensagem += type.mensagem;
      mensagem += "</div>";
      break;
    case "Erro":
      mensagem += '<div class="alert alert-danger" role="alert">';
      mensagem += type.mensagem;
      mensagem += "</div>";
      break;
  }
  $("#contato-form").append(mensagem);
}

function btnEnviar(status) {
  switch (status) {
    case "ativo":
      setTimeout(function() {
        $("#btn-submit").fadeIn();
      }, 2250);
      break;
    case "inativo":
      $("#btn-submit").hide();
      break;
  }
}

function resetForm() {
  setTimeout(function() {
    $("input, select, textarea").removeClass("valid");
    $("#nome").val("");
    $("#email").val("");
    $("#telefone").val("");
    $("#loja").prop("selectedIndex", 0);
    $("#mensagem").val("");
    $(".alert").remove();
  }, 2000);
}

export function getFormulario() {
  var name = $("#contato-form #nome").val();
  var email = $("#contato-form #email").val();
  var mensagem = $("#contato-form #mensagem").val();

  $.ajax({
    type: "POST",
    url: "/wp-admin/admin-ajax.php",
    data: {
      action: "post_contato",
      fitlers: {
        nome: name,
        email: email,
        mensagem: mensagem
      }
    },
    dataType: "json",
    beforeSend: function() {
      btnEnviar("inativo");
      $("#contato-form .loading").fadeIn();
    },
    complete: function(response) {
      $("#contato-form .loading").hide();
      resetForm();
      btnEnviar("ativo");
      bindToAjax();
    },
    success: function(response) {
      alert(response);
    },
    error: function() {}
  });
}
