@include('header')
    	<h1>บันทึกงานไปรษณีย์</h1>


    	<div id="app-2">
  <span v-bind:title="message">
    Hover your mouse over me for a few seconds
    to see my dynamically bound title!
  </span>
</div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
var app2 = new Vue({
  el: '#app-2',
  data: {
    message: 'You loaded this page on ' + new Date().toLocaleString()
  }
})
</script>
@include('footer')