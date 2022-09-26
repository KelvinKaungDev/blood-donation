import axios from 'axios'

export default {
    name      : 'UserView',
    data () {
        return {
            errorStatus  : false,
            successStatus: false,
            details      : []
        }
    },
    methods: {
        userList ()
        {
            axios.get('http://127.0.0.1:8000/api/user')
            .then(response => {
                this.details = response.data.result;
            })
            .catch(error => {
                this.errorStatus = true
            })
        },
        editDonatorRequest (id) {
            this.$router.push(
                {name: 'admin-profile', params: {id: id}}
            );
        },
        deleteUser(id)
        {
            axios.delete('http://127.0.0.1:8000/api/user-delete/' + id)
            .then(response => {
                if(response.data.result == false)
                {
                    this.errorStatus   = true
                    this.successStatus = false
                } else {
                    this.successStatus = true
                    this.errorStatus   = false
                    history.back();
                }
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

