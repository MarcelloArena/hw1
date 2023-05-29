

function verifica(event)
{
    const user = form.username.value;
    const pass = form.password.value;
    const tel = form.telefono.value;
    const email = form.email.value;


    if(user.length===0 || pass.length<8 || !contieneNumero(pass) || !containsUppercase(pass) || pass!== form.confirmPassword.value || email.length===0 || !soloNumeri(tel) || !email.includes("@"))
    {
        event.preventDefault();
        const p = document.createElement('p');
        p.classList.add('errore');
        p.textContent='I campi non possono essere vuoti, il campo password deve essere composto da almeno 8 caratteri tra cui almeno una lettera maiuscola ed almeno un numero, il campo email deve avere un formato del tipo (nome@dominio.com), verificare inoltre che le password siano uguali';
        document.querySelector('form div').appendChild(p);
        setTimeout(rimuoviParagrafo,7000);
    }

}

function rimuoviParagrafo()
{
  document.querySelector('.errore').remove();
}


function containsLowercase(str)
{
    return /[a-z]/.test(stringa);
}


function contieneNumero(stringa) {
    return /\d/.test(stringa);
  }

  function containsUppercase(stringa) {
    return /[A-Z]/.test(stringa);
  }

  function soloNumeri(stringa)
  {
    return /^\d+$/.test(stringa);
  }


const form = document.forms['login'];
form.addEventListener('submit',verifica);

