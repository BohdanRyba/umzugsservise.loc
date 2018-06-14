<template>

    <ul class="navbar-nav mr-auto">
        <li>
            <select @change="langSelect" v-model="selected" name="langs" id="">
                <option v-for="lang in langs" v-if="selected === lang" selected>{{ lang }}</option>
                <option v-for="lang in langs" v-if="selected !== lang" :value="lang">{{lang}}</option>
            </select>

        </li>
    </ul>

</template>

<script>
    export default {
        data: function () {
            return {
                langs: ['de', 'en', 'ru'],
                selected: this.$cookie.get('locale')
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            langSelect() {
                this.$cookie.set('locale',this.selected)
                axios.post('/language', {locale: this.selected})
                    .then((response) => {
                        return location.href = response.data.redirect
                    })
                    .catch((err) => console.log(err))
            }
        }
    }
</script>
