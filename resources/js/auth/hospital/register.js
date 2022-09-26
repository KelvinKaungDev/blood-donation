import axios from 'axios'
import register from '../../../../public/img/hospital.jpg'

export default {
    name : "HospitalRegister",
    data () {
        return {
            registerImg: register,
            errorStatus: false,
            userData   : {
                name       : '',
                email      : '',
                password   : '',
                hospital_id: '',
            }
        }
    },
    methods: {
        registerHospital () {
            axios.post('http://127.0.0.1:8000/api/hospital-register', this.userData)
            .then(response => {
                this.$router.push('request-blood');
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}

