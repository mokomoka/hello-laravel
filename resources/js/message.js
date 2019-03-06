import Vue from 'vue'
require('./bootstrap')

var rndm = new Vue({
    el: '#rndm',
    data: {
        messages: [],
        message: ''
    },
    methods: {
       fetchMessages:  function() {
            axios.get('/api/get').then((res)=>{
                this.messages = res.data
                return message;
            })
        },
        messageRandom: function() {
            rnd = Math.floor(Math.random() * this.messages.length);
            this.message = this.messages[rnd];
            return message;
        }
    },
    created() {
        this.fetchMessages()
    }
});