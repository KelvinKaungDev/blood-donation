import axios from 'axios'
import loginImg from '../../../public/img/login1.jpg'

export default {
    name : 'DonationHistory',
    data () {
        return {
            loginImg   : loginImg,
            errorStatus: false,
            userData   : [

            ]
        }
    },
    methods: {
        showHistory () {
            console.log('hi')
            // axios.get('http://127.0.0.1:8000/api/get-request-history')
            // .then(response => {
            //     console.log('hi')
            // })
            // .catch(error => {
            //     this.errorStatus = true
            // })
        }
    },
    mounted () {
        showHistory();
    }
}
