<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="article in articles" :key="article.id">
                    <div class="card-header">
                        <h1>{{ article.title }}</h1>
                    </div>

                    <div class="card-body">
                        <p>{{ article.body }}</p>
                        <span><strong>Tempo di lettura:</strong> {{ article.reading_time }} minuti ||</span>
                        <span><strong>Categoria:</strong> {{ article.category_id }} ||</span>
                        <span><strong>Autore:</strong> {{ article.author }} ||</span>
                        <span><strong>Creato il:</strong> {{ new Date(article.created_at).toLocaleString('it')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            axios.get('api/articleList').then(response => {
                this.articles = response.data.data;
                console.log(this.articles);
            });
        },
        data() {
            return {
                articles:"",
            }
        }    
    }
</script>
<style lang="scss" scoped>
    .card{
        margin: 15px 0;
    }
</style>
