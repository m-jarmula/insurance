<form action="index/check" method="POST" id="calculator">
    <fieldset>
        <legend>Składki ubezpieczeniowe</legend>
        <label for="amount">Kwota:</label>
        <select name="amount" id="amount" class="form-control required">
            <option value="">---</option>
            <?php for($i=100; $i<=10000; $i++): ?>
            <option value="<?php echo $i ?>"><?php echo $i ?> PLN</option>
            <?php endfor; ?>
        </select>
        <span class="help-block"></span>
        <label for="payment">Rodzaj płatności</label>
        <select name="payment" id="payment" class="form-control required">
            <option value="">---</option>
            <option value="oneInstalment">Pojedyncza rata</option>
            <option value="fourInstalments">Cztery raty</option>
        </select>
        <label for="vehicleCondition">Stan pojazdu</label>
        <select name="vehicleCondition" id="vehicleCondition" class="form-control required">
            <option value="">---</option>
            <option value="noAccident">Bezwypadkowy</option>
            <option value="accident">Wypadkowy</option>
        </select>
        <span class="help-block"></span>
        <button type="submit" class="btn btn-default">Sprawdź</button>
    </fieldset>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6" id="response"></div>
        <div class="col-md-4"></div>
    </div>
</form>
<script>
    $('#calculator').on('submit',function(e){
        e.preventDefault();   
        var requestData = {};
        $('#calculator select').each(function(){
            var name = $(this).attr('name');
            if($(this).val().length > 0){
                requestData[name] = $(this).val();
            }
        });
        console.log();
        if(getObjectLength(requestData) < $('.required').length){
            $('#response').empty().html('<h3 class="faild">Proszę uzupełnić wszystkie pola');
            return false;
        }
        $.ajax({
           type     : "POST",
           url      : $(this).attr('action'),
           data     : requestData,
           success  : function(data){
               $('#response').empty().html('<h3>Pańska stawka to '+ data +' zł</h3>');             
           }
        });
    });
    function getObjectLength(object){
        var counter = 0;
        for(var i in object){
            counter++;
        }
        return counter;
    }
</script>