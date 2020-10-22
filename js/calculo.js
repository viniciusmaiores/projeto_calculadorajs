function botao(num) { 
    var salvo = document.getElementById('visor').value += num;  }

function calcula()
    {
        resul = 0;
        resul = document.getElementById('visor').value;

        document.getElementById('visor').value = '';

        document.getElementById('visor').value = eval(resul);
    }

function limpar(){
	    document.getElementById('visor').value = '';}