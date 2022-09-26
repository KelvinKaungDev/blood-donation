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
        requestList () {
            axios.get('http://127.0.0.1:8000/api/get-request-history')
            .then(response => {
                this.details = response.data.result;
            })
            .catch(error => {
                this.errorStatus = true
            })
        },
        editHospitalBloodRequest (id) {
            this.$router.push(
                {name: 'edit-hospital', params: {id: id}}
            );
        },
        requestDelete(id)
        {
            axios.delete('http://127.0.0.1:8000/api/delete-blood-request/' + id)
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
        this.requestList();
    }
}
