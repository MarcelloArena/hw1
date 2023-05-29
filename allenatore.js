const endpoint = 'https://api-football-beta.p.rapidapi.com/coachs?';
let image;

const key1='a7a2dedebbmsha5990aa1e6a40b9p118055jsn2d59e092555b';
const key2='fa9f74592amsh336fd1c864bcc9ap191a93jsn6cbff3e866cf';
const key3 = 'e6ab57bb0dmsh4ff0e91de4fd6bfp17834ejsna0150980c8e8';
const key4 = '4a112e9622msh9a0c9a55b101a4bp1fe593jsn62ffb571ca22';

function cerca(event)
{
    
    event.preventDefault();
    const val = document.querySelector('#allenatore');
        const options = {
            method: 'GET',
            headers: {
                'X-RapidAPI-Key': key2,
                'X-RapidAPI-Host': 'api-football-beta.p.rapidapi.com'
            }
        };
    
        const url = endpoint+'search='+encodeURIComponent(val.value);
        
        fetch(url, options)
            .then(onResponse)
            .then(onJson);


}



function onResponse(response)
{
    return response.json();
}

function onJson(json)
{
    if(array.length!=0)
    {
        elimina();
        array=[];
    }
    
    console.log(json);
    const img = document.createElement('img');
    img.classList.add('foto');
    img.src=json.response[0].photo;
    image=json.response[0].photo;
    const sec = document.querySelector('#risultato'); 
    const art = document.createElement('article'); 
    art.appendChild(img);                          
    const carriera = json.response[0].career;
    const div = document.createElement('div');  
    div.classList.add('flex');

    for(let i = 0; i<carriera.length; i++)
    {
        
        
        const logo = document.createElement('img');
        logo.src = carriera[i].team.logo;
        logo.classList.add('stemma');
        div.appendChild(logo);
          
    }

    
    const form2 = document.createElement('form');
    form2.classList.add('bottone');
    const butt = document.createElement('button');
    butt.classList.add('butt');
    const el = document.createElement('i');
    el.textContent="Preferiti";
    butt.appendChild(el);
    butt.addEventListener('click',inserimentoPreferiti);
    form2.appendChild(butt);
    array.unshift(img);
    art.appendChild(div);  
    art.appendChild(form2);
    sec.appendChild(art); 



}

function elimina()
{
    const art = document.querySelector('article');
    art.remove();
}




function onResponseP(response) {

    if (response.status===200) 
    {
        const form = document.querySelector('#risultato form');
        form.remove();
        const img = document.createElement('img');
        img.classList.add('stemma');
        img.src = "spunta.png";
        document.querySelector('#risultato article').appendChild(img);
        return response.json();
    }

    const div = document.querySelector('article');
    const p = document.createElement('p');
    p.textContent="Elemento già presente tra i tuoi preferiti!";
    document.querySelector('.butt').remove();
    div.appendChild(p);

}

function onJsonP(json)
{
    console.log(json);
}


function inserimentoPreferiti(event)
{
   
        event.preventDefault();
        var dati = new URLSearchParams();
        dati.append('nome', document.querySelector('#allenatore').value);
        dati.append('src', document.querySelector('.foto').src);

        fetch('aggiungi_preferiti.php', {
        method: 'POST',
        body: dati
        })
        .then(onResponseP)
        .then(onJsonP);
        
}


let array = [];
const form = document.querySelector('#ricerca');
form.addEventListener('submit',cerca);



     
