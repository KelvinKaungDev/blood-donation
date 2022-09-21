import axios from 'axios'
import loginImg from '../../../../public/img/hospital.jpg'

export default {
    name : 'LoginHospital',
    data () {
        return {
            loginImg   : loginImg,
            errorStatus: false,
            userData   : {
                password   : '',
                hospital_id: '',
            },
        }
    },
    methods: {
        hospitalLogin () {
            axios.post('http://127.0.0.1:8000/api/hospital-login', this.userData)
            .then(response => {
                console.log(response.data)
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}
