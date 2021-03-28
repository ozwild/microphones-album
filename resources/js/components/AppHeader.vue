<template>

    <card>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <div class="d-flex">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <img class="img-fluid" src="/img/profile/universidad-logo.png"
                                                     style="margin-top: 6px;"/>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <img class="img-fluid" src="/img/profile/esa-logo.png"
                                                     style="height: 5em; height: 5em; padding: 8px 4px;"/>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="d-flex flex-column header-data">
                                            <div>Universidad Galileo</div>
                                            <div>Microfonia</div>
                                            <div>Oscar Palencia - 08002504</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <div style="with: 3em;"></div>
                            <div class="d-flex flex-column ml-4">
                                <h1 style="line-height: 1.75">Album de Micrófonos</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </card>

</template>

<script>
export default {
    name: 'app-header'
}
</script>

<style scoped>
.header-data {
    margin-top: 3px;
    padding: 4px 8px;
    font-size: 1.05em;
}

.header-data div {
    padding: 0;
    margin: 0 0 4px 0;
    line-height: 1;
    color: #555;
    font-family: sans-serif;
}
</style>
