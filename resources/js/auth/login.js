import axios from 'axios'
import loginImg from '../../../public/img/login1.jpg'

export default {
    name : 'LoginView',
    data () {
        return {
            loginImg   : loginImg,
            errorStatus: false,
            userData   : {
                email   : '',
                password: ''
            },
        }
    },
    methods: {
        login () {
            axios.post('http://127.0.0.1:8000/api/user-login', this.userData)
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
