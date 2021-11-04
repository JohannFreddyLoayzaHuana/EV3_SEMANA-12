<template>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card">

                     {{message}}

                </div>

            <div class="card">

        <span v-bind:title="cambio">

            GUARDAR TODOS LOS CAMBIOS?

    </span>

    </div>

   

    <div class="card">

        <button  type="button" class="btn btn-success" v-bind:id="btn1">{{btn1}}.GUARDAR</button>

        <button button type="button" class="btn btn-danger" v-bind:id="btn2">{{btn2}}.CANCELAR</button>

            </div>
            <img src="https://st3.depositphotos.com/9998432/16091/v/600/depositphotos_160911750-stock-illustration-cute-chibi-kawaii-characters-alphabet.jpg" alt="">

        </div>
         

    </div>

</div>

</template>

    <script>

    export default {

        mounted() {

        console.log('Component mountado.')

        },

    data() {

        return {

        message: 'Cargaste esta pagina el ' + new Date().toLocaleString(),

        cambio:'siCambiaGenial',

        btn1:'1',

        btn2:'2',

        }

    }

}

</script>