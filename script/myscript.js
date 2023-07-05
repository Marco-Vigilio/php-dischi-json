let { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: "./db/dischi.json",
            object: [],
        }
    },
    methods: {
        getItems() {
            axios.get(this.apiUrl)
                .then(risposta => {
                    console.log(risposta.data);
                    this.object = risposta.data;
                });
        },
    },
    created() {
        this.getItems();
    },
}).mount("#app");