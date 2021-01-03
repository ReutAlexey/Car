<template>
    <div class="card">
        <div class="card-header">
            <div class="form-row">
                <div class="col-auto">
                    <input
                        type="text"
                        id="searchVin"
                        name="searchVin"
                        class="form-control"
                        placeholder="Enter vin..."
                        v-model="text"
                    >
                </div>
                <div class="col-auto">
                    <b-btn
                        id="search"
                        class="btn btn-success"
                        @click="search"

                    >Search
                        <span v-if="loading" class="spinner-border spinner-border-sm" aria-hidden="true">
                        </span>
                    </b-btn>
                </div>
            </div>

            <component
                :is="componentLoad"
                :response="response"
            ></component>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import AlertErrors from './AlertErrorsComponent'
import TableOptions from './TableOptionsComponent'

export default {
    name: "SearchComponent",
    components: {
        AlertErrors,
        TableOptions
    },
    data: () => ({
        text: '',
        response: null,
        loading: false,
        component: null
    }),
    methods: {
        search () {
        this.text = this.text.trim()
            if (this.text) {
                this.loading = true
                axios({ url: 'https://test-task.kariid.adsffdby.vh114.hosterby.com/api/search-vin/' + this.text })
                    .then(res => {
                        this.loading = false
                        this.response = res.data
                        this.text = ''
                    })
                    .catch(err => {
                        console.log(err)
                    })

            }
        }
    },
    computed: {
        componentLoad () {
            if (typeof this.response === 'object') {
                this.component = 'TableOptions'
            } else if (typeof this.response === 'string') {
                this.component = 'AlertErrors'
            }
            return this.component
        }
    }
}
</script>
