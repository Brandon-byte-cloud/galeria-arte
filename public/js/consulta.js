
const btnConsultar = document.querySelector(".btn-dark");
const tablaBody = document.querySelector("tbody");
const selectArtista = document.getElementById("Artistas");
const selectObra = document.getElementById("Obras");
const selepoca= document.getElementById("Epoca");
let loginModal;
let personaModal;

const API_URL = "http://127.0.0.1:8000/api";
const QR_URL = "https://api.qrserver.com/v1/create-qr-code/?size=70x70&data=";


async function cargarArtistas() {
    const res = await fetch(`${API_URL}/personas`);
    const datos = await res.json();

  
    const artistas = [...new Set(datos.map(item => item.Artista))];

    artistas.forEach(a => {
        const option = document.createElement("option");
        option.textContent = a;
        option.value = a;
        selectArtista.appendChild(option);
    });
}
cargarArtistas();

async function cargarEpocas() {
    const res = await fetch(`${API_URL}/personas`);
    const datos = await res.json();

    const epocas = [...new Set(datos.map(item => item.Epoca))];

    epocas.forEach(e => {
        const option = document.createElement("option");
        option.textContent = e;
        option.value = e;
        selepoca.appendChild(option);
    });
}

cargarEpocas();
selectArtista.addEventListener("change", async () => {
    selectObra.innerHTML = `<option selected>Selecciona una obra</option>`;

    const res = await fetch(`${API_URL}/personas`);
    const datos = await res.json();

    const artista = selectArtista.value;

    const obras = datos
        .filter(item => item.Artista === artista)
        .map(item => item.Obra);

    obras.forEach(o => {
        const option = document.createElement("option");
        option.textContent = o;
        option.value = o;
        selectObra.appendChild(option);
    });
});



btnConsultar.addEventListener("click", async () => {
    const res = await fetch(`${API_URL}/personas`);
    const datos = await res.json();

    const artistaSel = selectArtista.value;
    const obraSel = selectObra.value;
    const epocaSel= selepoca.value

    
    let filtrados = datos;

    if (artistaSel !== "Selecciona un artista") {
        filtrados = filtrados.filter(item => item.Artista === artistaSel);
    }
    if (obraSel !== "Selecciona una obra") {
        filtrados = filtrados.filter(item => item.Obra === obraSel);
    }
    if (epocaSel !== "Selecciona el movimiento") {
        filtrados = filtrados.filter(item => item.Epoca === epocaSel);
    }

    tablaBody.innerHTML = "";

    filtrados.forEach((item, index) => {
        const tr = document.createElement("tr");

        tr.innerHTML = `
            <td>${index + 1}</td>
            <td>${item.Artista}</td>
            <td>${item.Epoca}</td>
            <td>${item.Obra}</td>
            <td><img src="${QR_URL + encodeURIComponent(item.QR)}"></td>
        `;

        tablaBody.appendChild(tr);
    });
});

// LO NUEVO

document.addEventListener("DOMContentLoaded", () => {
    loginModal = new bootstrap.Modal(document.getElementById("loginModal"));
    personaModal = new bootstrap.Modal(document.getElementById("personaModal"));
    verificarToken();

    document.getElementById("loginForm").addEventListener("submit", handleLogin);
    document.getElementById("personaForm").addEventListener("submit", guardarPersona);
    document.getElementById("btnAuth").addEventListener("click", handleBtnAuthClick);
});

//las Cabeceras con JWT
function getHeaders() {
    const headers = {"Content-Type": "application/json"};
    const token = localStorage.getItem("token");
    if (token) {
        headers["Authorization"] = `Bearer ${token}`;
    }
    return headers;
}

//verificacion del estado de la sesion
function verificarToken() {
    const token = localStorage.getItem("token");
    const adminSection=document.getElementById('admin-section');
    const btnAuthText = document.getElementById("btnAuthText");
    const lockIcon = document.getElementById("lockIcon");

    if (token) {
        document.getElementById("admin-section").classList.remove("d-none");
        btnAuthText.textContent="salir"
        lockIcon.classList.remove("fa-user");
        lockIcon.classList.add("fa-right-from-bracket");
    } else {
        document.getElementById("admin-section").classList.add("d-none");

        btnAuthText.textContent = "ADMIN";

        lockIcon.classList.remove("fa-right-from-bracket");
        lockIcon.classList.add("fa-user");
    }
}


function handleBtnAuthClick() {

    if (localStorage.getItem("token")) {
        localStorage.removeItem("token");
        verificarToken();
    } else {
        loginModal.show();
    }
}


async function handleLogin(e) {
    e.preventDefault();
    const email =document.getElementById("loginEmail").value;
    const password =document.getElementById("loginPassword").value;
    try{
        const res = await fetch(`${API_URL}/login`,{
                method: "POST",
                headers: {"Content-Type": "application/json"},
                body: JSON.stringify({email,password})
        });
        const data = await res.json();

        if (res.ok) {            
            localStorage.setItem("token", data.token);
            loginModal.hide();
            document.getElementById("loginForm").reset();
            verificarToken();
            cargarTablaAdmin();
            
        } else {
            alert(data.error||"Credenciales incorrectas");
        }
    }catch(error){console.error(error);}
}
async function cargarTablaAdmin() {
    const res = await fetch(`${API_URL}/personas`);
    const datos = await res.json();
    const tbody =document.getElementById("admin-body");
    tbody.innerHTML = "";
    datos.forEach(item => {
        tbody.innerHTML += `
            <tr>
                <td>${item.id}</td>
                <td>${item.Artista}</td>
                <td>${item.Obra}</td>
                <td>${item.Epoca}</td>
                <td>
                    <button class="btn btn-warning" onclick='editarPersona(${JSON.stringify(item)})'> Editar </button>
                </td>
                <td>
                    <button class="btn btn-danger" onclick='eliminarPersona(${item.id})'> Eliminar </button>
                </td>
            </tr>
        `;
    });
}
function editarPersona(item) {
    document.getElementById("personaId").value = item.id;
    document.getElementById("artistaInput").value = item.Artista;
    document.getElementById("obraInput").value =item.Obra;
    document.getElementById("epocaInput").value =item.Epoca;
    document.getElementById("qrInput").value =item.QR;
    personaModal.show();
}
function abrirModalPersona() {
    document.getElementById("personaForm").reset();
    document.getElementById("personaId").value = "";
    personaModal.show();
}
async function guardarPersona(e) {
    e.preventDefault();
    const id =document.getElementById("personaId").value;
    const payload = {
        Artista:document.getElementById("artistaInput").value,
        Obra:document.getElementById("obraInput").value,
        Epoca:document.getElementById("epocaInput").value,
        QR:document.getElementById("qrInput").value
    };
    const url = id ? `${API_URL}/personas/${id}`: `${API_URL}/personas`;
    const method = id ? "PUT" : "POST";
    const res = await fetch(url, {
        method,
        headers: getHeaders(),
        body: JSON.stringify(payload)
    });
    if (res.ok) {
        personaModal.hide();
        cargarTablaAdmin();
    } else {
        alert("Error al guardar");
    }
}
async function eliminarPersona(id) {
    if (!confirm("¿Eliminar registro?")) return;
    const res = await fetch(
        `${API_URL}/personas/${id}`,
        {
            method: "DELETE",
            headers: getHeaders()
        }
    );
    if (res.ok) {
        cargarTablaAdmin();
    } else {
        alert("Error al eliminar");
    }
}