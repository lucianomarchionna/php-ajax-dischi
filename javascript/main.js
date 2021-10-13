Vue.config.devtools = true;
const app = new Vue(
    {
        el: '#app',
        data: {
            albums: ''
        },
        created() {
            axios
                .get('http://localhost/php-ajax-dischi/api/server.php')
                .then((response) =>{
                    this.albums = response.data;
                })
        }
    }
)