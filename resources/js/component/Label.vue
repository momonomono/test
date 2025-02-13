<template>
    <label class="c-grid__label u-mb-3">
        <p class="u-pb-1">{{ labelName }}</p>
        <input type="text" class="c-form__main" :name="inputName">

    </label>
</template>

<script>
    export default{
        props :[
            'labelName',
            'inputName'
        ]
    }
</script>