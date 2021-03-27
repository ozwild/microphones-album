<template>

    <card>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <img class="img-fluid" src="/img/profile/universidad-logo.png" style="height: 5em;"/>
                        <img class="img-fluid" src="/img/profile/esa-logo.png"
                             style="height: 5em; height: 5em; padding: 8px 4px;"/>
                        <div class="d-flex flex-column header-data">
                            <div>Universidad Galileo</div>
                            <div>Microfonia</div>
                            <div>Oscar Palencia - 08002504</div>
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
