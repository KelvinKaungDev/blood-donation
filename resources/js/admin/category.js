import axios from 'axios'

export default {
    name : 'CategoryView',
    data () {
        return {
            errorStatus: false,
            details    : []
        }
    },
    methods: {
        historyList () {
            axios.get('http://127.0.0.1:8000/api/hospital')
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
        this.historyList();
    }
}
