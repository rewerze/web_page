function copyToClipboard(text) {
  const name = document.createElement("textarea");
  name.value = text;
  document.body.appendChild(name);
  name.select();
  document.execCommand("copy");
  document.body.removeChild(name);

  const button = document.querySelector("button");
  button.classList.remove("dc");
  button.classList.add("btn-outline-success");
  button.innerHTML = "Név kimásolva";

  setTimeout(() => {
    button.classList.remove("btn-outline-success");
    button.classList.add("dc");
    button.innerHTML = "Discord";
  }, 2000);
}
