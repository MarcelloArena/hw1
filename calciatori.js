const italia = '135';
const inghilterra = '39';
const francia = '61';
const spagna = '140';
const key1='a7a2dedebbmsha5990aa1e6a40b9p118055jsn2d59e092555b';
const key2='fa9f74592amsh336fd1c864bcc9ap191a93jsn6cbff3e866cf';
const key3 = 'e6ab57bb0dmsh4ff0e91de4fd6bfp17834ejsna0150980c8e8';
const key4 = '4a112e9622msh9a0c9a55b101a4bp1fe593jsn62ffb571ca22';
const key5 = '28c9127b42msh455f9c85817f018p136d83jsn35d56ffb5ebb';
const keyFotballAPI='487e75cbb53ff148415bd0d966b49506';


let array = [inghilterra, francia, spagna, italia];
let elem = [];

function cerca(event)
{

console.log('cliccato');

console.log(event.target.textContent);

for(let i = 0; i<4; i++)
{
    const url = 'https://api-football-beta.p.rapidapi.com/players/topscorers?season='+event.target.textContent+'&league='+array[i];
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': key1,
            'X-RapidAPI-Host': 'api-football-beta.p.rapidapi.com'
        }
    };

    fetch(url,options).then(onResponse).then(onJson);



}







}

function onResponse(response)
{
    return response.json();
}

function onJson(json)
{
    if(elem.length===4)
    {
        elimina();
        elem=[];
        console.log('ciao');
    }
    console.log(json);
    const div = document.querySelector('#risultato');
    const logoSquadra = json.response[0].statistics[0].team.logo;
    const logoLega = json.response[0].statistics[0].league.logo;
    const calciatore = json.response[0].player.name;
    const imgCalciatore = json.response[0].player.photo;
    const divPlayer = document.createElement('div');
    divPlayer.classList.add('player-image');
    const img3 = document.createElement('img');
    img3.src = imgCalciatore;
    divPlayer.appendChild(img3);
    div.appendChild(divPlayer);

    const h2 = document.createElement('h2');
    h2.textContent=calciatore;

    const divDetails = document.createElement('div');
    divDetails.classList.add('player-details');
    divDetails.appendChild(h2);
    const p1 = document.createElement('p');
    p1.textContent='Campionato: ';
    const img2 = document.createElement('img');
    img2.src = logoLega;
    p1.appendChild(img2);

    const p2 = document.createElement('p');
    p2.textContent='Squadra: ';

    const img1 = document.createElement('img');
    img1.src = logoSquadra;

    p2.appendChild(img1);
    const p3 = document.createElement('p');
    p3.textContent='Presenze: '+json.response[0].statistics[0].games.appearences;
    const p4 = document.createElement('p');
    p4.textContent= 'Gol: '+json.response[0].statistics[0].goals.total;
    divDetails.appendChild(p1);
    divDetails.appendChild(p2);
    divDetails.appendChild(p3);
    divDetails.appendChild(p4);

    div.appendChild(divDetails);
    
    elem.unshift(1);
   
}

function elimina()
{
    const playerImage = document.querySelectorAll('.player-image');

    const playerDetails = document.querySelectorAll('.player-details');

    for(var i = 0; i<playerImage.length; i++)
    {
        playerImage[i].remove();
        playerDetails[i].remove();
    }


}





const dropdownBtn = document.querySelector(".dropdown-btn");
const dropdownContent = document.querySelector(".dropdown-content");

dropdownContent.addEventListener("click", cerca);