const form = document.getElementById('form');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;

    let data = {
     nome,
     email   
    }

    let conveterDados = JSON.stringify(data);

    localStorage.setItem('dados', conveterDados);

    document.getElementById('nome').value = "";
    document.getElementById('email').value = "";
});

document.getElementById('form').onsubmit = function(){
    Swal.fire({
        icon: 'success',
        title: 'Inscrição feita com sucesso!',
        showConfirmButton: false,
        timer: 2000
    })
}; 

function menuMobile() {
    var x = document.getElementById("mobile");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
} 

function mostrarMenu(){
    let menu = document.querySelector('.content-header-mobile');
    if(menu.style.display === 'block'){
        menu.style.display = 'none';
    }
    else{
        menu.style.display = 'block';
    }
}


