import axios from 'axios'
import register from '../../../../public/img/hospital.jpg'

export default {
    name : "HospitalRegister",
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
        register () {
            axios.post('http://127.0.0.1:8000/api/register', this.userData)
            .then(response => {
                history.back();
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}

