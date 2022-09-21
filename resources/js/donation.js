import axios from 'axios'
import donationImg from '../../public/img/donation.jpg'

export default {
    name : 'DonationView',
    data () {
        return {
            donationImg : donationImg,
            errorStatus: false,
            userData   : {
                name      : '',
                age       : '',
                gender    : '',
                blood_type: '',
            },
        }
    },
    methods: {
        registerToDonate () {
            axios.post('http://127.0.0.1:8000/api/donation-register', this.userData)
            .then(response => {
                console.log(response.data)
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}
