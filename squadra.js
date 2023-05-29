let ev;



function ricerca(event)
{
    event.preventDefault();
    fetch("ricercaSquadra.php?lega="+encodeURIComponent(document.querySelector('#campionato').value)).then(onResponse).then(onJson);

}

function onResponse(response)
{
   return response.json();
}

function onJson(json)
{
    console.log(json);

    if(array.length!=0)
    {
      elimina();
      array=[];
    }

    const teamContainer = document.createElement('div'); // l'elemento che contiene tutte le squadre
    teamContainer.classList.add('team-container');

    for(let elemento of json)
    {
      const teamCard = document.createElement('div');
      teamCard.classList.add('team-card');
      const logo = document.createElement('img');
      logo.classList.add('team-logo');
      logo.src=elemento.Logo;

      const h3 = document.createElement('h3');
      h3.classList.add('team-name');
      h3.textContent=elemento.Nome;

      const p = document.createElement('p');
      p.classList.add('stadium-name');
      p.textContent=elemento.Stadio;

      const stadio = document.createElement('img');
      stadio.classList.add('stadium-photo');
      stadio.src=elemento.FotoStadio;
      teamCard.appendChild(logo);
      teamCard.appendChild(h3);
      teamCard.appendChild(p);
      teamCard.appendChild(stadio);
      const button = document.createElement('button');
      button.textContent='Preferiti';
      button.classList.add('butt');

      button.addEventListener('click',inserimentoPreferiti);


      teamCard.appendChild(button);

      teamContainer.appendChild(teamCard);

    }

    document.querySelector('#risultato').appendChild(teamContainer);

    array.unshift(2);
    
    
  
}

function elimina()
{
  document.querySelector('.team-container').remove();
}


function inserimentoPreferiti(event)
{
        ev = event.currentTarget.parentNode;
        console.log(ev);
        event.preventDefault();
        var dati = new URLSearchParams();
        const div = event.currentTarget.parentNode;

        console.log(div.querySelector('.team-name').textContent);
        dati.append('nome', div.querySelector('.team-name').textContent);
        dati.append('logo', div.querySelector('.team-logo').src);
        dati.append('stadio', div.querySelector('.stadium-name').textContent);
        dati.append('fotoStadio', div.querySelector('.stadium-photo').src);
        event.currentTarget.remove();  //rimuovo a priori il pulsante

          fetch('aggiungi_preferiti.php', {
          method: 'POST',
          body: dati
          })
          .then(onResponseP)
          .then(onJsonP);
          
}


function onResponseP(response) {

    console.log(ev);  
    console.log(response.status);

  if (response.status===200) 
  {
      /*ev.currentTarget.remove();*/

      const spunta = document.createElement('img');
      spunta.src = "spunta.png";
      spunta.classList.add('stemma');
      ev.appendChild(spunta);
      //return response.text();

      /*const form = document.querySelector('#risultato form');
      form.remove();
      const img = document.createElement('img');
      img.classList.add('stemma');
      img.src = "spunta.png";
      document.querySelector('#risultato article').appendChild(img);
      return response.json();*/
  }
  else
  {
    const p = document.createElement('p');
    p.textContent="Elemento già presente tra i tuoi preferiti!";
    ev.appendChild(p);
    //alert("Errore, elemento già presente tra i tuoi preferiti");

  }


}

function onJsonP(json)
{
  //console.log(data);
}













const form = document.forms['cerca'];
form.addEventListener('submit',ricerca);
let array=[];
