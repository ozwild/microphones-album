<template>
    <div>
        <h5><small>{{ label }}:</small> <br/>{{ value }}</h5>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'data-pair',
    props: ['label', 'value']
}
</script>
