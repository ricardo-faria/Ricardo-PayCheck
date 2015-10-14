var payCheckService = {
    sendSalary: function(salary, callback){
        $.ajax({
            url: "php/calculate.php",
            data: "salary=" + salary,
            success:function(result){
               callback(result);
            }
        });
    }
};