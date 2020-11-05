<template>
    <div>
        <input type="number" v-model="from" placeholder="Desde" class="d-inline-block small focom-mouse-hover-pointer" style="width: 80px;">
        <i class="font-weight-bolder h5">─</i>
        <input type="number" v-model="to" placeholder="Hasta" class="d-inline-block small focom-mouse-hover-pointer" style="width: 80px">
        <a @click="submit" class="pl-2 fas fa-search text-primary text-decoration-none focom-mouse-hover-pointer"></a>
    </div>
</template>

<script>
export default {
    data(){
        return {
            from: '',
            to: ''
        }
    },
    methods: {
        submit(){

            let query = `${this.from},${this.to}`;
            
            let url = new URL(window.location.href);
            url.searchParams.append('price', query);

            window.location = url;
        }
    }
    

}
</script>

