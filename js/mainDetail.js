const initPage = (id, type) => {
  switch (type) {
    case "quadro":
      setQuadriContent(id);
      break;

    case "artista":
      setAutoriContent(id);
      break;

    case "tecnica":
      setTecnicheContent(id);
      break;

    default:
      break;
  }
};

const setQuadriContent = id => {
  console.log(id);
  const data = {
    id: 1,
    Titolo: "Guernica",
    DataP: "12/10/2001",
    Immagine: "../media/img1.jpg",
    Autore: "Pablo Picasso",
    Tecnica: "Olio su tela"
  };

  $.ajax({
    type: "post",
    url: "/galleria/php/views.php",
    dataType: "json",
    contentType: "application/json",
    data: JSON.stringify({ pk: 1, target: "quadri" }),
    success: function(response) {
      console.log(response);
    }
  });

  document.getElementById("main-img").src = data.Immagine;
  document.getElementById("titolo").innerText = data.Titolo;
  document.getElementById("autore").innerText = "Autore: " + data.Autore;
  document.getElementById("data").innerText = "Data produzione: " + data.DataP;
  document.getElementById("tecnica").innerText = "Tecnica: " + data.Tecnica;
};

const setAutoriContent = id => {
  //console.log(id);

  $.ajax({
    type: "post",
    url: "/galleria/php/views.php",
    dataType: "json",
    contentType: "application/json",
    data: JSON.stringify({ pk: id, target: "autori" }),
    success: function(data) {
      console.log(data);
      document.getElementById("main-img").src = data.Ritratto;
      document.getElementById("titolo").innerText =
        data.Nome + " " + data.Cognome;
      document.getElementById("dataDiNascita").innerText = data.DataN;
      fillList(data.related);
    }
  });
  /*
  document.getElementById("main-img").src = data.Ritratto;
  document.getElementById("titolo").innerText = data.Nome + " " + data.Cognome;
  document.getElementById("dataDiNascita").innerText = data.DataN;
  */
};

const setTecnicheContent = id => {
  /*const data = {
    id: 1,
    NomeT: "Olio su tela"
  };
  */
  $.ajax({
    type: "post",
    url: "/galleria/php/views.php",
    dataType: "json",
    contentType: "application/json",
    data: JSON.stringify({ pk: id, target: "tecniche" }),
    success: function(data) {
      console.log(data);
      document.getElementById("title").innerText = data.NomeT;
      fillList(data.related);
    }
  });
  /*
  document.getElementById("title").innerText = data.NomeT;
  */
};

const fillList = data => {
  const container = document.getElementById("list-container");
  if (data.length > 0) {
    document.getElementById("related-info").innerText = "Quadri correlati";
  }
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
