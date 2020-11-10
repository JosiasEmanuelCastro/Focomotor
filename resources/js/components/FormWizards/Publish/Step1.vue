<template>
  <section class="border">
                <div class="card shadow-sm text-white bg-primary p-3 shadow">
                    <div>
                        <h3 class="d-inline h4">
                            1. ¿Qué vehículo quiere publicar?
                        </h3>
                    </div>
                </div>

                <div class="p-4">
                    <div
                        class="py-3"
                        v-for="list in current.lists"
                        :value="list"
                        :key="list.id"
                    >
                        <a
                            @click="own.nextTab()"
                            class="text-dark focom-mouse-hover-pointer text-decoration-none focom-mouse-hover-pointer"
                        >
                            <i
                                class="fas h3 d-inline pl-1"
                                :class="`fa-${list.icon}`"
                            ></i>
                            <h5 class="pl-3 d-inline">{{ list.name }}</h5>
                        </a>
                        <hr />
                    </div>
                </div>
            </section>
</template>

<script>
import { extend } from 'vee-validate';
import { required } from 'vee-validate/dist/rules';

extend('required', {
  ...required,
  message: 'This field is required'
});

export default {
    props: ['own'],
    data(){
        return {
            current: {
                lists: "",
                children_node: ""
            },
            theList: "",
        }
    },
    async mounted(){

        
       
    },
    validations: {
        country: {
            required
        },
        city: {
            required
        },
        form: ['country', 'city']
    },
    methods: {
        validate() {
            this.$v.form.$touch();
            var isValid = !this.$v.form.$invalid
            this.$emit('on-validate', this.$data, isValid)
            return isValid
        }
    }

}
</script>

<style>

</style>