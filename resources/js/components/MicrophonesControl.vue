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
                <div class="col-12 col-lg-3">
                    <card class="mb-5">
                        <h5>Filtros:</h5>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12 mb-3">
                                <label for="brand_filter">Marca:</label>
                                <v-select id="brand_filter"
                                          v-model="brand"
                                          :options="brands"
                                          :getOptionLabel="option => option.brand"
                                          placeholder="Seleccione una Marca"
                                ></v-select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12  mb-3">
                                <label for="type_filter">Tipos:</label>
                                <v-select id="type_filter"
                                          v-model="type"
                                          :options="types"
                                          :getOptionLabel="option => option.type"
                                          placeholder="Seleccione un Tipo"
                                ></v-select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12  mb-3">
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
                                <table class="table table-hover" style="max-height: 10em;">
                                    <tbody style="max-height: 10em; overflow-y: auto;">
                                    <tr v-for="(mic, index) in filteredMicrophones"
                                        :key="`results_${mic.id}`">
                                        <td v-html="index + 1"></td>
                                        <td v-html="mic.model"
                                            @click="selectMicrophone(mic)">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </card>

                </div>
                <div class="col-12 col-lg-9">
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
            brands: [],
            brand: null,
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
    computed: {
        filteredMicrophones() {
            let microphones = this.microphones;

            if (this.pattern) {
                const id = this.pattern.id;
                microphones = microphones.filter(
                    (microphone) => microphone.patterns.filter(
                        (p) => p.id === id).length > 0
                );
            }

            if (this.type) {
                const id = this.type.id;
                microphones = microphones.filter(
                    (m) => m.type_id === id
                );
            }

            if (this.brand) {
                const id = this.brand.id;
                microphones = microphones.filter(
                    (m) => m.brand_id === id
                );
            }

            if (microphones.length === 0) {
                this.microphone = null;
            }

            return microphones;
        }
    },
    methods: {
        get() {
            this.loading = true;
            Promise.all([
                axios.get('/api/microphones')
                    .then(({data: microphones}) => {
                        this.microphones = microphones;
                    }),
                axios.get('/api/brands')
                    .then(({data: brands}) => {
                        this.brands = brands;
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

