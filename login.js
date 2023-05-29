
function verifica(event)
{
    
    const user = form.username.value;
    const pass = form.password.value;

    if(user.length===0 || pass.length<8 || !contieneNumero(pass) || !containsUppercase(pass) || isStringOnlySpaces(user) || !containsLowercase(pass))
    {
        event.preventDefault();
        const p = document.createElement('p');
        p.classList.add('errore');
        p.textContent='Credenziali non valide. \n I campi non possono essere vuoti, e il campo password deve essere composto da almeno 8 caratteri tra cui almeno una lettera maiuscola, almeno una minuscola, ed almeno un numero';
        document.querySelector('form div').appendChild(p);
        setTimeout(rimuoviParagrafo,4000);
    }
}


function rimuoviParagrafo()
{
    document.querySelector('.errore').remove();
}

function isStringOnlySpaces(str) {
    return str.trim().length === 0;
  }

function contieneNumero(stringa) {
    return /\d/.test(stringa);
  }

  function containsUppercase(str) {
    return /[A-Z]/.test(str);
  }

  function containsLowercase(str)
  {
      return /[a-z]/.test(stringa);
  }




const form = document.forms['login'];
form.addEventListener('submit',verifica);
