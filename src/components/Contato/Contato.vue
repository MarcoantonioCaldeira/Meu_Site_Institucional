<template>
    <input type="text" id="input" class="input_nome"   v-model="form_Data.nome"  placeholder="Seu nome">
    <input type="text" id="input" class="input_sobrenome" v-model="form_Data.sobrenome" placeholder="Sobrenome">
    <br><input type="text" id="input" class="input_telefone" v-model="form_Data.telefone"  placeholder="telefone">
    <input type="text" id="input" class="input_email"  v-model="form_Data.assunto" placeholder="E-mail">
    <textarea id="text_area" v-model="form_Data.assunto" placeholder="Assunto">

    </textarea>
</template>

<script>
export default{
    name: 'Contato',
    data(){
        return{
            form_Data:{
                nome: "",
                sobrenome: "",
                email: "",
                telefone: null,
                assunto: ""
            }
        }
    },
    methods:{
            
    }
}


</script>
<style src="./style_input.css">
</style>