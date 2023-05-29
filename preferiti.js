

function onRepsonse(response)
{
    console.log(response.status);
    return response.json();
}

function onJson(json)
{

    for(preferito of json)
    {
        const nome = preferito.Nome;
        const sorgente = preferito.Sorgente;
        const div = document.createElement('div');
        div.classList.add('contenuto');
        const img = document.createElement('img');
        img.src = sorgente;
        const p = document.createElement('p');
        p.textContent=nome;
        p.classList.add('nome-allenatore');
        const butt = document.createElement('button');
        butt.classList.add('remove-button'); 
        butt.textContent='Rimuovi';
        butt.addEventListener('click',rimuovi);
        const container = document.querySelector('.preferiti');
        div.appendChild(img);
        div.appendChild(p);
        div.appendChild(butt);
        container.appendChild(div);

    }
  
    

}



function rimuovi(event)
{
    const divInterno = event.currentTarget.parentNode;
    const allenatore = divInterno.querySelector('p').textContent;
    divInterno.remove();
    console.log(allenatore);
    fetch("rimuoviAllenatore.php?allenatore="+encodeURIComponent(allenatore)).then(onResponseR).then(onJsonR);
}

function onResponseR(response)
{
}

function onJsonR(json)
{

}




fetch("allenatoriPreferiti.php").then(onRepsonse).then(onJson);
fetch("squadrePreferite.php").then(onResponseS).then(onJsonS);


function onResponseS(response)
{
    return response.json();
}

function onJsonS(json)
{
    for(preferito of json)
    {
        const divContenuto = document.createElement('div');
        divContenuto.classList.add('contenuto');

        const logo = document.createElement('img');
        logo.classList.add('logo');
        logo.src = preferito.Logo;
        const divC = document.createElement('div');
        const team = document.createElement('p');
        team.textContent = preferito.Nome;
        team.classList.add('nome-squadra');

        const stadio = document.createElement('p');
        stadio.textContent = "Stadio: "+preferito.Stadio;
        stadio.classList.add('nome-stadio');

        const fotoStadio = document.createElement('img');
        fotoStadio.src = preferito.FotoStadio;
        fotoStadio.classList.add('foto-stadio');

        const button = document.createElement('button');
        button.classList.add('remove-button');
        button.textContent = 'Rimuovi';
        button.addEventListener('click',rimuoviSquadra);
        const container = document.querySelectorAll('.preferiti')[1];

        divContenuto.appendChild(logo);
        divC.appendChild(team);
        divC.appendChild(stadio);
        divContenuto.appendChild(divC);
        divContenuto.appendChild(fotoStadio);
        divContenuto.appendChild(button);
        container.appendChild(divContenuto);
    }

}


function rimuoviSquadra(event)
{
    const divInterno = event.currentTarget.parentNode;
    const squadra = divInterno.querySelector('div p').textContent;
    console.log(divInterno);
   divInterno.remove();
    console.log(squadra);
    fetch("rimuoviSquadra.php?squadra="+encodeURIComponent(squadra)).then(onResponseR).then(onJsonR);



}