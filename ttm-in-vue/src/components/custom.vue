<template>
    <div class="main">
        <h2>Hello Vue.js</h2>
        <hr/>
        <p>{{sContent}}</p>
    </div>
</template>
<script>
export default {
  data() {
    return {
      sContent: "This is custom components"
    };
  }
};
</script>