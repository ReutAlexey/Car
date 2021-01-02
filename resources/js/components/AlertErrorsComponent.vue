<template>
    <div>
        <div
            class="alert alert-danger"
        >
            {{response}}
        </div>
    </div>
</template>

<script>
export default {
    name: 'AlertErrorsComponent',
    props: ['response']
}
</script>

<style scoped>

</style>
