<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CREAR DEPENDENCIA</div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="dependencia">
                                nombre:
                            </label>
                            <input type="text" class="form-control" name="nombre">
                        </div>

                        <div class="form-group">
                            <label for="dependencia">
                                pertenece a:
                            </label>
                            <input type="text" class="form-control" name="dependeciapadre">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Guardar
                        </button>
                    </form>
                    <!-- crear dependencias y subdependencias luego guardar consecutivo del doc con las dependecias -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
