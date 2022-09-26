import axios from 'axios'
import { useRoute } from 'vue-router';


export default {
    name : 'EditHospitalView',
    data () {
        return {
            details      : [],
            updateDetail: {
                state: '',
                id   : useRoute().params.id
            },
            errorStatus  : false,
            id           : useRoute().params.id,
        }
    },
    methods: {
        update() {
            axios.post('http://127.0.0.1:8000/api/update-blood-request', this.updateDetail)
            .then(response => {
                history.back();
            })
            .catch(error => {
                this.errorStatus = true
            })
        },
        getReqestByID()
        {
            axios.get('http://127.0.0.1:8000/api/blood-request/' + this.id)
            .then(response => {
                this.details = response.data.result;
                console.log(details)
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    },
    mounted()
    {
        this.getReqestByID();
    }
}

