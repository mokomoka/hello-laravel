import Vue from 'vue'
require('./bootstrap')

var rndm = new Vue({
    el: '#rndm',
    data: {
        messages: [],
        message: ''
    },
    created() {
        var self = this;
        var url = '/message/list';
        axois.get(url).then(function(response){
            self.messages = response.data;
        });
    },
    methods: {
        messageRandom: function() {
            this.message = this.messages[Math.random()*4]['content'];
        }
    }
});