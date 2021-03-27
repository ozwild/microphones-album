<template>
    <card v-if="loading">
        <spinner v-if="loading"></spinner>
        <div v-if="!loading && microphones.length === 0">
            <h3 class="text-muted">No se encontraron resultados</h3>
        </div>
    </card>
    <div v-else>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 mb-5">
                    <h1>Album de Micrófonos</h1>
                </div>
                <div class="col-12 col-lg-4">
                    <card class="mb-5">
                        <h5>Filtros:</h5>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12">
                                <label for="type_filter">Tipos:</label>
                                <v-select id="type_filter"
                                          v-model="type"
                                          :options="types"
                                          :getOptionLabel="option => option.type"
                                          placeholder="Seleccione un Tipo"
                                ></v-select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <label for="pattern_filter">Patrones:</label>
                                <v-select id="pattern_filter"
                                          v-model="pattern"
                                          :options="patterns"
                                          :getOptionLabel="option => option.pattern"
                                          placeholder="Seleccione un Patrón"
                                ></v-select>
                            </div>
                        </div>
                        <h5 class="mt-4">Resultados:</h5>
                        <div class="row">
                            <div class="col-12">
                                <ul id="array-rendering">
                                    <li>
                                        <button v-for="mic in microphones"
                                                class="btn btn-link"
                                                v-html="mic.model"
                                                @click="selectMicrophone(mic)">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </card>

                </div>
                <div class="col-12 col-lg-8">
                    <alert v-if="!microphone" title="Seleccione un Micrófono">
                        Seleccione un Micrófono de entre la lista en la izquierda para comenzar
                    </alert>
                    <microphone-display v-else :microphone="microphone"></microphone-display>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import MicrophoneDisplay from './MicrophoneDisplay';
import vSelect from 'vue-select';

export default {
    name: 'microphone-control',
    components: {MicrophoneDisplay, vSelect},
    data() {
        return {
            loading: true,
            patterns: [],
            pattern: null,
            types: [],
            type: null,
            microphones: [],
            microphone: null,
        }
    },
    mounted() {
        this.get();
    },
    methods: {
        get() {
            this.loading = true;
            Promise.all([
                axios.get('/api/microphones')
                    .then(({data: microphones}) => {
                        this.microphones = microphones;
                    }),
                axios.get('/api/types')
                    .then(({data: types}) => {
                        this.types = types;
                    }),
                axios.get('/api/patterns')
                    .then(({data: patterns}) => {
                        this.patterns = patterns;
                    }),
            ]).then(() => {
                this.loading = false
            });

        },
        selectMicrophone(microphone) {
            this.microphone = microphone;
        }
    }
}
</script>

