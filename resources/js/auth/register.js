import axios from 'axios'
import register from '../../../public/img/register.jpg'

export default {
    name : "RegisterView",
    data () {
        return {
            registerImg: register,
            errorStatus: false,
            userData   : {
                name    : '',
                email   : '',
                password: ''
            }
        }
    },
    methods: {
        userRegister () {
            axios.post('http://127.0.0.1:8000/api/user-register', this.userData)
            .then(response => {
               console.log(response.data)
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}

