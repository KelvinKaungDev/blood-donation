import axios from 'axios'

export default {
    name      : 'UserView',
    data () {
        return {
            errorStatus: false,
            details    : []
        }
    },
    methods: {
        userList () {
            axios.get('http://127.0.0.1:8000/api/user')
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
        this.userList();
    }
}

