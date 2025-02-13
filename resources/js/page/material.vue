<template>
    <div class="l-container">
        <form method="post">
            <input type="hidden" name="_token" :value="csrf_token" >
            
            <Label 
                labelName="原料コード"
                inputName="code"
            />

            <Label 
                labelName="原料名"
                inputName="name"
            />

            <Label 
                labelName="値段"
                inputName="price"
            />

            <button class="c-button__form u-mt-3">送信</button>
        </form>
    </div>
</template>

<script>
    import Label from "../component/Label.vue";

    export default{
        data(){
            return {
                csrf_token : document.querySelector('meta[name="csrf-token"').content
            }
        },
        components :{
            Label
        }
    }
</script>