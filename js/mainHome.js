// register for oninput

let isActive = false;

focusSearch = e => {
  isActive = true;
  if (e.target.value)
    document.getElementById("options").style.visibility = "visible";
};

onChangeSearch = e => {
  const value = e.target.value;

  const data = [
    {
      Immagine: "../media/img1.jpg",
      Titolo: "Quadro AAA",
      id: 1
    },
    {
      Immagine: "../media/img2.jpg",
      Titolo: "Quadro BBB",
      id: 2
    },
    {
      Immagine: "../media/img3.jpg",
      Titolo: "Quadro CCC",
      id: 3
    }
  ];

  const container = document.getElementById("options-container");
  while (container.firstChild) {
    container.removeChild(container.firstChild);
  }
  data.map(item => {
    container.appendChild(createHint(item.Titolo, item.id, "quadro"));
  });

  if (value && isActive)
    document.getElementById("options").style.visibility = "visible";
  else document.getElementById("options").style.visibility = "hidden";
};

const createHint = (Titolo, id, type) => {
  var div = document.createElement("div");
  div.innerHTML =
    '<li><button class="btn-src" onclick="handleHint(event)" id="' +
    type +
    ":" +
    id +
    '">' +
    Titolo +
    "</button></li>";
  return div.firstChild;
};

const handleHint = e => {
  e.preventDefault();
  const id = e.target.id;

  const form = document.getElementById("submit-search");
  const input = document.getElementById("hidden-input");

  const type = id.substring(0, id.indexOf(":"));
  const targetID = id.substring(id.indexOf(":") + 1);

  console.log(type);

  input.value = targetID;

  form.action = "./ispeziona/artista.php";
  form.submit();
};

unfocusedSearch = e => {
  const target = e.target;

  if (target.id !== "search-input" && target.class !== "btn-src") {
    isActive = false;
    document.getElementById("options").style.visibility = "hidden";
  }
};

window.onload = e => {
  const searchInput = document.querySelector("#search-input");
  searchInput.addEventListener("input", onChangeSearch);
};
