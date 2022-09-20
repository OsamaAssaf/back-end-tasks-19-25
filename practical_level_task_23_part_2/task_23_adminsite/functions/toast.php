
<script>
    function showToast($msg){
        let toast = $('#custom-toast');
        toast.text($msg);
        toast.show(500);
        window.setTimeout(function (){
            toast.hide(500);
        },3000);
    }
</script>
