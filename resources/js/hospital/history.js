import axios from 'axios'

export default {
    name : 'RequestHistory',
    data () {
        return {
            errorStatus: false,
            details    : []
        }
    },
    methods: {
        showHistory () {
            axios.get('http://127.0.0.1:8000/api/get-request-history')
            .then(response => {
                this.details = response.data.result;
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    },
    mounted()
    {
        this.showHistory();
    }
}

