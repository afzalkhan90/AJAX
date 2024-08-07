<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<input type="text" id="num1">
<a href="javascript:void(0)" onclick="click_here()" >Click here</a>


<script>

function click_here()
{
    var num1=jQuery('#num1').val();
    jQuery.ajax({
        url: 'ge.php',
        type: 'post',
        data: 'num1='+num1,
        success:function(rune)
        {
            alert(rune);

        }
    })
}

</script>