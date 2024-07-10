const buttonLogin =  document.getElementById('login')
const form = document.getElementById("login-form");

form.addEventListener('submit', login)

async function login(event) {
    event.preventDefault()

    let formData = new FormData(form)
    let response = await axios.post(window.location.origin + '/api/login', formData)
    localStorage.setItem('jwtToken', response.data.access_token);
    window.location.href = '/';
}
