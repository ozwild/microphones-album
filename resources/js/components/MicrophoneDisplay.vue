<template>
    <card v-if="!microphone">Detalles de micrófono no disponible</card>
    <div v-else>

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-md-4 mb-4">
                    <card class="shadow">
                        <div class="picture-display" :style="`background-image: url('${microphone.picture}');`"></div>
                    </card>
                </div>

                <div class="col-12 col-md-4">
                    <h2>{{ microphone.model }}</h2>
                    <data-pair label="Tipo"
                               :value="microphone.brand.brand"
                               class="mb-2">
                    </data-pair>
                    <data-pair label="Tipo"
                               :value="microphone.type.type"
                               class="mb-2">
                    </data-pair>
                    <data-pair label="Respuesta de Frecuencia"
                               :value="microphone.frequency_response"
                               class="mb-2">
                    </data-pair>
                    <data-pair label="Usos" class="mb-2">
                        <ul class="usage-list">
                            <li v-for="use in microphone.uses" :key="`microphone_uses_${use.id}`">
                                <badge class="badge-light">{{ use.usage }}</badge>
                            </li>
                        </ul>
                    </data-pair>

                </div>

                <div class="col-12 col-md-4">
                    <data-pair label="Patron(es)" class="mb-2">
                        <div class="d-flex flex-wrap patterns-list">
                            <badge v-for="pattern in microphone.patterns"
                                   :key="`microphone_patters_${pattern.id}`"
                                   class="badge-primary mr-1">{{
                                    pattern.pattern
                                }}
                            </badge>
                        </div>
                    </data-pair>
                    <data-pair label="Precio" class="mb-2">
                        <h3>{{
                                (microphone.price_in_quetzales).toLocaleString('en-US', {
                                    style: 'currency', currency:
                                        'GTQ'
                                })
                            }}</h3>
                    </data-pair>
                </div>

            </div>
        </div>


    </div>
</template>

<script>
import DataPair from "./DataPair";

export default {
    name: 'microphone-display',
    props: ['microphone'],
    components: {DataPair},
}
</script>

<style>
.patterns-list {
    font-size: 1.1em;
}

.usage-list {
    font-size: 1.25em;
}

.picture-display {
    padding: 50%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}
</style>
