import axios from 'axios'
import loginImg from '../../../public/img/login1.jpg'

export default {
    name : 'DonationHistory',
    data () {
        return {
            loginImg   : loginImg,
            errorStatus: false,
            details   : [

            ]
        }
    },
    methods: {
        showHistory () {
            axios.get('http://127.0.0.1:8000/api/user')
            .then(response => {
                this.details = response.data.result
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    },
    mounted () {
        this.showHistory();
    }
}
