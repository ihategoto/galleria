window.onload = function(e) {
  $.get("/galleria/php/lists.php", { o: "tecniche" }, function(result) {
    fillList(result.results);
  });
  /*
  const data = [
    {
      id: 1,
      NomeT: "Olio su tela"
    },
    {
      id: 2,
      NomeT: "Acquarello"
    },
    {
      id: 3,
      NomeT: "Normale niente di che"
    }
  ];
  fillList(data);
  */
};

const fillList = data => {
  const container = document.getElementById("list-container");
  data.map(item => {
    container.appendChild(createCard(item.NomeT, item.id));
  });
};

const createCard = (NomeT, id) => {
  var div = document.createElement("div");
  div.innerHTML =
    '<button class="card" value="' +
    id +
    '" name="id" style="width: 18rem;"><div class="card-body"><h5 class="card-title"> ' +
    NomeT +
    "</h5></div></button>";

  return div.firstChild;
};
