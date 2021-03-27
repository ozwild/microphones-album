<template>
    <div class="card">
        <img v-if="image" :src="image" class="card-img-top" alt="...">
        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    name: 'card',
    props: ['image']
}
</script>
