import axios from 'axios'
import loginImg from '../../../../public/img/hospital.jpg'

export default {
    name : 'LoginHospital',
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
            axios.post('http://127.0.0.1:8000/api/login', this.userData)
            .then(response => {
                history.back();
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}
