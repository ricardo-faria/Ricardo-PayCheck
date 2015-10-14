var payCheck = {
    init: function(){
         $('#calculate').click(function(event){
            event.preventDefault();
            payCheck.getSalary();
        });        
    },
    
    getSalary: function(){
        var salary = $('#salary').val();
        payCheckService.sendSalary(salary, payCheck.showResult);
    },

    showResult: function(result){
    
        var json = JSON.parse(result);
        var inss = json.inss,
            irpf =  json.irpf,
            salary = json.salary;
        
        $('#inss').html(inss);
        $('#irpf').html(irpf);
        $('#liquid').html(salary);
    }
};


payCheck.init();
