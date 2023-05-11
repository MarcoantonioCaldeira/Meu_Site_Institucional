<template>
    <div id="area_mensagem">
        <Message :msg="msg" v-show="msg" />
    </div>
    <form ref="form" @submit.prevent="enviaMesangem">

        <input type="text" id="input" class="input_nome" v-model="nome"  name = "nome" placeholder="Seu nome" required>

        <input type="text" id="input" class="input_sobrenome"  v-model="sobrenome" name="sobrenome" placeholder="Sobrenome" required>

        <br><input type="text" id="input" class="input_telefone" v-model="telefone"  name="telefone"  placeholder="telefone" required>

        <input type="text" id="input" class="input_email"  v-model="email" name="email" placeholder="E-mail" required>

        <textarea id="text_area" name="message" placeholder="Assunto" required>

        
        </textarea>
       
        <button  type="submit" class="btn_enviar">Enviar</button>
    </form>

</template>

<script>
import emailjs from '@emailjs/browser';
import Message from '../Message.vue'


export default{
    name: 'Contato',
    data(){
        return{
            
                nome: "",
                sobrenome: "",
                email: "",
                telefone: null,
                message: "",
                msg: null
            
        }
    },


    methods:{

        enviaMesangem(){


            this.msg = "O email foi enviado, em breve retornaremos"
            // clear message
            setTimeout(() => this.msg = "", 3000)

            emailjs.sendForm('service_qrv1zon', 'template_7z9vi38', this.$refs.form, 'ni7t20CXVt0i1byAi')

            .then((result) => {
                console.log('Email enviado com sucesso!', result.text);
                

            }, (error) => {
                console.log('Falha ao enviar email', error.text);
            });

            this.nome = '';
            this.sobrenome = '';
            this.email = '';
            this.telefone = '';
            this.message = '';
            
        }
    }
}

</script>

<style src="./style_input.scss"  lang="scss">
</style>