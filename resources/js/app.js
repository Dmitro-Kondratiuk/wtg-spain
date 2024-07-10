import './bootstrap';
import axios from "axios";

console.log('fdjksnfjdksnfjkdsnfkjdsfkjdsnf')


let response = await axios.post('http://localhost/api/auth/login',
    {
        "email": "email@gmail.com",
        "password": "Lada2110"
    }
)
console.log(response)
