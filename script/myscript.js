let { createApp } = Vue;

createApp({
    data() {
        return {
            name: "qualcosa",
        }
    },
    methods: {
        newEmail() {
            axios.get("https://flynn.boolean.careers/exercises/api/random/mail")
                .then(risposta => {
                    this.email = risposta.data.response;
                    this.emailList.push(this.email);
                });
        },
    }
}).mount("#app");