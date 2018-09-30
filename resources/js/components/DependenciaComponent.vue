<template>

    <div class="row justify-content-center">

        <div class="col-md-3">
                <div class="card card-default">
                    <div class="card-header"><h4>Último consecutivo generado</h4></div>

                    <div class="card-body btn-success">
                        {{ultimo.consecutivo}}
                    </div>
                </div>
            </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4>Crear nuevo consecutivo</h4></div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="dependencia">
                                nombre documento:
                            </label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del documento" v-model="documento.name">
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Escoge la dependencia</label>
                                <select class="custom-select form-control" v-model="depid" v-on:change="getCargos(),cambioColor()">
                                    <option v-for="item in dependencias" v-bind:value="item.id">{{item.name}}</option>
                                </select>

                        </div>

                        <div class="form-group row" v-show="depid != 0">
                            <label class="col-md-3 col-form-label">Escoge cargo</label>
                                <select class="custom-select form-control" v-model="cargoid" v-on:change="getEmpleados()">
                                    <option v-for="itemC in cargos" v-bind:value="itemC.id">{{itemC.name}}</option>
                                </select>

                        </div>

                        <div class="form-group row" v-show="cargoid != 0">
                            <label class="col-md-3 col-form-label">Escoge empleado</label>
                                <select class="custom-select form-control" v-model="empleadoid">
                                    <option v-for="itemE in empleados" v-bind:value="itemE.id">{{itemE.name}}</option>
                                </select>

                        </div>


                        <!-- <button type="submit" class="btn btn-primary" v-on:click="save()">
                            Guardar
                        </button> -->

                        <button type="button" class="btn btn-lg btn-success" v-on:click="save()">Guardar</button>
                    </form>

                </div>

            </div>
        </div>
        <div  class="col-md-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-default">
                            <div class="card-body">
                                <h5>FORMA DE USO</h5>
                                <p>el primer módulo muestra el ultimo código consecutivo asignado</p>
                                <p>el segundo módulo contiene un pequeño formulario donde se peude poner un nombre al documento y ademas llenar 3 datos para asignar un cosecutivo al documento</p>

                            </div>
                        </div>
                    </div>
                </div>
    </div>
             </div>
        <div v-if="cargoid != 0" class="col-md-3">
            <pre v-if="cargoid != 0">{{ $data | json }}</pre>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                urlP:'/api/dependencia',
                urlD:'/api/documento',
                depid:0,
                cargoid:0,
                empleadoid:0,
                dependencias:[],
                empleados:[],
                documento:{
                    name:"",
                    consecutivo: ""
                },
                ultimo:"",
                documentos:[],
                cargos:[]
            }
        },
        created(){
            this.getDependencias();
            this.getDocumento();
        },
        methods:{

            save(){
                let url =`/api/documento`;
                    this.documento.consecutivo = this.depid+"."+this.cargoid+"."+this.empleadoid+"/";

                    axios.post(url, this.documento).then(response => {
                        alert("se guardo de manera exitosa");
                        this.getDocumento();
                    }).catch(error => {

                    });


            },

            cambioColor(){
                if(this.depid % 2 == 0){

                    document.body.style.background = `#70587c`;
                }
                if(this.depid % 3 == 0){

                    document.body.style.background = `#6e67ff`;
                }
                if(this.depid % 5 == 0){

                    document.body.style.background = `#8b0000`;
                }
                if(this.depid % 7 == 0){

                    document.body.style.background = `#ff8c00`;
                }
                if(this.depid % 9 == 0){

                    document.body.style.background = `#2fc4a6`;
                }
                if(this.depid == 1){

                    document.body.div.main.div.div.div.div.div.form.div.select.option.style.background = `#2fc4a6`;
                }
            },

            getDocumento(){
                axios.get(this.urlD).then(response => {
                    console.log("respuesta:", response);
                    // this.documento = response.data.results;
                    for(var i=0; i<response.data.results.length ; i++){
                        this.ultimo = response.data.results[i];
                    }

                }).catch(error => {
                    console.log("Ocurrio un error");
                    this.errors = error.response.data.errors;
                });
            },

            getDependencias(){
                axios.get(this.urlP).then(response => {
                    console.log("respuesta:", response);
                    this.dependencias = response.data.results;
                }).catch(error => {
                    console.log("Ocurrio un error");
                    this.errors = error.response.data.errors;
                });
            },
            getCargos(){

                let url =`/api/cargo/${this.depid}`;
                axios.get(url).then(response => {
                    console.log("respuesta:", response);
                    this.cargos = response.data.results;
                }).catch(error => {
                    console.log("Ocurrio un error");
                    this.errors = error.response.data.errors;
                });
            },

            getEmpleados(){

                let url =`/api/empleado/${this.cargoid}`;
                axios.get(url).then(response => {
                    console.log("respuesta:", response);
                    this.empleados = response.data.results;
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
