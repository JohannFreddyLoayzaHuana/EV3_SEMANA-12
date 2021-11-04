<template>

        <div class="container">

        <div class="row justify-content-center">
                
        <div class="col-md-12">

        <div class="card">

            DETALLES:

        </div>

        <ol>

            <li>CITA:1</li>

            <li>CITA:2</li>

            <li>CITA:3</li>

            <li>CITA:4</li>

        </ol>

        <ol>

            <li v-for="variable in todos" v-bind:key="variable.id">

            {{ variable.text }}

            </li>

        </ol>

        <button v-for="nu in todos" v-bind:key="nu.id*3">{{ nu.text }}</button>

        <h1 v-for="na in todos" v-bind:key="na.id*4">{{ na.name }} </h1>

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

                    message: 'Hello',

                todos:[

                { id:1, text:"ejemplo 1",name:"TENGA BUEN "},

                {id:2,text:"ejemplo 2",name:"DIA"},


                    ]

                }

             }

        }

</script>