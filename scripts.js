document.getElementById("btn__register").addEventListener("click", register);
document.getElementById("btn__login").addEventListener("click", login);
window.addEventListener("resize", anchoPagina);

// Variables
var containerloginregister = document.querySelector(".container-loginregister");
var form_login = document.querySelector(".form_login");
var form_register = document.querySelector(".form_register");
var backboxlogin = document.querySelector(".back-box-login");
var backboxregister = document.querySelector(".back-box-register");


function anchoPagina() {
    if (window.innerWidth > 850) {
        backboxlogin.style.display = "block";
        backboxregister.style.display = "block";
    } else {
        backboxregister.style.display = "block";
        backboxregister.style.opacity = "1";
        backboxlogin.style.display = "none";
        form_login.style.display = "block";
        form_register.style.display = "none";
        containerloginregister.style.left = "0px"; 
    }
}


function login() {
    if (window.innerWidth > 850) {
        form_register.style.display = "none";
        containerloginregister.style.left = "10px";
        form_login.style.display = "block";
        backboxregister.style.opacity = "1";
        backboxlogin.style.opacity = "0";
    } else {
        form_register.style.display = "none";
        containerloginregister.style.left = "0px";
        form_login.style.display = "block";
        backboxregister.style.display = "block";
        backboxlogin.style.display = "none";
    }
}


function register() {
    if (window.innerWidth > 850) {
        form_register.style.display = "block";
        containerloginregister.style.left = "410px";
        form_login.style.display = "none";
        backboxregister.style.opacity = "0";
        backboxlogin.style.opacity = "1";
    } else {
        form_register.style.display = "block";
        containerloginregister.style.left = "0px";
        form_login.style.display = "none";
        backboxregister.style.display = "none";
        backboxlogin.style.display = "block";
        backboxlogin.style.opacity = "1";
    }
}

window.onload = anchoPagina;

document.addEventListener("DOMContentLoaded", () => {
    const apiKey = "77fdeb1adffcf670c79abab4102f3c61"; 
    const city = "Tijuana"; 
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.cod === 200) {
                const temp = data.main.temp;
                const weatherDesc = data.weather[0].description;
                document.getElementById("weather").innerHTML = `Clima en ${city}: ${temp}°C, ${weatherDesc}`;
            } else {
                document.getElementById("weather").innerHTML = "No se pudo obtener el clima.";
            }
        })
        .catch(error => {
            console.error("Error obteniendo el clima:", error);
            document.getElementById("weather").innerHTML = "Error al obtener el clima.";
        });
});
