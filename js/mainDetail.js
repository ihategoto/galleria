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

  document.getElementById("main-img").src = data.Immagine;
  document.getElementById("titolo").innerText = data.Titolo;
  document.getElementById("autore").innerText = "Autore: " + data.Autore;
  document.getElementById("data").innerText = "Data produzione: " + data.DataP;
  document.getElementById("tecnica").innerText = "Tecnica: " + data.Tecnica;
};

const setAutoriContent = id => {
  const data = {
    id: id,
    Nome: "Pablo",
    Cognome: "Picasso",
    Ritratto: "../media/img4.jpg",
    DataN: "16/2/1970"
  };

  document.getElementById("main-img").src = data.Ritratto;
  document.getElementById("titolo").innerText = data.Nome + " " + data.Cognome;
  document.getElementById("dataDiNascita").innerText = data.DataN;
};

const setTecnicheContent = id => {
  const data = {
    id: 1,
    NomeT: "Olio su tela"
  };

  document.getElementById("title").innerText = data.NomeT;
};
