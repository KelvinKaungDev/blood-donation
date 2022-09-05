import donationImg from '../../public/img/donation.jpg'

export default {
    name : 'DonationView',
    data () {
        return {
            donationImg : donationImg,
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
