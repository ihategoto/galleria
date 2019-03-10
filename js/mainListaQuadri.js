window.onload = function(e) {
  $.get("/galleria/php/lists.php", { o: "quadri" }, function(result) {
    fillList(result.results);
  });
  /*
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
  fillList(data);
  */
};

const fillList = data => {
  const container = document.getElementById("list-container");
  data.map(item => {
    container.appendChild(createCard(item.Immagine, item.Titolo, item.id));
  });
};

const createCard = (Immagine, Titolo, id) => {
  var div = document.createElement("div");
  div.innerHTML =
    '<button class="card" value="' +
    id +
    '" name="id" style="width: 18em"><div class="img-card-container"><img src="' +
    Immagine +
    '" class="card-img-top" alt="img"></div><div class="card-body"><h5 class="card-title">' +
    Titolo;
  ('</h5><div class="vedi-container"><a href="#" class="btn btn-primary">Vedi</a></div></div></div>');

  return div.firstChild;
};
