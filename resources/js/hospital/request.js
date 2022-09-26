import axios from 'axios'

export default {
    name : 'RequestHistory',
    data () {
        return {
            errorStatus  : false,
            successStatus: false,
            userData     : {
                blood_type : '',
                volume     : '',
                emergency  : '',
                hospital_id: ''
            },
        }
    },
    methods: {
        submit () {
            axios.post('http://127.0.0.1:8000/api/blood-request', this.userData)
            .then(response => {
                if(response.data.result == false)
                {
                    this.errorStatus   = true
                    this.successStatus = false
                } else {
                    this.successStatus = true
                    this.errorStatus   = false
                }
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}

