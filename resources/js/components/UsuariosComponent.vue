<template>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    Es mi primer componente es una alegria {{message}}

                </div>

            <div class="card">

        <span v-bind:title="cambio">

            Hover your mouse over me for a few seconds

            to see my dynamically bound title!

    </span>

    </div>

    <div class="card">

        <button v-bind:id="btn1">{{btn1}}</button>

        <button v-bind:id="btn2">{{btn2}}</button>

            </div>

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

        message: 'You loaded this page on ' + new Date().toLocaleString(),

        cambio:'siCambiaGenial',

        btn1:'1',

        btn2:'2',

        }

    }

}

</script>