<template>
    <div class="card-body">
        <div
            v-if="response"
            class="table-responsive">
            <table class="table table-striped table-sm">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Option</th>
                    <th scope="col">Type</th>
                </tr>
                </thead>
                <tbody
                    id="resultSearch"
                    class="table-active"
                    v-for="options in response"
                >
                <tr
                    v-for="(option, name) in options"
                    :key="option"
                >
                    <td v-text="name"></td>
                    <td v-text="option"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: 'TableOptionsComponent',
    props: ['response']
}
</script>

<style scoped>

</style>
