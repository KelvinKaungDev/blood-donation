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
                if(response.data.result == false)
                {
                    this.errorStatus = true
                } else {
                    this.$router.push('donation');
                }
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}

