const form = document.getElementById("registration-form-user");

form.addEventListener('submit',registration)

async function registration(event) {
    event.preventDefault()
    let formData = new FormData(form)
    let response = await axios.post(window.location.origin + "/api/register",formData)
    if (response.data.status === 200) {
        window.location.origin + "/login";
    }
}
