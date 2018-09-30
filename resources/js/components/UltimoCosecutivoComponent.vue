<template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"><h4>Último consecutivo generado</h4></div>

                    <div class="card-body">
                        {{ultimo.consecutivo}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
         data(){
            return{
                urlP:'/api/documento',
                ultimo:"",
                documento:[]
            }
        },
        created(){
            this.getDocumento();

        },
        methods:{

            getDocumento(){
                axios.get(this.urlP).then(response => {
                    console.log("respuesta:", response);
                    // this.documento = response.data.results;
                    for(var i=0; i<response.data.results.length ; i++){
                        this.ultimo = response.data.results[i];
                    }
                    document.body.style.background = `#0000FF`;
                }).catch(error => {
                    console.log("Ocurrio un error");
                    this.errors = error.response.data.errors;
                });
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
