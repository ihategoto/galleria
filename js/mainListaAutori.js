window.onload = function(e) {
  $.get("/galleria/php/lists.php", { o: "autori" }, function(result) {
    fillList(result.results);
  });

  /*
  const data = [
    {
      Nome: "Caravaggio",
      Cognome: "Car",
      Ritratto: "../media/img3.jpg",
      id: 1
    },
    {
      Nome: "Can Gogh",
      Cognome: "Car",
      Ritratto: "../media/img3.jpg",
      id: 2
    },
    {
      Nome: "Michelangelo",
      Cognome: "Car",
      Ritratto: "../media/img3.jpg",
      id: 3
    }
  ];

  fillList(data);
  */
};

const fillList = data => {
  const container = document.getElementById("list-container");
  data.map(item => {
    container.appendChild(
      createCard(item.Nome, item.Cognome, item.Ritratto, item.id)
    );
  });
};

const createCard = (Nome, Cognome, Ritratto, id) => {
  var div = document.createElement("button");
  div.innerHTML =
    '<button class="card" value="' +
    id +
    '" name="id" style="width: 18em"><div class="img-card-container"><img src="' +
    Ritratto +
    '" class="card-img-top" alt="img"></div><div class="card-body"><h5 class="card-title">' +
    Cognome +
    " " +
    Nome +
    "</h5></div></button>";

  return div.firstChild;
};
